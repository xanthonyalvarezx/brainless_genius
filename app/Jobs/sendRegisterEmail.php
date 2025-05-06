<?php

namespace App\Jobs;

use App\Mail\AdminRegistered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;


class sendRegisterEmail implements ShouldQueue
{
    use Queueable;
    public $incoming;

    /**
     * Create a new job instance.
     */
    public function __construct($incoming)
    {
        $this->incoming = $incoming;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->incoming['sendTo'])->send(new AdminRegistered(['email' => $this->incoming['email'], 'password' => $this->incoming['password']]));
    }
}
