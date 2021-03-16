<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Excel;

class ImportController extends Controller
{
    
    public function import() 
    {
        Excel::import(new BinesImport, 'Bines.xlsx');

        return redirect('/')->with('success', 'Importado exitosamente!');
    }

}
