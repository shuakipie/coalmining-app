@extends('login_app')

@section('content')
<div class="auth">
	
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
        <div class="logo">
        	<span class="l l1"></span>
        	<span class="l l2"></span>
        	<span class="l l3"></span>
        	<span class="l l4"></span>
        	<span class="l l5"></span>
        </div>        GINO'S COAL MINING
      </h1> 

  </header>
                    <div class="auth-content">

                    	@if (count($errors) > 0)
						<div class="alert alert-warning">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
                        <p class="text-xs-center">LOGIN TO CONTINUE</p>
                        <form id="login-form" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <!--<form id="login-form" action="/index.html" method="GET" novalidate=""> -->
                            <div class="form-group"> <label for="email">Administrator Email</label> <input type="email" class="form-control underlined" name="email" value="{{ old('email') }}" id="email" placeholder="Your email address" required> </div>
                            <div class="form-group"> <label for="password">Password</label> <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required> </div>
                            <div class="form-group"> <label for="remember">
            <input class="checkbox" name="remember" id="remember" type="checkbox"> 
            <span>Remember me</span>
          </label> <!-- 
          <a href="{{ url('/password/email') }}" class="forgot-btn pull-right">Forgot password?</a> --> </div>
                            <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Login</button> </div>
                           <!-- <div class="form-group">
                                <p class="text-muted text-xs-center">Do not have an account? <a href="signup.html">Sign Up!</a></p>
                            </div> -->
                        </form>
                    </div>
                </div>
                <div class="text-xs-center">
                 
                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>


<!--
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-warning">
				 
				<div class="panel-heading"><strong>Administrator Login</strong></div>
				<div class="panel-body">
					
                      	
        				</div>
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-warning">Login</button>

								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> -->
@endsection
