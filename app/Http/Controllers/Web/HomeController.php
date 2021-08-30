<?php
namespace app\Http\Controllers\Web;


use app\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}