@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Add Fields Form</h1>
        <form style="color: white;width: 40%;border: 3px solid saddlebrown;border-radius: 10px" method="post" action="{{route('admin.product.store')}}" class="form-control-lg " enctype="multipart/form-data">
            {{csrf_field()}}
        
            <div class="form-group">
            <label>Product_Name</label>
            <input type="text" placeholder="Add name" class="form-control" name="name" />
            </div><br>
            <div class="form-group">
                <label>Product_Count</label>
                <input type="number" placeholder="Add count" min="1" class="form-control" name="count" />
            </div><br>
            


            <button type="submit" class="btn btn-success" >Add Product</button>
        </form>
    </center>
@endsection