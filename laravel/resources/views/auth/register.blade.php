@extends('layouts.master')
 
@section('E-shop', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')
 
    <div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Registration</div>
            </div>
            <div class="panel-body" >
                <form method="POST" action="/auth/register"  class="form-horizontal" role="form" files="true" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email Address</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="1234@eshop.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="avatar" class="col-md-3 control-label">Avatar</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="avatar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Confirm Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" id="btn-signup" class="btn btn-success"><i class="fa fa-hand-o-right"></i> &nbsp Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
@endsection
 