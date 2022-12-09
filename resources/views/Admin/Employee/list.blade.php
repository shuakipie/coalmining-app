@extends('app')

@section('content')
  <article class="content items-list-page">
                    <div class="title-search-block">
                
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title">
                    {{ trans_choice('lang.employee',2)}}
                    <button type="button" class="btn btn-primary btn-sm rounded-s btn-pill-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-location-arrow"></i> ADD EMPLOYEE </button>
                    <!--<a href="{{ url('admin/emp/create') }}" class="btn btn-primary btn-sm rounded-s">
                        <i class="fa fa-location-arrow"></i> New Appointment
                    </a> -->
                    
                <!-- <div class="action dropdown">
                        <button class="btn  btn-sm rounded-s btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reports
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-file-text icon"></i> Joining Report</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirm-modal">
                                <i class="fa fa-file-text icon"></i> Payroll Report</a>
                        </div>
                    </div>  -->
                </h3>
                                    <p class="title-description"> 
        <ul class='breadcrumb'>
        <li><a href="{{ URL('admin/dashboard') }}"><i class="fa fa-home"></i>{{ trans('lang.dashboard')}}</a></li>
        <li>{{ trans_choice('lang.employee',2)}}</li>

    </ul>
</p>
                                </div>
                            </div>
                        </div>
                        <div class="items-search">
                            <form class="form-inline" role="form" enctype="multipart/form-data" method="POST" action="{{ url('/admin/emp/search') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <!--<form class="form-inline"> -->
                                <div class="input-group"> <input type="text" name="query" class="form-control boxed rounded-s" placeholder="{{ trans('lang.search')}}"> <span class="input-group-btn">
                    <button class="btn btn-secondary rounded-s" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span> </div>
                            </form>
                        </div>
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> {{ trans('lang.error') }}<br><br>
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
                    </div>
@if(count($employees) > 0)
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="item-row">
                                   <!-- <div class="item-col fixed item-col-check"> <label class="item-check" id="select-all-items">
                        <input type="checkbox" class="checkbox">
                        <span></span>
                    </label> </div> -->
                                    <div class="item-col item-col-header fixed item-col-img md">
                                        <div> <span>{{ trans('lang.photo')}}</span> </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-title">
                                        <div> <span>{{ trans('lang.name')}}</span> </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-sales">
                                        <div> <span>{{ trans('lang.salary')}}</span> </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-stats">
                                        <div class="no-overflow"> <span></span> </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-category">
                                        <div class="no-overflow"> <span>{{ trans_choice('lang.designation',1)}}</span> </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-author">
                                        <div class="no-overflow"> <span></span> </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-date">
                                        <div> <span></span> </div>
                                    </div>
                                    <div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
                                </div>
                            </li>
                         
                            <?php $rand=rand(1,1000);
                                ?>
                             
    @foreach ($employees as $emp)
    
                            <li class="item">


    <div class="item-row">


                                 <!--  <div class="item-col fixed item-col-check"> <label class="item-check" id="select-all-items">
                            <input type="checkbox" class="checkbox">
                            <span></span>
                        </label> </div> -->
                                    <div class="item-col fixed item-col-img md">
                                        
                                           <!--  <img src="{{ asset('../uploads/photo/'.$emp->photo.'') }}?ver={{ $rand }}" width="80px" height="80px" class="img-responsive img-thumbnail photo" /> -->
