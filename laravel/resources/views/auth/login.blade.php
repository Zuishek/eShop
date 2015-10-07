@extends('layouts.master')

@section('E-shop', 'Page Title')

@section('sidebar')
   @parent
@endsection

@section('content')

  <div class="container">
  	<div id="loginbox" style="margin-top:50px;" class="col-md-6 col-md-offset-3">
  		<div class="panel panel-info">
  			<div class="panel-heading">
  				<div class="panel-title">Sign in</div>
  			</div>
  			<div style="padding-top:30px" class="panel-body">
  				<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
  				<form method="POST" action="/auth/login" class="form-horizontal" role="form">
  					{!! csrf_field()!!} 
  					<div style="margin-bottom:25px" class="input-group">
  						<span class="input-group-addon"><i class="fa fa-user"></i></span>
  						<input id="email" type="text" class="form-control" name="email" value="" placeholder="email">
  					</div>
  					<div style="margin-bottom:25px" class="input-group">
  						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
  						<input id="password" type="password" class="form-control" name="password" placeholder="password">
  					</div>
  					<div style="margin-top:10px" class="form-group">
  						<div class="col-sm-12 controlsl">
  							<button type="submit" id="btn-login" href="#" class="btn btn-success">Login</button>
  						</div>
  					</div>
  				</form>
  			</div>
  		</div>
  	</div>
  </div>
@endsection
