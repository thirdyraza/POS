@extends('product.layout')

@section('content')
<br><br><br>
<div class="row">
    
        <div class="col-lg-12-margin-tb">
            <div class="pull-left">
                <h2> Edit Product </h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{route('product.index')}}"> Back</a>
            </div>
        </div>
</div>  

<form action=" {{ url('update/product/'.$product->id) }} " method="POST">
    @csrf

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Product Name: </strong>
            <input type="text" name="product_name" class="form-control"value="{{$product->product_name}}">
        </div>

    </div>    
        
    <div class="col-xs-6 col-sm-6 col-md-6"> 
        <div class="form-group">   
            <strong>Product Code: </strong>
            <input type="text" name="product_code" class="form-control" value="{{$product->product_code}}">
        </div>
    </div> 
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Details: </strong>
            <input type="text" name="details" class="form-control">
        </div>    
    </div>     
    
    <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit </button> 
    </div> 

</form>


@endsection 