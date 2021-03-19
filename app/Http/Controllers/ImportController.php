<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BinesImport;

class ImportController extends Controller
{
    
    public function import(Request $request) 
    {
        $file = $request->file('file');

        Excel::import(new BinesImport, $file);

        return redirect('/')->with('success_message', 'Importado exitosamente!');
    }

}
