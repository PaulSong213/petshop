@extends('layouts.app')

@section('content')

@php
@endphp

<div class="container-fluid">
  @if (session('success'))
  <section class="alert-added">
      <div class="alert alert-success col-12 d-flex justify-content-between">
          <div>
              {{ session('success') }}
          </div>
          <div>
              <button class="close-alert btn-close"></button>
          </div>
      </div>
  </section>
  @endif
  <div class="col-lg-12">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h4 style="float: left"><i class="fas fa-box"></i> Suppliers</h4>
                    <a href="#" style="float: right" class="btn btn-dark add-item" 
                    data-toggle="modal" data-target="#addsupplier">
                        <i class="fas fa-plus"> Add New Supplier</i></a></div>
                <div class="card-body overflow-auto" >
                    <section id="search-table">
                        @if (sizeof($suppliers) > 0)
                            @livewire('table',['tableColumns' => array_keys($suppliers->first()->toArray()), 'excludedColumns' => ['id','created_at','updated_at'], 'tableTitle' => 'Search Supplier'])
                        @endif
                    </section>  

                    @if (sizeof($suppliers) > 0)
                    <div id="main-table">
                      @livewire('data-table',['tableColumns' => array_keys($suppliers->first()->toArray()), 'excludedColumns' => ['id','created_at','updated_at'],'tableRows' => $suppliers->getCollection()->toArray(), "rowNameRepresentative" => "supplier_name", "deleteRoute" => "/suppliers/" ])
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"><h4>Search product</h4></div>
                <div class="card-body">
                    @livewire('item-search',['searchModel' => 'Suppliers','searchColumns' => ['supplier_name','address','phone','email'] ])
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@php
    $name = "";
    $address = "";
    $phone = "";
    $email = "";
@endphp
@if(session('fromAdd') && $errors->any())
@php
    $name = old('supplier_name');
    $address = old('address');
    $phone = old('phone');
    $email = old('email');
@endphp
@endif

@php
    $formInputs = [
        [
            "name" => "supplier_name",
            "type" => "text",
            "value" => $name,
            "label" => "Name"
        ],
        [
            "name" => "address",
            "type" => "text",
            "value" => $address,
            "label" => "Address"
        ],
        [
            "name" => "phone",
            "type" => "text",
            "value" => $phone,
            "label" => "Phone"
        ],
        [
            "name" => "email",
            "type" => "email",
            "value" => $email,
            "label" => "Email"
        ],
    ];
@endphp

@livewire('add-item',[ "formInputs" => $formInputs, "formName" => "Supplier", "saveRoute" => route('suppliers.store') ])
@endsection