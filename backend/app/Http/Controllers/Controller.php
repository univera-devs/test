<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
{
    return response()->json(['message' => 'API is working']);
}
}