<a href="{{ URL::to('admin/emp/edit/' . $emp->id) }}">
                                            <div class="item-img rounded" style="background-image: url({{ asset('../uploads/photo/'.$emp->photo.'') }}?ver={{ $rand }})"></div>
                                        </a>
                                        
                                        
                                    </div>
                                    <div class="item-col fixed pull-left item-col-title">
                                        
                                        <div class="item-heading">{{ trans('lang.name')}}Name</div>
                                    
                                        <div>
                                            
                                <h4 class="item-title">
                                   <a href="{{ URL::to('admin/emp/edit/' . $emp->id) }}">
                                    {{ $emp->name }}</a>
                                </h4> 
                                @if($emp->status==0) 
                                <span class="label label-danger"><strong></strong></span>
                                @else
                                <span class="label label-success"><strong></strong></span>
                                @endif
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">{{ trans('lang.salary')}}</div>
                                        <div> {{ $emp->salary }} </div>
                                    </div>
                                    <div class="item-col item-col-stats no-overflow">
                                        <div class="item-heading">{{ trans('lang.stats')}}</div>
                                        <div class="no-overflow">
                                            <div class="item-stats sparkline" data-type="bar"></div>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-category no-overflow">
                                        <div class="item-heading">{{ trans_choice('lang.designation',1)}}</div>
                                        <div class="no-overflow"> {{ $emp->post->post }}</div>
                                    </div>
                                    <div class="item-col item-col-author">
                                        <div class="item-heading"></div>
                                        <div class="no-overflow"> <br />
                                            </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading"></div>
                                        <div class="no-overflow">  </div>
                                    </div>
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                            <a class="item-actions-toggle-btn"> <span class="inactive">
                                    <i class="fa fa-cog"></i>
                                </span> <span class="active">
                                <i class="fa fa-chevron-circle-right"></i>
                                </span> </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <!--<li>
                                                        <a class="remove" href="{{ URL::to('admin/emp/edit/' . $emp->id) }}" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                    </li> -->
                                                    @if($emp->resume>0)
                                                     <li>
                                                        <a class="download" href="{{ URL::to('../uploads/resume/' . $emp->resume) }}" target="_blank"> <i class="fa fa-cloud-download "></i> </a>
                                                    </li>
                                                    @endif
                                                    <li>
                                                        <a class="edit" href="{{ URL::to('admin/emp/edit/' . $emp->id) }}"> <i class="fa fa-pencil"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

@endforeach
@else
                            <h1>{{ trans('lang.no_data')}}</h1>
@endif                            
                        </ul>
                    </div>

   <nav class="text-xs-right">
                       {!! str_replace('/?', '?', $employees->render()) !!}
        </nav>                    
                   
                </article>



<!-- new creation -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-location-arrow"></i> Employee Record</h4>
      </div>
      <div class="modal-body">
       <!-- <div class="alert alert-info">
            <strong>{{ trans('lang.default')}} {{ trans('lang.password')}}:</strong> 123456 | {{ trans('lang.pass_notify')}}user can change it when they logged in.
        </div> -->
