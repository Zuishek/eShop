<html>
<head>
	<title>E-Shop</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
@section('sidebar')
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
    	<div class="container-fluid">
    		<div class="navbar-headed">
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target"#bs-example-navbar-collapse-1">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>	
    				<span class="icon-bar"></span>	
    			</button>
    			<a class="navbar-brand" href='/'>E-shop</a>
    	    </div>
    	    <div  id="bs-example-navbar-collapse-1">
    	      <ul class="nav navbar-nav navbar-right">
    	      	@if(!Auth::user())
    	      	 <li><a href="/auth/login">Login</a></li>
    	      	 <li><a href="/auth/register">Signup</a></lsi>
    	      	@else
                <li><a href="/cart">Cart<span class="fa fa-shopping-cart"></span></a></li>
                <li><a href="/purchases">Purchases</a></li>
                <li><a href="/profile/update">Edit Profile</a></li>
    	      	<li><a href="/auth/logout">Logout </a></li>
    	      	@endif
    	      </ul>	
    	    </div>
    	</div>
    </nav>
@show
<div class="container">
	@yield('content')
</div>
</body>
</html>