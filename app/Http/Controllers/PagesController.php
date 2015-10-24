<?php

namespace EthioShare\Http\Controllers;

use Illuminate\Http\Request;
use EthioShare\Http\Requests;
use EthioShare\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.home');
    }
}
