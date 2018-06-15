{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')



@stop

@section('content')

<div class="col col-md-12" style="height: 100%!important;">

    <a class="btn  btn-danger margin" href="/cours/navigation?folder={{$folder}}">
        Mode Navigation
    </a>
	<div class="col col-md-12 col-md-offset-5 navigationNotion" >

        <div>
            <button class="btn  btn-danger margin" onclick="previous()">
                previous
            </button>
            <button class="btn  btn-danger margin" onclick="next()">
                next
            </button>
        </div>

    </div>

    {{--Les documents doivent être sous le format docx pour être pris en compte!</h4>--}}
    <div class="col col-md-12  fond" id="contenuNotion" >

    </div>
    
</div>



@stop

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet"
      href="/css/accueilcss.css ">
@stop

@section('js')
    <script src="{{ asset('vendor/adminlte/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/lectureNotions.js') }}"></script>
<script> console.log('Hi!');


</script>
@stop
@push('css')
@push('js')
