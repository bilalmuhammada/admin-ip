<?php

namespace App\Http\Controllers;

use App\Models\Country;

class VendorController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('vendors.list')->with(['menu' => 'vendors', 'countries' => $countries]);
    }

    public function create()
    {
        $countries = Country::all();
        return view('vendors.create')->with(['menu' => 'vendors/create', 'countries' => $countries]);
    }

    public function transactions()
    {
        $Countries = Country::all();
        return view('vendors.transactions')->with(['menu' => 'vendors/transactions', 'countries' => $Countries]);
    }

    public function reviews()
    {
        return view('vendors.reviews')->with(['menu' => 'vendors/reviews']);
    }
}
