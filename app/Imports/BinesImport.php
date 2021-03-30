<?php

namespace App\Imports;

use App\Models\Bin;
use App\Models\Franchise;
use App\Models\Bank;
use App\Models\Country;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Validation\Rule;
use App\Constants\BankConstants;
use App\Constants\CountryConstants;
use App\Constants\FranchiseConstants;

class BinesImport implements ToCollection, WithHeadingRow, WithValidation
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

    public function rules(): array
    {
        return [
            'bin' => [
                'required',
                'size:5'
            ],
            
            'franquicia' => [
                'required',
                'min:3', 'max:50',
                Rule::in(FranchiseConstants::FRANCHISES)
            ],

            'banco' => [
                'required',
                'min:3', 'max:70',
                Rule::in(BankConstants::BANKS)
            ],

            'pais' => [
                'required',
                'min:3', 'max:70',
                Rule::in(CountryConstants::COUNTRIES)
            ],
        ];
    }
}
