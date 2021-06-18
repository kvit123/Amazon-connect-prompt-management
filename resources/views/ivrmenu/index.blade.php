
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>List Message prompt</h1>
@stop

@section('content')
	<div class="row">
          <div class="col-12">
            <div class="card">

              @if(Session::has('message'))
              <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
              </div>
              @endif


              <div class="card-header">

                <a class="btn btn-primary btn-sm" href="{{route('ivrmenu.create')}}">
                    <i class="fas fa-plus">
                    </i>
                    Add message
                </a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>

                  </div>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Index</th>
                      <th>Language</th>
                      <th>Service</th>
                      <th>Message prompt</th>
                      <th>Date</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                    @if(count($msgs)>0)
                    @foreach($msgs as $key=>$msg)

                    <tr>
                      <td>{{$msg->index}}</td>
                      <td>{{$msg->language}}</td>
                      <td>{{$msg->service}}</td>
                      <td>{{$msg->message}}</td>
                      <td><span class="tag tag-success">{{$msg->updated_at}}</span></td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder" data-toggle="modal" data-target="#modal-view">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{route('ivrmenu.edit', $msg->index)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>


                          <a class="btn btn-danger btn-sm" href="{{route('ivrmenu.show', $msg->index)}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
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
            <!-- /.card -->
          </div>
        </div>


<!--Modal-->


<div class="modal fade" id="modal-view" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Prompt message : {{$msg->message}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

            	<div class="row">
			        <div class="container-fluid">
			          <div class="card card-primary">
			            <div class="card-header">
			              <h3 class="card-title"></h3>
			            </div>
			            <div class="card-body">
			              <div class="form-group">
			                <label for="language">Language</label>
			                <input type="text" id="language" class="form-control" value="{{$msg->language}}">
			              </div>
			              <div class="form-group">
			                <label for="language">Service</label>
			                <input type="text" id="service" class="form-control" value="{{$msg->service}}">
			              </div>
			              <div class="form-group">
			                <label for="message">Message</label>
			                <textarea id="message" class="form-control" rows="4">{{$msg->message}}</textarea>
			              </div>

			              <div class="form-group">
			                <label for="date">Updated At</label>
			                <input type="text" id="date" class="form-control" value="{{$msg->updated_at}}">
			              </div>

			            <!-- /.card-body -->
			          </div>
			          <!-- /.card -->
			        </div>
      		</div>


            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>









@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
