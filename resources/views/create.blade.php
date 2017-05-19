@extends('layouts.master')

@section('title', 'Product Locator | Add new product')

@section('content')

    <div id="a1header" class="col-lg-12 text-center">
        <header class="clearfix">
            <h1>Add new product</h1>
        </header>  <!-- header -->
    </div>

    <section id="getLocateSection" class="col col-lg-12">
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <hr />
        <section id="sidebarLocateSection" class="col col-lg-3">

            <h3 class="text-center">Dashboard</h3>

            <hr />

            <div class="row text-center">
                <div class="btn-group btn-group-sm">
                    <a href="/" class="btn btn-primary"><i class="fa fa-home"></i> Home</a>
                    <a href="{{ route('product.index') }}" class="btn btn-primary"><i class="fa fa-ambulance"></i> List</a>
                </div>

            </div>
        </section>

        <section id="mainLocateSection" class="col col-lg-9">
            {!! Form::model($product, [
                'method' => 'POST',
                'route'  => 'product.store',
                ]) !!}

            <div class="form-group {{ $errors->has('sku') ? 'has-error' : '' }}">
                {!! Form::label('sku') !!}
                {!! Form::text('sku', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('sku'))
                <span class="help-block">{{ $errors->first('sku') }}</span>
            @endif

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                {!! Form::label('title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('title'))
                <span class="help-block">{{ $errors->first('title') }}</span>
            @endif

            <div class="form-group {{ $errors->has('brand') ? 'has-error' : '' }}">
                {!! Form::label('brand') !!}
                {!! Form::text('brand', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('brand'))
                <span class="help-block">{{ $errors->first('brand') }}</span>
            @endif

            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                {!! Form::label('description') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('description'))
                <span class="help-block">{{ $errors->first('description') }}</span>
            @endif

            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                {!! Form::label('image', 'Image URL') !!}
                {!! Form::text('image', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('image'))
                <span class="help-block">{{ $errors->first('image') }}</span>
            @endif

            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                {!! Form::label('price') !!}
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('price'))
                <span class="help-block">{{ $errors->first('price') }}</span>
            @endif

            <div class="form-group  {{ $errors->has('condition') ? 'has-error' : '' }}">
                {!! Form::label('condition') !!}
                {!! Form::text('condition', null, ['class' => 'form-control', 'placeholder' => 'New | Used']) !!}
            </div>

            @if($errors->has('condition'))
                <span class="help-block">{{ $errors->first('condition') }}</span>
            @endif

            <div class="form-group {{ $errors->has('store_id') ? 'has-error' : '' }}">
                {!! Form::label('store_id', 'Store') !!}
                {!! Form::select('store_id', App\Store::pluck('code', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose Store']) !!}
            </div>

            @if($errors->has('store_id'))
                <span class="help-block">{{ $errors->first('store_id') }}</span>
            @endif

            {{ Form::hidden('supplier_id', rand(1, 12)) }}
            {!! Form::submit('Add new product', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

            <hr />
        </section>
    </section>
@endsection
