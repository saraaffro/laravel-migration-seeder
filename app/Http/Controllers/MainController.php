<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

use Carbon\Carbon;

class MainController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_time', '>=', Carbon::today())->orderBy('departure_time')->get();
        return view('pages.index', compact('trains'));
    }
}
