@extends('layouts.master')

@section('title', 'Product Locator | List of products')

@section('content')

    <div id="a1header" class="col-lg-12 text-center">
        <header class="clearfix">
            <h1>Product Locator</h1>
        </header>  <!-- header -->
    </div>

    <section id="getLocateSection" class="col col-lg-12">
        <hr />
        <section id="sidebarLocateSection" class="col col-lg-3">

            <h3 class="text-center">Dashboard</h3>

            <hr />

            <div class="row text-center">
                <div class="btn-group btn-group-sm">
                    <a href="/" class="btn btn-primary"><i class="fa fa-home"></i> Home</a>
                    <a href="{{ route('product.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                    <a href="{{ route('product.index') }}" class="btn btn-primary"><i class="fa fa-ambulance"></i> List</a>
                </div>

            </div>
        </section>

        <section id="mainLocateSection" class="col col-lg-9">
            @if(! $products->count())
                <div class="alert alert-danger">
                    <strong>No records found!</strong>
                </div>
            @else
                <h3>Product Details</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td width="80">Action</td>
                            <td>SKU</td>
                            <td width="180">Title</td>
                            <td>Brand</td>
                            <td>Image</td>
                            <td>Price</td>
                            <td>Store</td>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <a class="btn btn-xs btn-default" href="{{ route('product.edit', $product->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a class="btn btn-xs btn-danger" href="{{ route('product.destroy', $product->id) }}">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                            <td>{{ $product->sku }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->brand }}</td>
                            <td><img class='cover' src='{{ $product->image }}' alt='Image for {{ $product->title }}'></td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stores->first()->address }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            @endif

            <div class="box-footer clearfix">
                <div class="pull-left">
                    {{ $products->render() }}
                </div>
                <div class="pull-right">
                    <small>{{ $productCount }} {{ str_plural('product', $productCount) }}</small>
                </div>
            </div>
        </section>
    </section>
@endsection
