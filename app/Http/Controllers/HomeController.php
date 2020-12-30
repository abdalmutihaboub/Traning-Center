<?php

namespace App\Http\Controllers;

use App\Company;
use App\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $companies = [];
        $specialties = [];
        if (Auth::check()) {
            if (Auth::user()->role == 1) {
                $companies = Company::all();
                $specialties = Specialty::all();
            }
        }
        return view('home', ['companies' => $companies, 'specialties' => $specialties,'pageName'=>"Dashboard"]);
    }
    public function index()
    {
        return view('welcome');
    }
}
