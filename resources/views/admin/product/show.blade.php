


@extends('master')
@section('content')
    <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-5" style="margin-left:30%">
                <div class="product product-single" >
                    <div class="product-thumb" >
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                    </div>
                    <div class="product-body">
                        <h3 style="color:white;" class="product-price">{{$product->count}} <del class="product-old-price">$45.00</del></h3>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o empty"></i>
                        </div>
                        <h2 class="product-name"><a href="#" style="color:white;">{{$product->name}}</a></h2>
                    </div>
                </div>
            </div>
    </div>
@stop
