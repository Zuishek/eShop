@extends('layouts.master')

@section('E-shop','Page Title')

@section('sidebar')
  @parent
@endsection

@section('content')
  
   <div class="container">
      <div class="row">
        <div class="col-md-12">
          @foreach ($products as $product)

             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="/images/{{$product->imageurl}}" class="img-responsive"> 
                  <div class="caption">
                    <div class="row">
                      <div class="col-md-9 col-xs-6">
                        <h3>{{$product->name}}</h3>
                      </div>
                      <div class="col-md-3 col-xs-6 price">
                        <h3><label>${{$product->price}}</label></h3>
                      </div>
                    </div>
                    <p>{{$product->description}}</p>
                    <div class="row">
                      <div class="col-md-6 col-md-offset-3">
                        @if($product->stock >0)
                        <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a></div>
                        @else
                        <button class="btn btn-primary" type="button">Sold Out  <span class="fa fa-spinner"></span></button></div>
                        @endif
                    </div>
                   </div>
                 </div>
             </div>
            @endforeach
        </div>
      </div>
    </div>
@endsection
