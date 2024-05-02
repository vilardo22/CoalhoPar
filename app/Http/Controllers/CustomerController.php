<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        $password = $request->input('password');
        $status = $request->input('status');
        $registration_number = $request->input('registration_number');


        return Customer::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            
            'registration_number'=>$registration_number,
          
           
    
           ]);   

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
        return Customer::findOr($id, fn()=> abort(404, "Cliente nao encontrado"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
