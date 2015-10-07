@extends('layouts.master')

@section('E-shop', 'Page Title')

@section('sidebar')
  @parent
@endsection

@section('content')
    <div class="row">
    	<div class="col-md-10 col-md-offset-1">
    		<table class="table table-hover">
    			<thead>
    			<tr>
    				<th>Product</th>
    			</tr>
    		    </thead>
    		    <tbody>
    		    	@foreach($purchases as $purchase) 
                    
                    
                     
                        <tr>
                        	<td class="col-md-6">
                        		<div class="media">
                        			<a class="thumbnail pull-left" href="#"><img class="media-object" src="/images/{{$purchase['product']['imageurl']}}" style="widht: 100px; height: 70px;"></a>
                        			<div class="media-body">
                        				<h4 class="media-heading"><a href="#">{{$purchase['product']['name']}}</a></h4>
                        			</div>
                        		</div>
                        	</td>
                        	<td class= "col-md-1" style="text-align:center"> </td>
                        	<td class= "col-md-1 text-center"></td>
                        	<td class= "col-md-1 text-center"><strong>${{$purchase['product']['price']}}</strong></td>
                        	
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection