<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function view()
    {
        return view('pdf.test');
    }

    public function download()
    {
        $pdf = Pdf::loadView('pdf.test');
        return $pdf->download('test.pdf');
    }
    public function generateFL309(Request $request)
    {
        
        $pdf = PDF::loadView('pdf.fl309');
        $pdf->setPaper('letter', 'portrait');

        return $pdf->stream('FL-309.pdf');
    }
}