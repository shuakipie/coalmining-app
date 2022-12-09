@extends('error-app')

@section('content')
 <div class="app blank sidebar-opened">
            <article class="content">
                <div class="error-card global">
                    <div class="error-title-block">
                        <h1 class="error-title">404</h1>
                        <h2 class="error-sub-title">
			Sorry, page not found
		</h2> </div>
                    <div class="error-container">
                        
                        <br>
                        <a class="btn btn-primary" href="{{ url('admin/dashboard') }}"> <i class="fa fa-angle-left"></i> Back to Dashboard </a>
                    </div>
                </div>
            </article>
        </div>
        @endsection