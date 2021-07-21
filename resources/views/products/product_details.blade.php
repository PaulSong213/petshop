<div class="row">
    @forelse ($products_details as $product)
    
    <div class="col-md-12">
        <div class="form-group">
            <img data-toggle="modal" data-target ="#productPreview{{ $product->id }}"
             src="{{ asset('product/images/'.$product ->product_image) }}"
            width="70" style="cursor: pointer;" alt="">
         </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
           
            <label for="">Product ID</label>
            <input type="text" class="form-control" value="{{ $product->id }}" readonly>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" class="form-control" value="{{ $product->product_name }}" readonly>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="">Product Code</label>
            <input type="text" class="form-control" value="{{ $product->product_code }}" readonly>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="">Product Price</label>
            <input type="text" class="form-control" value="{{ $product->price }}" readonly>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="">Product Qty</label>
            <input type="text" class="form-control" value="{{ $product->quantity }}" readonly>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="">Product Alert Stock</label>
            <input type="text" class="form-control" value="{{ $product->alert_stock }}" readonly>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="">Product Description</label>
            <textarea class="form-control" readonly cols="10" rows="2">{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group" style="text-align: center !important; padding-left:5%;" >
            <span style="text-align: center;">
                <img src="{{ asset('product/barcodes/'.$product ->barcode) }}"
                width="290" style="cursor: pointer;" alt="">
            </span>
            <h4>{{ $product->product_code }}</h4>
        </div>
    </div>
    <div class="col-md-35">
      <hr style="border:2px solid rgb(238, 135, 9)">
    </div>

    @include('products.product_preview')

    @empty

    @endforelse
</div>
<style>
    input:read-only{
        background: #fff !important;
    }
    text-area:read-only{
        background: #fff !important;
    }
</style>