<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Profile;
use App\Models\User;
use App\Models\Operationhour;
use App\Models\Transaction;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\CartOrder;
use Illuminate\View\View;
use DB;
use Carbon\Carbon;


class OwnerController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $Trx = Transaction::where('user_id', $user_id)->where('status_id', 1)->get();
        $hour = Operationhour::get();
        
        $topUsers = User::select('users.id', 'users.name', DB::raw('SUM(transactions.amount) as total_amount'))
        ->join('transactions', 'users.id', '=', 'transactions.user_id')
        ->where('transactions.status_id', 1)
        ->groupBy('users.id', 'users.name')
        ->orderByDesc('total_amount')
        ->limit(10)
        ->get();
        return view('owner.dashboard', compact('hour','topUsers'));
    }
    
    public function menu(Request $request)
    {
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        if (!$startDate || !$endDate ) {
             // Set default values
            $startDate = Carbon::now()->startOfMonth();
            $endDate = Carbon::now()->endOfMonth();
        } else {
            $startDate = $request->query('startDate');
            $endDate = $request->query('endDate');
        }

        $user = Auth::user();

        $categories = Category::all();
        $productsByCategory = Product::with('category')
            ->orderBy('category_id')
            ->get()
            ->groupBy('category_id')
            ->map(function ($products) use ($startDate, $endDate) {
                return $products->map(function ($product) use ($startDate, $endDate) {
                    $totalSold = CartOrder::where('product_id', $product->id)
                        ->whereBetween('created_at', [$startDate, $endDate])
                        ->sum('qty');
                    $totalAmount = $totalSold * $product->harga;
                    $product->totalSold = $totalSold;
                    $product->totalAmount = $totalAmount;
                    return $product;
                });
            });
            // dd($productsByCategory,$startDate,$endDate);
    return view('owner.Menu.index', compact('categories', 'productsByCategory','startDate','endDate'));
    }
    
    public function trx(Request $request)
    {
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        if (!$startDate || !$endDate) {
            // Set default values
            $startDate = Carbon::now()->startOfMonth();
            $endDate = Carbon::now()->endOfMonth();
        } else {
            $startDate = Carbon::parse($startDate);
            $endDate = Carbon::parse($endDate);
        }

        $numberOfDays = $endDate->diffInDays($startDate);

        // Generate labels
        $labels = [];
        $data = [];

        if ($numberOfDays < 60) {
            $currentDate = $startDate->copy();
            while ($currentDate->lte($endDate)) {
                $labels[] = $currentDate->format('Y-m-d');
                $data[] = 0;
                $currentDate->addDay();
            }
            // Retrieve total sales from the database
            $totalSales = DB::table('transactions')
            ->select(DB::raw('DATE(updated_at) as date'), DB::raw('SUM(amount) as total_sales'))
            ->where('status_id', 1)
            ->whereDate('updated_at', '>=', $startDate)
            ->whereDate('updated_at', '<=', $endDate)
            ->groupBy('date')
            ->get();
        } else {
            $currentMonth = $startDate->copy()->startOfMonth();
            $endMonth = $endDate->copy()->endOfMonth();

            while ($currentMonth->lte($endMonth)) {
                $labels[] = $currentMonth->format('Y-m');
                $data[] = 0;
                $currentMonth->addMonth();
            }
            // Retrieve total sales from the database
            $totalSales = DB::table('transactions')
            ->select(DB::raw('DATE_FORMAT(updated_at, "%Y-%m") as date'), DB::raw('SUM(amount) as total_sales'))
            ->where('status_id', 1)
            ->whereDate('updated_at', '>=', $startDate)
            ->whereDate('updated_at', '<=', $endDate)
            ->groupBy('date')
            ->get();
        }

        

        // Update data array with total sales values for corresponding dates
        foreach ($totalSales as $sale) {
            $index = array_search($sale->date, $labels);
            if ($index !== false) {
                $data[$index] = $sale->total_sales;
            }
        }

        // Convert the data to JSON format
        $labels = json_encode($labels);
        $data = json_encode($data);

        $Trx = Transaction::get();
        // dd($totalSales,$labels,$data,$startDate,$endDate,$numberOfDays);

        // Pass the data to the view
        return view('owner.trx.index', compact('Trx', 'startDate', 'endDate', 'labels', 'data'));


}

    public function save(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'namalengkap' => 'required',
            'phonenumber' => 'required',
            'alamat' => 'required',
        ]);
        // Get the authenticated user
        $user = Auth::user();
    
        // Create or update the user's profile
        $profile = Profile::updateOrCreate(
            ['user_id' => $user->id],
            [
                'namalengkap' => $validatedData['namalengkap'],
                'nohp' => $validatedData['phonenumber'],
                'alamat' => $validatedData['alamat'],
            ]
        );
        // Redirect back or to any other page
        return redirect()->route('dashboard')->with('success', 'Profile saved successfully.');
    }
    

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
