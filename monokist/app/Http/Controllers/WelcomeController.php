<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index()
    {
      $items = \App\Item::orderBy('updated_at', 'desc')->paginate(20);
        return view('welcome', [
            'items' => $items,
        ]);
    }
}
