@php
     $productName = $product->product_name;
     $productCode = $product->product_code;
     $productPrice = $product->price;
     $alertStock = $product->alert_stock;
     $quantity = $product->quantity;
     $productCode = $product->product_code;
     $brand = $product->brand;
     $productImage = $product->image;
@endphp

@if($errors->any() && session('fromEdit') == $product->id )  
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
<div class="modal right fade" id="editproduct{{$product->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="staticBackdropLabel">Edit product</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
      {{$product->id}}   
    </div>
    <div class="modal-body">
      <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
    
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Product Name</label>

            <input type="text" name="product_name" id="" value="{{ $productName }}" class="form-control @if(session('fromEdit') == $product->id) @error('product_name') border border-danger @enderror @endif">

            @if(session('fromEdit') == $product->id)
            @error('product_name')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            @endif

        </div>

        <div class="form-group">
            <label for="">Product Code</label>
            <input type="text" name="product_code" id="" value="{{$productCode}}" class="form-control @if(session('fromEdit') == $product->id)  @error('product_code') border border-danger @enderror @endif">
            @if(session('fromEdit') == $product->id)
            @error('product_code')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            @endif
        </div>

        <div class="form-group">
            <label for="">Brand</label>
            <input type="text" name="brand" id="" value="{{$brand}}" class="form-control">
            
        </div>            

        <div class="form-group">
            <label for="">Price</label>
            <input type="number" name="price" id="" value="{{$productPrice}}"class="form-control @if(session('fromEdit') == $product->id)  @error('price') border border-danger @enderror @endif">
            @if(session('fromEdit') == $product->id)
            @error('price')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            @endif
        </div>

        <div class="form-group">
            <label for="">Quantity</label>
            <input type="number" name="quantity" id="" value="{{$quantity}}" class="form-control @if(session('fromEdit') == $product->id)  @error('quantity') border border-danger @enderror @endif">
            @if(session('fromEdit') == $product->id)
            @error('quantity')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            @endif
        </div>

        <div class="form-group">
            <label for="">Alert Stock</label>
            <input type="number" name="alert_stock" id="" value="{{$alertStock}}" class="form-control @if(session('fromEdit') == $product->id) @error('alert_stock') border border-danger @enderror @endif">
            @if(session('fromEdit') == $product->id)
            @error('alert_stock') 
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            @endif
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id=""cols="30" rows="2" class="form-control">{{$product->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Product Image</label>
            <img width="40" src="{{ asset('product/images/' . $productImage ) }}" alt="">
            <input type="file" name="product_image" id="" class="form-control">{{$product->product_image}}
        </div>
        
        <div class="modal-footer">
            <button class="btn btn-primary btn-block">Update Product</button>
        </div>
    </form>
      
    </div>
    
  </div>
    </div>
</div>