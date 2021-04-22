@extends('product.layout')

@section('content')
    <br><br><br>
    <div class="row">
    
        <div class="col-lg-12-margin-tb">
            <div class="pull-left">
                <h2> Laravel Product List </h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{route('create.product')}}"> Create New Product</a>
            </div>
        </div>

    <br><br><br>
    @if($message = Session::get('success'))
    <div class="alert alert-success">
    <p> {{ $message }} </p>
    </div>
    @endif

        <table class="table table-bordered">
            <tr>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Product Details</th>
                <th>Action</th>
            </tr>
            @foreach($product as $key=>$pro)
            <tr>
                <td>{{ $pro-> product_name }}</td>
                <td>{{ $pro-> product_code }}</td>
                <td>{{ $pro-> details }}</td>
                <td>
                    <a class="btn btn-info" href="{{ URL::to('show/product/'.$pro->id) }}">Show</a>
                    <a class="btn btn-info" href="{{  URL:: to('edit/product/'.$pro->id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ URL::to('delete/product/'.$pro->id)  }}" 
                    onclick="return confirm('Are you sure?')">Delete</a>
                </td>
                @endforeach
            </tr>
        </table>

    </div>



@endsection