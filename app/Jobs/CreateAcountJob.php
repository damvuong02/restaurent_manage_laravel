<?php

namespace App\Jobs;

use App\Events\CreateAcount;
use App\Models\Account;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateAcountJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public Account $account)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        CreateAcount::dispatch("hehe");
    }
}
