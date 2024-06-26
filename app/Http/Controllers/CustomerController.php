<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Customer::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $registration_number = $request->input('registration_number');
        $password = $request->input('password');

            return Customer::create([
                "name" => $name,
                "email" => $email,
                "registration_number" => $registration_number,
                "password" => $password
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Customer::finfOr($id, fn()=> abort(404));
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
