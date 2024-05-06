<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class CustomerAddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($customerId)
    {
        return Address::whereHas ('customers', function($query)use($customerId) {
            $query->where('customers.id', $customerId);
        })->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
