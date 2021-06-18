@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Setting My IVR menu</h1>
@stop

@section('content')
        <div class="row justify-content-center">
            <div class="col-lg-8">

                @if(Session::has('message'))
                    <div class="alert bg-success alert-success text-white" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif

                <form class="forms-sample" action="{{route('ivrmenu.create')}}" method="post" enctype="multipart/form-data" >@csrf
                @method('PUT')>
                <div class="card-body">
                  <div class="form-group">
                      <label for="exampleSelectBorder">Menu 1</label>
                      <select class="custom-select form-control-border" name="menu1">
                        <option value=""></option>
                        <option value="payment">payment</option>
                        <option value="credit card">credit card</option>
                        <option value="loan">loan</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleSelectBorder">Menu 2</label>
                      <select class="custom-select form-control-border" name="menu2">
                        <option value=""></option>
                        <option value="payment">payment</option>
                        <option value="credit card">credit card</option>
                        <option value="loan">loan</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleSelectBorder">Menu 3</label>
                      <select class="custom-select form-control-border" name="menu3">
                        <option value=""></option>
                        <option value="payment">payment</option>
                        <option value="credit card">credit card</option>
                        <option value="loan">loan</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleSelectBorder">Menu 4</label>
                      <select class="custom-select form-control-border" name="menu4">
                        <option value=""></option>
                        <option value="payment">payment</option>
                        <option value="credit card">credit card</option>
                        <option value="loan">loan</option>
                      </select>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>

            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop