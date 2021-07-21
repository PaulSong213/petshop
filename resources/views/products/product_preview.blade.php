<div class="modal right fade" id="productPreview{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">{{ $product->product_name }}
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{-- {{ $product->id }} --}}
            </div>
            <div class="modal-body">
               <div>
                <img src="{{ asset('product/images/'.$product ->product_image) }}"
                width="275" height="200" style="cursor: pointer;" alt="">
                <img src="{{ asset('product/barcodes/'.$product ->barcode) }}"
                width="280" style="cursor: pointer;" alt="">
            
               </div>
            </div>

        </div>
    </div>
</div>
<style>
    img{
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        margin-left:auto;
        margin-right:auto;
    }
</style>
