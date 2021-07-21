<div>
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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="float: left"><i class="fas fa-box"></i> Products</h4>
                            <a href="#" style="float: right" class="btn btn-dark add-item" data-toggle="modal"
                                data-target="#addproduct">
                                <i class="fas fa-plus"> Add New Products</i></a>
                        </div>
                        
                        <div class="card-body">
                            Search Products
                            @livewire('item-search',['searchModel' => 'Products','searchColumns' =>
                            ['product_name','brand','id','product_code'] ])
                        </div>
                        <div class="card-body overflow-auto">
                            <section id="search-table">
                                @if (sizeof($products) > 0)
                                    @livewire('table',['tableColumns' => array_keys($products->first()->toArray()),
                                    'excludedColumns' => ['id','product_code','barcode','created_at','updated_at'],
                                    'tableTitle' => 'Search Product'])
                                @endif
                            </section>
                            @include('products.table')
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Product Details</h4>
                        </div>
                        <div class="card-body">
                            @include('products.product_details')
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