<form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{ url('/admin/emp/docreate') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    
                                        <div class="form-group"> <label class="control-label">{{ trans('lang.name')}}*</label>
                                        <input type="text" name="name" class="form-control underlined"> </div>
                                         <div class="form-group"> <label class="control-label">{{ trans('lang.sex')}}*</label>
                                    <div> <label>
                                <input class="radio squared" value="male" name="sex" checked="checked" type="radio">
                                <span>{{ trans('lang.male')}}</span>
                            </label> <label>
                                <input class="radio squared"  value="female" name="sex" type="radio">
                                <span>{{ trans('lang.female')}}</span>
                            </label> </div>
                                </div>
                                        <div class="form-group"> <label class="control-label">{{ trans('lang.dob')}}*</label> 
                                              <div class='input-group date'>
<input type='text' class="form-control underlined" name="dob" id="date" data-provide="datepicker" />
  <span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span></div></div>
                                        <div class="form-group"> <label class="control-label">{{ trans('lang.father')}} / {{ trans('lang.husband')}} {{ trans('lang.name')}}</label> <input type="text" name="father" class="form-control underlined" placeholder="father/husband name"> </div>
                                         <div class="form-group"> <label class="control-label">{{ trans('lang.email')}}</label> <input type="text" name="email" class="form-control underlined" placeholder="valid email"> </div>
                                          <div class="form-group"> <label class="control-label">{{ trans('lang.mobile')}}</label> <input type="text" name="mobile" class="form-control underlined" placeholder="valid mobile no"> </div>                                
                                        <div class="form-group"> <label class="control-label">{{ trans('lang.address')}}</label> <textarea rows="3" name="address" class="form-control underlined"></textarea> </div>
                                        
                                        <div class="form-group"> <label class="control-label">{{ trans('lang.photo')}}</label>
                                            <input type="file" name="photo" value="" > </div>
                                        <div class="form-group"> <label class="control-label">{{ trans('lang.resume')}}</label>
                                            <input type="file" name="resume" value="" > </div>
                                        
                                        <div class="form-group"> <label class="control-label">{{ trans('lang.position')}}</label>
                                         <select class="form-control underlined" name="posting">
  @foreach ($posts as $post)
  <option value="{{ $post->id }} ">{{ $post->post }}</option>
  @endforeach
</select>
  </div>                                
                                        <div class="form-group"> <label class="control-label">{{ trans('lang.salary')}}</label> <input type="text" name="salary" class="form-control underlined" placeholder="Monthly Salary"> </div>
                                        <div class="form-group"> <label class="control-label">{{ trans('lang.notes')}}</label> 
                                             <textarea rows="3" name="notes" maxlength="150" class="form-control underlined"></textarea> </div>                                
                                        <div class="form-group"> <label class="control-label">{{ trans('lang.join_date')}}</label> 
                                            <div class='input-group date'>
<input type='text' class="form-control underlined" name="doj" id="date2" data-provide="datepicker" />
  <span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span></div>
 </div>                                                                
<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> {{ trans('lang.cancel')}}</button>
        <button type="submit" <?php if(env('APP_DEMO')=='1'){ echo 'disabled'; } ?> class="btn btn-primary"><i class="fa fa-check"></i> {{ trans('lang.save')}}</button>
        </form>
      </div>
            
                                
       <!--
<legend>Personal Details</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Employee Name*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Date of Birth*</label>
                            <div class="col-md-6">
                            <div class='input-group date'>
<input type='text' class="form-control" name="dob" id="date" data-provide="datepicker" />
  <span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span></div>

                            </div>
                        </div>

                        <div class="form-group">    
                            <label class="col-md-4 control-label">Father/Husband*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="father" value="" >
                            </div>
                        </div>
                        <div class="form-group">    
                            <label class="col-md-4 control-label">Mobile*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mobile" value="" >
                            </div>
                        </div>
                        <div class="form-group">    
                            <label class="col-md-4 control-label">Email*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" value="" >
                            </div>
                        </div>
<div class="form-group">    
                            <label class="col-md-4 control-label">Address*</label>
                            <div class="col-md-6">
                                <textarea name="address" class="form-control">
                                </textarea>
                                
                            </div>
                        </div>
                                                <div class="form-group">    
                            <label class="col-md-4 control-label">Upload Photo*</label>
                            <div class="col-md-6">
                                <input type="file"  name="photo" value="" >
                            </div>
                        </div>
                        <div class="form-group">    
                            <label class="col-md-4 control-label">Upload Resume*</label>
                            <div class="col-md-6">
                                <input type="file" name="resume" value="" >
                            </div>
                        </div>
                        
<legend>Social Profiles</legend>                        
                        <div class="form-group">    
                            <label class="col-md-4 control-label">Facebook*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="facebook" value="" >
                            </div>
                        </div>
                        <div class="form-group">    
                            <label class="col-md-4 control-label">Twitter*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="twitter" value="" >
                            </div>
                        </div>
                        <div class="form-group">    
                            <label class="col-md-4 control-label">Linkedin*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="linkedin" value="" >
                            </div>
                        </div>
                        <div class="form-group">    
                            <label class="col-md-4 control-label">Github*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="github" value="" >
                            </div>
                        </div>

                        
                        
<legend>Job Details</legend>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Date of Join*</label>
                            <div class="col-md-6">
                            <div class='input-group date'>
<input type='text' class="form-control" name="doj" id="date2" data-provide="datepicker" />
  <span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span></div>

                            </div>
                        </div>
                            <div class="form-group">
                            <label class="col-md-4 control-label">Position*</label>
                            <div class="col-md-6">
                            <select class="form-control" name="posting">
  @foreach ($posts as $post)
  <option value="{{ $post->id }} ">{{ $post->post }}</option>
  @endforeach
</select>
<p class="text-right">
<a href="{{ URL::to('admin/posting') }}">+ New Position</a>
</p>

                            </div>
                        </div>
<div class="form-group">    
                            <label class="col-md-4 control-label">Salary*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="salary" value="" require>
                            </div>
                        </div>  
<div class="form-group">    
                            <label class="col-md-4 control-label">Notes*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="notes" value="" require >
                            </div>
                        </div>                      
                            
-->

                       

      </div>
      
    </div>
  </div>
</div>

				
		</div>
	</div>
</div>
</div></div></div>



@endsection
