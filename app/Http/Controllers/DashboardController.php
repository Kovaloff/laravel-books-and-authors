<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Book as Book;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authorBooks = Author::find(Auth::User()->id);
        if ($authorBooks->books->isEmpty()) {
            return view('main', ['authorBooks' => null]);
        }
        return view('dashboard', ['authorBooks' => $authorBooks->books]);
    }
}
