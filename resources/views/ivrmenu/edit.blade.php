
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')



        <div class="row justify-content-center">
            <div class="col-12">

                @if(Session::has('message'))
                    <div class="alert bg-success alert-success text-white" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif

              <form class="forms-sample" action="{{route('ivrmenu.update',[$msg->index])}}" method="post" enctype="multipart/form-data" >@csrf
              @method('PUT')


                <section class="content">
                  <div class="row">

                    <div class="col-md-8">
                      <div class="card card-primary">

                        <div class="card-header">
                          <h3 class="card-title">Edit message prompt</h3>
                          <input type="hidden" name="index" class="form-control" value="{{$msg->index}}">

                          <div class="card-tools">
                          </div>
                        </div>

                        <div class="card-body">

                          <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" name="language" class="form-control" value="{{$msg->language}}">
                          </div>
                          <div class="form-group">
                            <label for="service">Service</label>
                            <select name="service" class="form-control custom-select">
                              <option value="account" @if($msg->service=="account")selected @endif>Account</option>
                              <option value="balance" @if($msg->service=="balance")selected @endif>Balance</option>
                              <option value="creditcard" @if($msg->service=="creditcard")selected @endif>Credit Card</option>
                              <option value="fund" @if($msg->service=="fund")selected @endif>Fund</option>
                              <option value="ibanking" @if($msg->service=="ibanking")selected @endif>Internet Banking</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" class="form-control" rows="4">{{$msg->message}}</textarea>
                          </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                          <a href="{{route('ivrmenu.index')}}" class="btn btn-secondary">Cancel</a>

                          <div class="card-tools">
                           <input type="submit" value="Save Changes" class="btn btn-success">
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
