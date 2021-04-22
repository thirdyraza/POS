@extends('product.layout')

@section('content')
<br><br><br>
<div class="row">
    
        <div class="col-lg-12-margin-tb">
            <div class="pull-left">
                <h2> Add New Product </h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{route('product.index')}}"> Back</a>
            </div>
        </div>
</div>  

<form action="{{ route ('product.store') }}" method="POST">
    @csrf

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Product Name: </strong>
            <input type="text" name="product_name" class="form-control" placeholder="Product Name">
        </div>

    </div>    
        
    <div class="col-xs-6 col-sm-6 col-md-6"> 
        <div class="form-group">   
            <strong>Product Code: </strong>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code">
        </div>
    </div> 
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Details: </strong>
            <input type="text" name="details" class="form-control" placeholder="Details">
        </div>    
    </div>     
    
    <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit </button> 
    </div> 

</form>


@endsection