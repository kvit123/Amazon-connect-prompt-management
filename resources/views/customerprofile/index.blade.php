@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listed customer profile</h1>
@stop

@section('content')
        <div class="row justify-content-center">
            <div class="col-12">

           @if(Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif

            <div class="card">
              <div class="card-header">
                <a class="btn btn-primary btn-sm" href="{{route('customerprofile.create')}}">
                    <i class="fas fa-plus">
                    </i>
                    Add Customer profile
                </a>

              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Phone</th>
                      <th>FirstName</th>
                      <th>Language</th>
                      <th>Last Service</th>
                      <th>PreferMenu</th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tbody>

                    @if(count($users)>0)
                    @foreach($users as $user)

                    <tr data-widget="expandable-table" aria-expanded="true">
                      <td>{{$user->phone}}</td>
                      <td>{{$user->firstName}}</td>
                      <td>{{$user->language}}</td>
                      <td>{{$user->lastMenu}}</td>
                      <td>{{$user->preferMenu}}</td>
                      <td>
                        <a href="{{route('customerprofile.edit',[$user->phone])}}" class="btn btn-app bg-info"><i class="fas fa-edit"></i> Edit</a>

                     </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="5">
                        <p style="">
                          {{$user->msg}}
                        </p>
                      </td>


                    </tr>

                    @endforeach
                    @else
                    <td>No user to display</td>
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
        </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop