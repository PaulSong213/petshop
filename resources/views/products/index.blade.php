@extends('layouts.app')

@section('content')


@livewire('products')


@php
$productName = "";
$productCode = "";
$productPrice = "";
$alertStock = "";
$quantity = "";
$productCode = "";
$brand = "";
$productImage = "";
@endphp

@if($errors->any() && session('fromAdd'))  
@php
$productName = old('product_name');
$productCode = old('product_code');
$productPrice = old('price');
$alertStock = old('alert_stock');
$quantity = old('quantity');
$productCode = old('product_code');
$brand = old('brand');
$productImage = old('product_image');
@endphp
@endif


    <div class="modal right fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">Add product</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>   
        </div>
        <div class="modal-body">
          <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
        
            @csrf

            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="product_name" value="{{ $productName }}" id="" class="form-control @if(session('fromAdd')) @error('product_name') border border-danger @enderror @endif">
                @if(session('fromAdd'))
                @error('product_name')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
                @endif
            </div>
            <div class="form-group">
                <label for="">Product Code</label>
                <input type="text" name="product_code" value="{{ old('product_code') }}" id="" class="form-control @if(session('fromAdd')) @error('product_code') border border-danger @enderror @endif">
                @if(session('fromAdd'))
                @error('product_code')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
                @endif
            </div>

            <div class="form-group">
                <label for="">Brand</label>
                <input type="text" name="brand" id="" class="form-control">

            </div>            

            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="price" id="" class="form-control @if(session('fromAdd')) @error('price') border border-danger @enderror @endif" value="{{ old('price') }}">
                @if(session('fromAdd'))
                @error('price')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
                @endif
            </div>

            <div class="form-group">
                <label for="">Quantity</label>
                <input type="number" name="quantity" id="" class="form-control @if(session('fromAdd')) @error('quantity') border border-danger @enderror @endif" value="{{ old('quantity') }}">
                @if(session('fromAdd'))
                @error('quantity')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
                @endif
            </div>

            <div class="form-group">
                <label for="">Alert Stock</label>
                <input type="number" name="alert_stock" id="" class="form-control @if(session('fromAdd')) @error('alert_stock') border border-danger @enderror @endif" value="{{ old('alert_stock') }}">
                @if(session('fromAdd'))
                @error('alert_stock')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
                @endif
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="description" cols="30" rows="2" class="form-control @if(session('fromAdd')) @error('description') border border-danger @enderror @endif" value="{{ old('description') }}"></textarea>
                @if(session('fromAdd'))
                @error('description')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
                @endif
            </div>
            <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" name="product_image" id="product_image" cols="30" rows="2" class="form-control @error('product_image') border border-danger @enderror" value="{{ $productImage }}">
                @error('product_image')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-primary btn-block">Save Product</button>
            </div>
        </form>
          
        </div>
        
      </div>
        </div>
    </div>

  <style>
      .modal.right .modal-dialog{
          top: 0;
          right: 0;
          margin-right: 3vh;
      }

      .modal-fade:not(.in).right .modal-dialog{
          -webkit-transform: translate3d(25%,0,0);
          transform: translate3d(25%, 0, 0);
      }
  </style>

@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
