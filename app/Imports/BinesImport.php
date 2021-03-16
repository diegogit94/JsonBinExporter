<?php

namespace App\Imports;

use App\Model\Bin;
use App\Model\Franchise;
use App\Model\Bank;
use App\Model\Country;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class BinesImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $row)
    {
        foreach ($rows as $row) 
        {
            Bin::create([
                'code' => $row[0],
            ]);

            Franchise::create([
                'name' => $row[1],
            ]);

            Bank::create([
                'name' => $row[2],
            ]);

            Country::create([
                'name' => $row[3],
            ]);
        }

        return back();
    }
}
