<?php

use App\Solid\CsvExport;
use App\Solid\JsonExport;
use App\Solid\PdfExport;
use App\Solid\SaleReports;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $salesReport = new SaleReports;
    $exportCsv = new CsvExport;
    $exportPdf = new PdfExport;
    $exportJson = new JsonExport;
    return $exportCsv->export(
        $salesReport->between('1 jan 2023', '1 mar 2023')
    );
});
