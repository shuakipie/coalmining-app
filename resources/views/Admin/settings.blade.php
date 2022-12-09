@extends('app')

@section('content')
  <article class="content items-list-page">
                    <div class="title-search-block">
               
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title">
                    {{ trans('lang.settings')}}
                    
                    <!--<a href="{{ url('admin/emp/create') }}" class="btn btn-primary btn-sm rounded-s">
                        <i class="fa fa-location-arrow"></i> New Appointment
                    </a> -->
                    
               
                </h3>
                                    <p class="title-description"> 
        <ul class='breadcrumb'>
        <li><a href="{{ URL('admin/dashboard') }}"><i class="fa fa-home"></i> {{ trans('lang.dashboard')}}</a></li>
        <li>{{ trans('lang.settings')}}</li>

    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
 					@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> {{ trans('lang.error')}}<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                 @if (Session::has('message'))
                        <div class="alert alert-success">
                            <strong>  {{ Session('message') }} </strong>
                        </div>
                    @endif
<section class="section">
                        <div class="row sameheight-container">
                            <div class="col-xl-12">
                                <div class="card sameheight-item">
                                    <div class="card-block">
                                        <!-- Nav tabs -->
                                        <div class="card-title-block">
                                            <h3 class="title">
                            {{ trans('lang.settings')}}
                        </h3> </div>
                                        <ul class="nav nav-tabs nav-tabs-bordered">
                                            <li class="nav-item"> <a href="#home" class="nav-link active" data-target="#home" data-toggle="tab" aria-controls="home" role="tab">{{ trans('lang.general')}}</a> </li>
                                            <li class="nav-item"> <a href="#profile" class="nav-link" data-target="#profile" aria-controls="profile" data-toggle="tab" role="tab">{{ trans('lang.tax')}}</a> </li>
                                        </ul>
<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/settings/update') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">                                                   
                                        <!-- Tab panes -->
                                        <div class="tab-content tabs-bordered">
                                            <div class="tab-pane fade in active" id="home">
                                               <br /><br />
                                                 
                                                @foreach ($companys as $company)
                        
                    <div class="form-group">

                            <label class="control-label text-uppercase">{{ $company->field }}</label>
                            
                            @if($company->field=='localization')   
                             <!--   
                            <select id="{{ $company->field }}" name="{{ $company->field }}" class="form-control">
                                  <option value="en" <?php if($company->value=='en') echo 'selected'; ?>>English</option>
                                  <option value="fr" <?php if($company->value=='fr') echo 'selected'; ?>>French</option>
                                  
                                  <option value="ta" <?php if($company->value=='ta') echo 'selected'; ?>>Tamil</option>
                                  <option value="hi" <?php if($company->value=='hi') echo 'selected'; ?>>Hindi</option>
                                  <option value="ma" <?php if($company->value=='ma') echo 'selected'; ?>>Malay</option>
                                  <option value="sp" <?php if($company->value=='sp') echo 'selected'; ?>>Spanish</option>
                                  <option value="ru" <?php if($company->value=='ru') echo 'selected'; ?>>Russian</option>
                                  <option value="ge" <?php if($company->value=='ge') echo 'selected'; ?>>German</option>
                                  <option value="ch" <?php if($company->value=='ch') echo 'selected'; ?>>Chinese</option>
                                  <option value="it" <?php if($company->value=='it') echo 'selected'; ?>>Italian</option>
                                  <option value="tu" <?php if($company->value=='tu') echo 'selected'; ?>>Turkish</option>
                                  <option value="po" <?php if($company->value=='po') echo 'selected'; ?>>Portuguese</option>
                                  <option value="sw" <?php if($company->value=='sw') echo 'selected'; ?>>Swedish</option>
                                  <option value="ar" <?php if($company->value=='ar') echo 'selected'; ?>>Arabic</option>
                                  <option value="be" <?php if($company->value=='be') echo 'selected'; ?>>Bengali</option>
                                  <option value="ja" <?php if($company->value=='ja') echo 'selected'; ?>>Japanese</option>
                                  <option value="th" <?php if($company->value=='th') echo 'selected'; ?>>Thai</option>
                                  <option value="da" <?php if($company->value=='da') echo 'selected'; ?>>Danish</option>
                                  <option value="fi" <?php if($company->value=='fi') echo 'selected'; ?>>Filipino</option>
                                  <option value="in" <?php if($company->value=='in') echo 'selected'; ?>>Indonesian</option>
                                   
                                </select>
                                -->
                            @else
                        <input type="text" class="form-control underlined" name="{{ $company->field }}" value="{{ $company->value }}">
                        @endif
<p class="text-right"><code>${{ $company->field }}</code></p>
                        
                                
                            
                        </div>
                          @endforeach
                                            </div>
                                            <div class="tab-pane fade" id="profile">
                                                <br /><br />
                                                  @foreach ($taxs as $tax)
            
                    <div class="form-group">
                            <label class="control-label">{{ $tax->field }}</label>
                            
                                <input type="text" class="form-control underlined" name="{{ $tax->field }}" value="{{ $tax->value }}">

                                <p class="text-right"><code>${{ $tax->field }}</code></p>

                            
                        </div>
                          @endforeach
                                            </div>
                                            
                                              
                        <div class="form-group">
                         
                                <button type="submit" <?php if(env('APP_DEMO')=='1'){ echo 'disabled'; } ?> class="btn btn-primary btn-lg">
                                    {{ trans('lang.update')}}
                                </button>
                            </div>
                         
                        
                    </form>
                                        </div>
                                    </div>
                                    <!-- /.card-block -->
                                </div>
                                <!-- /.card -->
                            </div>
                           
                        </div>
                    </section>


                       <!-- Nav tabs -->




  
                   
                </article>







@endsection
