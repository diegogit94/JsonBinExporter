<?php

namespace App\Observers;

use App\Models\Bank;
use App\Models\BankCountry;

class BankObserver
{
    /**
     * Handle the Bank "created" event.
     *
     * @param  \App\Models\Bank  $bank
     * @return void
     */
    public function created(Bank $bank)
    {
        BankCountry::create([
            'bank_id' => $bank->id,
        ]);

        BankFranchise::create([
            'bank_id' => $bank->id,
        ]);
    }

    /**
     * Handle the Bank "updated" event.
     *
     * @param  \App\Models\Bank  $bank
     * @return void
     */
    public function updated(Bank $bank)
    {
        //
    }

    /**
     * Handle the Bank "deleted" event.
     *
     * @param  \App\Models\Bank  $bank
     * @return void
     */
    public function deleted(Bank $bank)
    {
        //
    }

    /**
     * Handle the Bank "restored" event.
     *
     * @param  \App\Models\Bank  $bank
     * @return void
     */
    public function restored(Bank $bank)
    {
        //
    }

    /**
     * Handle the Bank "force deleted" event.
     *
     * @param  \App\Models\Bank  $bank
     * @return void
     */
    public function forceDeleted(Bank $bank)
    {
        //
    }
}
