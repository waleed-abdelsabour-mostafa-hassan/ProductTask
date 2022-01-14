@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Add Fields Form</h1>
        @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
@endif
        <form style="color: white;width: 40%;border: 3px solid saddlebrown;border-radius: 10px" method="post" action="store" class="form-control-lg ">
            {{csrf_field()}}
            <div class="form-group">
                <label for="course_id">Product</label><span style="color:red">*</span>
                <select  name="product_id" class="form-control">
                    <option value=" ">No Data selected</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option> <!--select product name from product table -->
                    @endforeach
                </select>
        </div><br>
        <div class="form-group">
                        <label>Sales_Count</label>
                        <input type="number"  class="form-control" min="1" name="count" />  <!-- sales count must greater than 0 not accept negative -->
                        @if($errors->has('count'))
                    <div class="error">{{ $errors->first('count') }}</div>
                     @endif
                
            </div><br>
            <button type="submit" class="btn btn-success" >Add Sales</button>
        </form>
    </center>
@endsection