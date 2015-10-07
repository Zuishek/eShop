@extends('layouts.master')
 
@section('E-shop', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')
    <div style="margin-top:50px" class="mainbox col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Profile Update</div>
            </div>
            <div class="panel-body" >
               <form method="POST" action="/profile/edit"  class="form-horizontal" role="form" files="true" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email Address</label>
                        <div class="col-md-9">
                         
                            <input type="text" class="form-control" name="email" value="{{$currentUser->email}}">
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="name" value="{{$currentUser->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="file" class="col-md-3 control-label">Avatar</label>
                        <div class="col-md-9">
                          <input type="file" class="form-control" name="avatar" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                          <input type="password" class="form-control" name="password" value="{{$currentUser->password}}">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                             <button type="submit" id="btn-signup" class="btn btn-success"><i class="fa fa-hand-o-right"></i> &nbsp Update</button>
                        </div>
                    </div>

               </form>
            </div>
        </div>
    </div>
    <div style="margin-top:50px" class="mainbox col-md-6">
               <div class="media">
                <img class="media-object" src="/images/{{$currentUser->avatar}}" ></a>
                </div>                   
    </div>
 
@endsection
 