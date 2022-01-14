@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Add Fields Form</h1>
        <form style="color: white;width: 40%;border: 3px solid saddlebrown;border-radius: 10px"  method="post" action="{{route('admin.product.update',$product->id)}}" class="form-control-lg " enctype="multipart/form-data" >
            {{csrf_field()}}
            {{ method_field('PUT') }}
        
            <div class="form-group">
                <label for="name">Product_Name</label>
                <input type="text"  class="form-control" name="name" value="{{$product->name}}"  />
            </div><br>
            <div class="form-group">
                <label for="name">Product_Count</label>
                <input type="number"  class="form-control" name="count" value="{{$product->count}}" />
            </div><br>
            

            <button type="submit" class="btn btn-success" >UPdate Product</button>
        </form>
    </center>
@endsection