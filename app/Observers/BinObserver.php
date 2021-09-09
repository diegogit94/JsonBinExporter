<?php

namespace App\Observers;

use App\Models\Bin;

class BinObserver
{
    /**
     * Handle the Bin "created" event.
     *
     * @param  \App\Models\Bin  $bin
     * @return void
     */
    public function created(Bin $bin)
    {
        // Bin::create([
        //     'franchise_id' => $franchise->id,
        // ]);
    }

    /**
     * Handle the Bin "updated" event.
     *
     * @param  \App\Models\Bin  $bin
     * @return void
     */
    public function updated(Bin $bin)
    {
        //
    }

    /**
     * Handle the Bin "deleted" event.
     *
     * @param  \App\Models\Bin  $bin
     * @return void
     */
    public function deleted(Bin $bin)
    {
        //
    }

    /**
     * Handle the Bin "restored" event.
     *
     * @param  \App\Models\Bin  $bin
     * @return void
     */
    public function restored(Bin $bin)
    {
        //
    }

    /**
     * Handle the Bin "force deleted" event.
     *
     * @param  \App\Models\Bin  $bin
     * @return void
     */
    public function forceDeleted(Bin $bin)
    {
        //
    }
}
