<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RfidData;

class RfidController extends Controller
{
    public function index()
    {
        return view('rfid');
    }
    public function dashboard()
    {
        $rfidData = RfidData::latest()->take(10)->get(); // Ambil data terbaru
        return view('rfid-dashboard', ['rfidData' => $rfidData]);
    }
}
