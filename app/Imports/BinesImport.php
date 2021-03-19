<?php

namespace App\Imports;

use App\Models\Bin;
use App\Models\Franchise;
use App\Models\Bank;
use App\Models\Country;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BinesImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows) 
    {
        foreach ($rows as $row) 
        {
            Bin::create([
                'code' => $row->toArray()['bin'],
            ]);

            Franchise::create([
                'name' => $row->toArray()['franquicia'],
            ]);

            Bank::create([
                'name' => $row->toArray()['banco'],
            ]);

            Country::create([
                'name' => $row->toArray()['pais'],
            ]);
        }

        return back()->with('success', 'Importado Exitosamente');
    }
}
