<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myview;

class ViewmsqlController extends Controller
{
    public function viewMsql()
    {
    	$view = Myview::all();
    	return view('viewmsql.index', compact('view'));
    }
}
