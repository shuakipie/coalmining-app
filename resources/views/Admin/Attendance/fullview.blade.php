@extends('app')

@section('content')
  <article class="content items-list-page">
                    <div class="title-search-block">
               
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title">
                    {{ trans('lang.calendar')}} {{ trans('lang.view')}}
                    <!--<a href="{{ url('admin/emp/create') }}" class="btn btn-primary btn-sm rounded-s">
                        <i class="fa fa-location-arrow"></i> New Appointment
                    </a> -->
                    
               
                </h3>
                                    <p class="title-description"> 
        <ul class='breadcrumb'>
        <li><a href="{{ URL('admin/dashboard') }}"><i class="fa fa-home"></i> {{ trans('lang.dashboard')}}</a></li>
        <li>{{ trans('lang.calendar')}} {{ trans('lang.view')}}</li>

    </ul>
</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
 @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>{{ trans('lang.error')}}<br><br>
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
                           
                            <div class="col-md-12">
                                <div class="card card-block">
<div id="calendar"></div>
</div></div></div>
</section>
@section('script')
<!-- calendar -->

<link href='{{ asset('calendar/fullcalendar.css') }}' rel='stylesheet' />
<link href='{{ asset('calendar/fullcalendar.print.css') }}' rel='stylesheet' media='print' />
<script src='{{ asset('calendar/lib/moment.min.js') }}'></script>
<script src='{{ asset('calendar/lib/jquery.min.js') }}'></script>
<script src='{{ asset('calendar/fullcalendar.min.js') }}'></script>
@stop

@foreach ($employees as $emp)
@endforeach

@section('scripts')

<script>
  $(document).ready(function() {

    $('#calendar').fullCalendar({
      defaultDate: Date(),
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
      <?php
      foreach ($employees as $emp) {
        echo "{
        title: '".$emp->emp->name."',
        start: '".date('Y-m-d', strtotime($emp->work_in))."'
        },";

      }
      ?>
      
      ]
    });
    
  });

</script>
<!-- <script>
  $(document).ready(function() {

    $('#calendar').fullCalendar({
      defaultDate: '2016-09-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2016-09-01'
        },
        {
          title: 'Long Event',
          start: '2016-09-07',
          end: '2016-09-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-09-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-09-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2016-09-11',
          end: '2016-09-13'
        },
        {
          title: 'Meeting',
          start: '2016-09-12T10:30:00',
          end: '2016-09-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2016-09-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2016-09-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2016-09-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2016-09-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2016-09-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2016-09-28'
        }
      ]
    });
    
  });

</script> -->
@stop


                      
                   
                </article>





        
    </div>
  </div>
</div>
</div></div></div>
@endsection

