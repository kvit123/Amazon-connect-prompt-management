
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>List Message prompt</h1>
@stop

@section('content')
	<div class="row">
    <div class="col-12">
      <div class="card">


        <div class="col-md-3">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Delete : {{$deleteIvr->message}}</h3>

              <div class="card-tools">
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->

            <form class="forms-sample" action="{{route('ivrmenu.destroy',[$deleteIvr->index])}}" method="post">@csrf
            @method('DELETE')

            <div class="card-body">
              <button type="submit" class="btn btn-block btn-outline-danger">Confirm Delete</button>
            </div>
            <!-- /.card-body -->
          </form>
          </div>
          <!-- /.card -->
        </div>


      <!-- /.card -->
    </div>
  </div>






@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
