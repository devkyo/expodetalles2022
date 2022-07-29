<?php

namespace App\Exports;

use App\Models\Visitante;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class VisitantesExport implements FromView
{

    public function view(): View
    {
        return view('exports.visitantes',["visitantes" =>  Visitante::all()]);
    }
}
