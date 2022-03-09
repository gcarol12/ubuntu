<?php

namespace App\Http\Controllers;

use App\Models\Ubuntus;
use App\Http\Requests\StoreUbuntusRequest;
use App\Http\Requests\UpdateUbuntusRequest;

class UbuntusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUbuntusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUbuntusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ubuntus  $ubuntus
     * @return \Illuminate\Http\Response
     */
    public function show(Ubuntus $ubuntus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ubuntus  $ubuntus
     * @return \Illuminate\Http\Response
     */
    public function edit(Ubuntus $ubuntus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUbuntusRequest  $request
     * @param  \App\Models\Ubuntus  $ubuntus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUbuntusRequest $request, Ubuntus $ubuntus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ubuntus  $ubuntus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ubuntus $ubuntus)
    {
        //
    }
}
