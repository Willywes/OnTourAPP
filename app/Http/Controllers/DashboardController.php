<?php

namespace App\Http\Controllers;

use App\Model\Dashboard;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dashboard::all();
        return view('dashboard.index', compact('data'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dashboard  $bashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Bashboard $bashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dashboard  $bashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Bashboard $bashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashboard  $bashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bashboard $bashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboard  $bashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bashboard $bashboard)
    {
        //
    }
}
