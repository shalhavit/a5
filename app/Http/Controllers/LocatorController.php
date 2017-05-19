<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Store;
use App\Supplier;

class LocatorController extends Controller
{

    protected $limit = 5;

    public function getProductList() {
        return view('locator', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::with('stores')->get();
        $products = Product::with('stores')->latest()->paginate($this->limit);
        $productCount = Product::count();
        // dd($products->toArray());
        return view('index', compact('products', 'productCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product) {


        return view('create', compact('product'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'sku' => 'required|unique:products',
            'title' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'image' => 'required|url',
            'price' => 'required|numeric',
            'condition' => 'required|alpha',
            'store_id' => 'required',
        ]);

        $product = new Product();
        $product->sku = $request->sku;
        $product->title = $request->title;
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->condition = $request->condition;
        $product->save();

        $store = ($request->store_id) ?: [];
        $product->stores()->sync($store);
        $product->save();

        return redirect('product')->with('message', 'Your product was saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
