<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class GlobalController extends Controller {

    public function index() {
        $routeCollection = Route::getRoutes();
        return view('samples.routes_list', compact('routeCollection'));
    }

    public function sampleDataTable() {
        return view('samples.sample_datatable');
    }

}
