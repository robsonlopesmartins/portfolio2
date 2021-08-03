<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = [];
        return view('site.home', $data);
    }

    public function post1(Request $request)
    {
        $data = [];
        return view('site.post1', $data);
    }

    public function post2(Request $request)
    {
        $data = [];
        return view('site.post2', $data);
    }

    public function post3(Request $request)
    {
        $data = [];
        return view('site.post3', $data);
    }

    public function post4(Request $request)
    {
        $data = [];
        return view('site.post4', $data);
    }

    public function post5(Request $request)
    {
        $data = [];
        return view('site.post5', $data);
    }

    public function post6(Request $request)
    {
        $data = [];
        return view('site.post6', $data);
    }

    public function post7(Request $request)
    {
        $data = [];
        return view('site.post7', $data);
    }

    public function post8(Request $request)
    {
        $data = [];
        return view('site.post8', $data);
    }
}
