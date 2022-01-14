@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Show All Saless </h1>
        <div class="col-md-4 pull-right">
            <form action="{{route('admin.sales.search')}}" method="post">
                {{csrf_field()}}
                <div class="input-group">
                    <input type="text" name="search" class="form-control">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>
        <div class="row" style="color: whitesmoke;width: 82%;margin-left:18%">
            <table class="table table-bordered table-responsive col-md-8" >
                <tr>
                    <th class="col-md-2">ID</th>
                    <th class="col-md-3">Product_Name</th>
                    <th class="col-md-1">Count</th>
                    <th class="col-md-5">Actions</th>
                </tr>
                @foreach($saless as $sales)

                    <tr >
                        <th class="col-md-1"> {{$sales->id}}</th>
                        <th class="col-md-2"><?php
                            $product=\App\Product::find($sales->product_id);
                            if($product)
                                echo $product->name;
                            ?></th>
                             <th class="col-md-2"> {{$sales->count}}</th>
                            
                        <th class="col-md-6">
                            <form action="{{ route('admin.sales.delete', $sales->id) }}" method="post" style="display: inline;" onclick="return confirm('Do You Want To Delete This Record? ')">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <button type="submit" class="btn btn-danger">Detete</button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </center>
@endsection