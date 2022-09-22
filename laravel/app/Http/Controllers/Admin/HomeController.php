<?php

// Nel caso dia errore nella ricerca della rotta controllareche il namespace sia corretto. 
// In caso non lo sia aggiungere al namespace il nome della cartella lo use sotto evidenziato:
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
}