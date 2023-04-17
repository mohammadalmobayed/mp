<?php

namespace App\Http\Controllers;
use App\Exports\MyExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportCSV()
    {
        return Excel::download(new MyExport(), 'data.csv');
    }
}