@extends('layout.master')
@section('title')
Profile
@endsection
@section('content')

<div class="card">
    <form action="{{ route('profile.save') }}" method="post">
        @csrf
        <div class="card-header">
            <div class="card-title">
                <h2>Profile Setting</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="row fs-4 mb-5">
                <div class="col-6 col-lg-2 my-auto">Nama</div>
                <div class="col-6 col-lg-3"><input type="text" class="form-control" id="" value="{{ $user->name }}"></div>
            </div>
            <div class="row fs-4 mb-5">
                <div class="col-6 col-lg-2 my-auto">Nama lengkap</div>
                <div class="col-6 col-lg-3 my-auto">
                    <input type="text" name="namalengkap" class="form-control" value="{{ $profile->namalengkap }}" placeholder="{{ $user->name }}" required>
                </div>
                
            </div>
            <div class="row fs-4 mb-5">
                <div class="col-6 col-lg-2 my-auto">Email</div>
                <div class="col-6 col-lg-3"><input type="text" class="form-control" id="" value="{{ $user->email }}" disabled></div>
            </div>
            <div class="row fs-4 mb-5">
                <div class="col-6 col-lg-2 my-auto">Phone Number</div>
                <div class="col-6 col-lg-3">
                    <input type="number" name="phonenumber" class="form-control" value="{{ $profile->nohp }}" placeholder="08xxxxxxxxx" required>
                </div>
            </div>
            
            <div class="row fs-4 mb-5">
                <div class="col-6 col-lg-2">Alamat</div>
                <div class="col-6 col-lg-3">
                    <textarea name="alamat" class="form-control" cols="10" rows="5" required>{{ $profile->alamat }}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save Profile</button>

        </div>
    </form>
</div>

@endsection