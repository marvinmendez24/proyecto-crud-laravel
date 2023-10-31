<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PDFController extends Controller
{
    public function imprimirPDF($id)
    {
        $proyecto = Project::find($id);
        $fecha = Date('d-m-Y');
    
        $pdf = PDF::loadView('projects.pdf', [
            'proyecto' => $proyecto,
            'fecha' => $fecha
        ]);
    
        $nombre = md5( uniqid()) . ".pdf";
        return $pdf->download($nombre);
    }
}
