<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    // Preview HTML version in browser
    public function view()
    {
        return view('pdf.test');
    }

    // Download PDF
    public function download()
    {
        $pdf = Pdf::loadView('pdf.test');
        return $pdf->download('test.pdf');
    }
}
