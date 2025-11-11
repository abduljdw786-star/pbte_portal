<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;

class ResultController extends Controller
{
    public function show($roll_no)
    {
        $student = Student::where('roll_no', $roll_no)->firstOrFail();
        return view('result', compact('student'));
    }

    public function downloadPdf($roll_no)
    {
        $student = Student::where('roll_no', $roll_no)->firstOrFail();
        $pdf = PDF::loadView('result-pdf', compact('student'));
        
        return $pdf->download("result-{$roll_no}.pdf");
    }
}