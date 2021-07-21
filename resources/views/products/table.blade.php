
                            <table class="table table-bordered table-left" id="main-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Alert Stock</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $product)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td style="cursor: pointer;" data-toggle="tooltip" data-placement="right"
                                            title="Click to view details"
                                            wire:click="ProductDetails({{ $product->id }})">{{ $product->product_name }}</td>
                                            <td>{{ $product->brand }}</td>
                                            <td>{{ number_format($product->price, 2) }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>
                                                @if ($product->alert_stock >= $product->quantity)
                                                    <span class="badge badge-danger">
                                                        Low Stock: must be > {{ $product->alert_stock }}</span>
                                                @else
                                                    <span class="badge badge-success">{{ $product->alert_stock }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $product->description }}</td>

                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-info btnt-sm" data-toggle="modal"
                                                        id="edit{{ $product->id }}"
                                                        data-target="#editproduct{{ $product->id }}">
                                                        <i class="fas fa-edit">Edit</i></a>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#deleteproduct{{ $product->id }}"
                                                        class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>
                                                        Delete</a>
                                                </div>
                                            </td>
                                        </tr>

                                       {{-- Modal Edit --}}
                                        @include('products.edit')
                                        {{-- Modal Delete --}}
                                        @include('products.delete')
                                    @endforeach
                                    {{-- {{ $products->links() }} --}}
                                </tbody>
                            </table>