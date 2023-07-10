<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class TransactionStatusUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public $status;
    public $transactionCode;
    public $payment;
    public $nama;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($status, $transactionCode, $payment, $nama)
    {
        $this->status = $status;
        $this->transactionCode = $transactionCode;
        $this->payment = $payment;
        $this->nama = $nama;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.trx-success')
            ->from([
                'address' => env('MAIL_FROM_ADDRESS'), 
                'name' => 'Kopi Kaliper'
            ])
            ->with([
                'nama' => $this->nama,
                'status' => $this->status,
                'transactionCode' => $this->transactionCode,
                'payment' => $this->payment,
            ])
            ->subject('Transaction Status Updated');
    }
}
