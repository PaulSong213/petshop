<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Suppliers::paginate(5);
        return view('suppliers.index', ['suppliers' => $suppliers]);        
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
        redirect()->back()->with('fromAdd', true);
        $validated = $request->validate([
            'supplier_name' => 'required',
            'email' => 'required|email:rfc|unique:App\Models\Suppliers,email',
            'phone' => 'required'
        ]);

        $supplier = new Suppliers;
        $supplier->supplier_name = $request->supplier_name;
        $supplier->email = $request->email;
        $supplier->address = $request->address;
        $supplier->phone = $request->phone;

        if($supplier->save()){
            return redirect()->back()->with('success','Supplier Created Successfully');
        }
        return redirect()->back()->with('Supplier Creation Failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show(Suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit(Suppliers $suppliers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suppliers $suppliers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suppliers = Suppliers::find($id);
        if(!$suppliers){
            return back()->with('Error', 'Supplier not found');
        }
        if($suppliers->delete())return back()->with('success', 'User Deleted Successfully!');
        
    }
}
