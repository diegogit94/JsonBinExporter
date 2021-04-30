<?php

namespace App\Observers;

use App\Models\franchise;

class FranchiseObserver
{
    /**
     * Handle the franchise "created" event.
     *
     * @param  \App\Models\franchise  $franchise
     * @return void
     */
    public function created(franchise $franchise)
    {
        BankFranchise::create([
            'franchise_id' => $franchise->id,
        ]);

        Bin::create([
            'franchise_id' => $franchise->id,
        ]);
    }

    /**
     * Handle the franchise "updated" event.
     *
     * @param  \App\Models\franchise  $franchise
     * @return void
     */
    public function updated(franchise $franchise)
    {
        //
    }

    /**
     * Handle the franchise "deleted" event.
     *
     * @param  \App\Models\franchise  $franchise
     * @return void
     */
    public function deleted(franchise $franchise)
    {
        //
    }

    /**
     * Handle the franchise "restored" event.
     *
     * @param  \App\Models\franchise  $franchise
     * @return void
     */
    public function restored(franchise $franchise)
    {
        //
    }

    /**
     * Handle the franchise "force deleted" event.
     *
     * @param  \App\Models\franchise  $franchise
     * @return void
     */
    public function forceDeleted(franchise $franchise)
    {
        //
    }
}
