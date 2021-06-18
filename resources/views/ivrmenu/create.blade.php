
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create new message prompt</h1>
@stop

@section('content')


        <div class="row justify-content-center">
            <div class="col-12">



              <form class="forms-sample" action="{{route('ivrmenu.store')}}" method="post" enctype="multipart/form-data" >@csrf

                <section class="content">
                  <div class="row">

                    <div class="col-md-8">
                      <div class="card card-primary">

                        <div class="card-header">
                          <h3 class="card-title">Start a new message</h3>

                          <div class="card-tools">
                          </div>
                        </div>

                        <div class="card-body">

                          <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" name="language" class="form-control" value="{{old('language')}}">
                          </div>
                          <div class="form-group">
                            <label for="service">Service</label>
                            <select name="service" class="form-control custom-select">
                              <option disabled="" select="">Select service</option>
                              <option value="account">Account</option>
                              <option value="balance">Balance</option>
                              <option value="creditcard">Credit Card</option>
                              <option value="fund">Fund</option>
                              <option value="ibanking">Internet Banking</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" class="form-control" rows="4">{{old('message')}}</textarea>
                          </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                          <a href="{{route('ivrmenu.index')}}" class="btn btn-secondary">Cancel</a>


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
