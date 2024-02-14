<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BreweryController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth")->except("index");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breweries = Brewery::all();
        return view("brewery.index", compact("breweries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $beers = Beer::all();
        return view("brewery.create", compact("beers"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brewery = Auth::user()->breweries()->create(
            [
                "name"=>$request->name,
                "address"=>$request->address,
                "cap"=>$request->cap,
                "phone"=>$request->phone,
                "description"=>$request->description,
                'img'=> $request->has('img')  ?  $request->file('img')->store("public/img/")  : "public/img/Anonymous-2-512.jpeg",
            ]
        );

        $brewery->beers()->attach($request->beers);

        return redirect(route("welcome"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Brewery $brewery)
    {
        return view("brewery.show", compact("brewery"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brewery $brewery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brewery $brewery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brewery $brewery)
    {
        //
    }
}
