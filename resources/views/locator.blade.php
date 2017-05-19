@extends('layouts.master')

@section('content')

    <div id="a1header" class="col-lg-12 text-center">
        <header class="clearfix">
            <h1>Product Locator</h1>
        </header>  <!-- header -->
    </div>

    <section id="getLocateSection" class="col col-lg-12">
        <hr />
        {{-- <h2 class="text-center extra_padding">Product List</h2> --}}

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
            <h1 class="text-center">What is Product Locator</h1>
            <div class="row">
                <p class="text-center flex-center extra_padding_all padding_separator">
                    This app attemp to help people of company to add new products and/or locate in which brand store is available an specific product.
                </p>
            </div>
        </section>
    </section>
@endsection
