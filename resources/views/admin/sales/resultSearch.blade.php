@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Show All Saless </h1>
        <div class="row" style="color: whitesmoke;width: 82%;margin-left: 15%">
            <table class="table table-bordered table-responsive " >
                <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-3">Count</th>
                </tr>
                @foreach($saless as $sales)

                    <tr >
                        <th class="col-md-1"> {{$sales->id}}</th>
                        <th class="col-md-3"> {{$sales->name}}</th>
                    </tr>
                @endforeach
            </table>
        </div>
    </center>
@endsection