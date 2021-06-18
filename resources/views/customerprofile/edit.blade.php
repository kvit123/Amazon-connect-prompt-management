@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Personalise you service menu</h1>
@stop

@section('content')
        <div class="row justify-content-center">
            <div class="col-12">


                <section class="content">
                  <div class="row">

                  @if(Session::has('message'))
                      <div class="alert bg-success alert-success text-white" role="alert">
                          {{Session::get('message')}}
                      </div>
                  @endif

                    <div class="col-md-8">

                 <!--BoF Tab -->

                <div class="card card-primary card-outline">
                  <div class="card-header">

                  </div>
                  <div class="card-body">


                    <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Main IVR menu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Prefer IVR menu</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill" href="#custom-content-above-settings" role="tab" aria-controls="custom-content-above-settings" aria-selected="false">Settings</a>
                      </li>
                    </ul>
                    <div class="tab-custom-content">
                    </div>
                    <div class="tab-content" id="custom-content-above-tabContent">
                      <div class="tab-pane fade active show" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">




                        <form class="forms-sample" action="{{route('customerprofile.update',[$user->phone])}}" method="post" enctype="multipart/form-data" >@csrf
                        @method('PUT')

                              <div class="card card-primary">

                                <div class="card-header">
                                  <h3 class="card-title">Design your IVR menu service</h3>

                                  <div class="card-tools">
                                  </div>
                                </div>

                                <div class="card-body">

                                  <div class="form-group">
                                    <label for="inputStatus">Press 1 </label>

                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                                      </div>

                                      <select class="form-control custom-select" name="menu1">
                                        <option selected="" disabled="">Select one</option>

                                        @foreach(App\ivrMenu::where('language','=',$user->language)->get(); as $msg)
                                          <option value="{{$msg->message}}">{{$msg->message}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputStatus">Press 2</label>

                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                                      </div>
                                      <select class="form-control custom-select" name="menu2">
                                        <option selected="" disabled="">Select one</option>

                                        @foreach(App\ivrMenu::where('language','=',$user->language)->get(); as $msg)
                                          <option value="{{$msg->message}}">{{$msg->message}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputStatus">Press 3</label>

                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                                      </div>
                                      <select class="form-control custom-select" name="menu3">
                                        <option selected="" disabled="">Select one</option>

                                        @foreach(App\ivrMenu::where('language','=',$user->language)->get(); as $msg)
                                          <option value="{{$msg->message}}">{{$msg->message}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>


                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">

                                  <a href="{{route('customerprofile.index')}}" class="btn btn-secondary">Cancel</a>

                                  <div class="card-tools">
                                   <input type="submit" value="Save Changes" class="btn btn-success">
                                  </div>

                                </div>

                              </div>

                        </form>



                      </div>
                      <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">


                        <form class="forms-sample" action="{{route('customerprofile.update',[$user->phone])}}" method="post" enctype="multipart/form-data" >@csrf
                        @method('PUT')

                              <div class="card card-primary">

                                <div class="card-header">
                                  <h3 class="card-title">Setting your first reponse prompt</h3>

                                  <div class="card-tools">
                                  </div>
                                </div>

                                <div class="card-body">

                                  <div class="form-group">
                                    <label for="inputStatus">Prefer menu</label>

                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                                      </div>

                                      <select class="form-control custom-select" name="preferMenu">
                                        <option selected="" disabled="">Select one</option>

                                        @foreach(App\ivrMenu::where('language','=',$user->language)->get(); as $msg)
                                          <option value="{{$msg->service}}">{{$msg->service}}</option>
                                        @endforeach
                                      </select>
                                    </div>
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

                        </form>




                      </div>

                      <div class="tab-pane fade" id="custom-content-above-settings" role="tabpanel" aria-labelledby="custom-content-above-settings-tab">


                        <form class="forms-sample" action="{{route('customerprofile.update',[$user->phone])}}" method="post" enctype="multipart/form-data" >@csrf
                        @method('PUT')

                              <div class="card card-primary">

                                <div class="card-header">
                                  <h3 class="card-title">Profile Setting</h3>

                                  <div class="card-tools">
                                  </div>
                                </div>

                                <div class="card-body">

                                   <div class="form-group">
                                    <label for="language">Language</label>
                                    <input type="text" name="language" class="form-control" value="{{old('language')}}">
                                  </div>



                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">

                                  <a href="{{route('customerprofile.index')}}" class="btn btn-secondary">Cancel</a>

                                  <div class="card-tools">
                                   <input type="submit" value="Save Changes" class="btn btn-success">
                                  </div>

                                </div>

                              </div>

                        </form>



                      </div>
                    </div>
                  </div>

                </div>
                <!-- BoF Tab-->



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
                            <h6>message prompt based on customer language</h6>

                            <p>select your message prompt and update</p>
                          </div>

                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->

                  </div>
                </section>






              <div class="row">





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