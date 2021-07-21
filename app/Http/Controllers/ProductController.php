<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Picqer;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('products.index', ['products' => $products]);
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
            'product_name' => 'required',
            'price' => 'required|numeric|min:1',
            'alert_stock' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
            'product_code' => 'required'
        ]);
        //product code section
        $product_code = $request->product_code;

        $products = new Product;
        //product image section
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $file->move(public_path().'/product/images',
            $file->getClientOriginalName());
            $product_image = $file->getClientOriginalName();
            $products->product_image=$product_image;
        }

       //barcode image section
        $generator = new Picqer\Barcode\BarcodeGeneratorJPG();
        file_put_contents('product/barcodes/'.$product_code . '.jpg' ,
        $generator->getBarcode($product_code,
        $generator::TYPE_CODE_128, 3, 50));

        // Product::create($request->all());
        $products->product_name = $request->product_name;
        $products->product_code = $product_code;
        $products->barcode = $product_code . '.jpg';
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->brand = $request->brand;
        $products->alert_stock = $request->alert_stock;
        $products->description = $request->description;
        $products->save();

        return redirect()->back()->with('success', 'Product Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $products)
    {
        redirect()->back()->with('fromEdit', $products);
        $validated = $request->validate([
            'product_name' => 'required',
            'price' => 'required|numeric|min:1',
            'alert_stock' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
            'product_code' => 'required|unique:App\Models\Product,product_code'
        ]);
        //product code section
        $product_code = $request->product_code;

        $products = Product::find($products);

        //product image section
        if ($request->hasFile('product_image')) {
            if ($products->product_image != '') {
                $proImage_path = public_path() . '/product/images' . $products->product_image;
                unlink($proImage_path);
            }
            $file = $request->file('product_image');
            $file->move(public_path().'/product/images',
            $file->getClientOriginalName());
            $product_image = $file->getClientOriginalName();
            $products->product_image=$product_image;
        }

       //barcode image section

        if ($request->product_code != '' && 
        $request->product_code != $products->product_code) {

            $unique = Product::where('product_code', $product_code)->first();

            if ($unique) {
                return redirect()->back()->with('error', 'Product code already exists!');

            }

            if ($products->barcode != '') {
                $barcode_path = public_path() . '/product/barcodes/' . $products->barcode;
                unlink($barcode_path);
            }
            $generator = new Picqer\Barcode\BarcodeGeneratorJPG();
            file_put_contents('product/barcodes/'.$product_code . '.jpg' ,
            $generator->getBarcode($product_code,
            $generator::TYPE_CODE_128, 3, 50));
            $products->barcode = $product_code . '.jpg';
        }

        

       
        $products->product_name = $request->product_name;
        $products->product_code = $product_code;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->brand = $request->brand;
        $products->alert_stock = $request->alert_stock;
        $products->description = $request->description;

        $products->save();

        return redirect()->back()->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully!');
    
    }

    public function GetProductBarcodes(){

     $productsBarcode = Product::select('barcode', 'product_code')->get();

        return view('products.barcode.index', compact('productsBarcode'));
    }

}
