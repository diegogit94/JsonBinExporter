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
            Country::updateOrCreate([
                'name' => $row->toArray()['pais'],
            ]);

            Bank::updateOrCreate([
                'name' => $row->toArray()['banco'],
            ]);

            Franchise::updateOrCreate([
                'name' => $row->toArray()['franquicia'],
            ]);

            Bin::updateOrCreate([
                'code' => $row->toArray()['bin'],
            ]);           
        }

        return back()->with('success', 'Importado Exitosamente');
    }

    public function rules(): array
    {
        return [
            'pais' => [
                'required',
                'min:3', 'max:70',
                Rule::in(CountryConstants::COUNTRIES)
            ],

            'banco' => [
                'required',
                'min:3', 'max:70',
                Rule::in(BankConstants::BANKS)
            ],

            'franquicia' => [
                'required',
                'min:3', 'max:50',
                Rule::in(FranchiseConstants::FRANCHISES)
            ],

            'bin' => [
                'required',
                'numeric',
                'digits:6',
            ],           
        ];
    }

    public function prepareForValidation($data, $index)
    {
        $data['franquicia'] = strtolower($data['franquicia']);
        $data['banco'] = strtolower($data['banco']);
        $data['pais'] = strtolower($data['pais']);
        
        return $data;
    }
}
