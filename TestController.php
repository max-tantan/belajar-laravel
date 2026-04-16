<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index()
    {
        $nama = "Fatan";
        $kelas = "XI RPL 3";
        return view('fatan.acumalaka', compact('nama', 'kelas'));
    }
}
