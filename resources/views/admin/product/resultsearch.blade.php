@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Show All Products </h1>
        <div class="row" style="color: whitesmoke;width: 82%;margin-left: 15%">
            <table class="table table-bordered table-responsive " >
                <tr>
                    <th class="col-md-3">Product_Name</th>
                    <th class="col-md-2">Product_Count</th>
                </tr>
                @foreach($products as $product)

                    <tr >
                        <th class="col-md-3"> {{$product->name}}</th>
                        <th class="col-xs-2">{{$product->count}}</th>
                    </tr>
                @endforeach
            </table>
        </div>
    </center>
@endsection