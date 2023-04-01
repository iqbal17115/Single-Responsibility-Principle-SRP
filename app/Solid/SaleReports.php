<?php

namespace App\Solid;
use Illuminate\Support\Facades\DB;

class SaleReports
{
    public function between($start_date, $end_date) {
        return DB::table('sales')
        ->whereBetween('created_at', [$start_date, $end_date])
        ->latest()
        ->get();
    }
    public function forMonth($month) {

    }
    public function forYear($year) {

    }
}