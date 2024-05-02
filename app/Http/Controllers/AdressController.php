<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    public function index()
    {
       return Address::all();     
    }

    public function store(Request $request)
    {
        $street = $request->input('street');
        $number = $request->input('number');
        $complement = $request->input('complement');
        $neighborhood = $request->input('neighborhood');
        $zip_code = $request->input('zip_code');
        $city = $request->input('city');
        $state = $request->input('state');
        $country = $request->input('country');
        


       return Address::create([
        'street'=>$street,
        'number'=>$number,
        'complement'=>$complement,
        'neighborhood'=>$neighborhood,
        'zip_code'=>$zip_code,
        'city'=>$city,
        'state'=>$state,
        'country'=>$country,

       ]);     
    }
    

    public function show(string $id)
    {
        return Address::findOr($id, fn()=> abort(404, "Endereço nao encontrado"));
    }
}
