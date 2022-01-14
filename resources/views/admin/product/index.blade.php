@extends('master')
@section('content')
    <center>
        <!--  <div class="col-md-6" style="color: white">Show All Products</div>-->
        <h1 style="color: white">Show All Products </h1>
        <div class="col-md-4 pull-right">
            <form action="{{route('admin.product.search')}}" method="post">
                {{csrf_field()}}
                <div class="input-group">
                    <input type="text" name="search" class="form-control">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>
        <div class="row" style="color: whitesmoke;width: 82%;margin-left: 15%">
            <table class="table table-bordered table-responsive " >
                <tr>
                    <th class="col-md-3">Product_Name</th>
                    <th class="col-md-2">Product_Count</th>
                    <th class="col-md-4">Actions</th>
                </tr>
                @foreach($products as $product)

                    <tr >
                        <th class="col-md-2"> {{$product->name}}</th>
                        <th class="col-xs-1">{{$product->count}}</th>
                        
                        <th class="col-xs-4">
                            <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-success">Edit</a>
                            <form action="{{ route('admin.product.delete', $product->id) }}" method="post" style="display: inline;" onclick="return confirm('Do You Want To Delete This Record? ')">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <button type="submit" class="btn btn-danger">Detete</button>
                            </form>
                            <a href="{{route('admin.product.show',$product->id)}}" class="btn btn-info">Show</a>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </center>
@endsection