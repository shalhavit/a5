@extends('layouts.master')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div>
                <h1 class="title m-b-md">Product Locator</h1>
            </div>

            <div>
                <a href="{{ url('/product-locator') }}" class="btn btn-primary"><i class="fa fa-ambulance"></i> Locate your product</a>
            </div>

        </div>
    </div>
@endsection


