@extends('adminlte::page')

@section('title', 'Create Customer Profile')

@section('content_header')
    <h1>Add Customer Profile</h1>
@stop

@section('content')


        <div class="row justify-content-center">
            <div class="col-12">



              <form class="forms-sample" action="{{route('customerprofile.store')}}" method="post" enctype="multipart/form-data" >@csrf

                <section class="content">
                  <div class="row">

                    <div class="col-md-8">
                      <div class="card card-primary">

                        <div class="card-header">
                          <h3 class="card-title"> Customer information</h3>

                          <div class="card-tools">
                          </div>
                        </div>

                        <div class="card-body">

                          <div class="form-group">
                            <label for="language">Phone Number</label>
                            <input type="text" name="phone" class="form-control" value="{{old('phone')}}">
                          </div>
                          <div class="form-group">
                            <label for="language">First name</label>
                            <input type="text" name="firstName" class="form-control" value="{{old('firstName')}}">
                          </div>
                          <div class="form-group">
                            <label for="language">Last name</label>
                            <input type="text" name="lastName" class="form-control" value="{{old('lastName')}}">
                          </div>
                          <div class="form-group">
                            <label for="language">email</label>
                            <input type="text" name="email" class="form-control" value="{{old('email')}}">
                          </div>
                           <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" name="language" class="form-control" value="{{old('language')}}">
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                          <a href="{{route('customerprofile.index')}}" class="btn btn-secondary">Cancel</a>


                          <div class="card-tools">
                           <input type="submit" value="Create" class="btn btn-success float-right">
                          </div>

                        </div>

                      </div>
                      <!-- /.card -->
                    </div>
                    <div class="col-md">
                      <div class="card card-secondary">
                        <div class="card-header">
                          <h3 class="card-title">Note : </h3>

                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                              <i class="fas fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="card-body">


                          <div class="callout callout-info">
                            <h6><i class="fas fa-exclamation-triangle text-warning"></i>Tips : Fill up language code in format below</h6>

                            <p>en : English</p>
                            <p>ch : Chinese</p>
                            <p>jp : Japanese</p>
                            <p>kr : Korean</p>

                            <br><br>
                            <h6>Phone number must start with + country code</h6>
                            <p>Eg : +65 xxx xxxx</p>
                            <p>     +66 xxx xxxx</p>
                          </div>

                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->

                  </div>
                </section>

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