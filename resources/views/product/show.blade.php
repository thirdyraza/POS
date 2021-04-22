@extends('product.layout')

@section('content')

<br><br><br>
<div class="row">
    
        <div class="col-lg-12-margin-tb">
            <div class="pull-left">
                <h2> Show Product </h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{route('product.index')}}"> Back</a>
            </div>
        </div>
</div>  

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group">
            <strong>Product Name: </strong>
            {{ $data->product_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group">
            <strong>Product Code: </strong>
            {{ $data->product_code }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group">
            <strong>Product Details: </strong>
            {{ $data->details }}
        </div>
    </div>
</div>


@endsection