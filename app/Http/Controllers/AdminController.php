<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Medicines;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    public function medlist()
    {
        $medicines = Medicines::all();
        return view('admin.medicinelist')->with('medicines', $medicines);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicine = new Medicines();
        $medicine->name = $request->name;
        $medicine->vendor = $request->vendor;
        $medicine->price = $request->price;
        $medicine->quantity = $request->quantity;
        $medicine->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicine = Medicines::find($id);
        return view('admin.show')->with('medicine', $medicine);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine = Medicines::find($id);
        return view('admin.edit')->with('medicine', $medicine);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medicine = Medicines::find($id);
        $medicine->name = $request->name;
        $medicine->vendor = $request->vendor;
        $medicine->price = $request->price;
        $medicine->quantity = $request->quantity;
        $medicine->save();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine = Medicines::find($id);
        $medicine->delete();
        return redirect('/admin');
    }

    public function customers()
    {
        $users = User::where('type', "Customer")->get();
        return view('admin.customers')->with('customers', $users);
    }
}
