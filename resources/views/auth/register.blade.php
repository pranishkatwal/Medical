@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        <div class="">
            @if(count($errors->getBags()))
            @endif
            @if(Session::has('success'))
                <div class="alert-success"> {{Session::get('success')}}</div>
            @endif
        </div>
        <form action="{{route('user-register')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-3"><!--left col-->
                    <div class="text-center mt-3">
                        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"
                             class="avatar img-circle img-thumbnail"
                             alt="avatar">
                        <h6>Upload a different photo...</h6>
                        <input type="file" name="profile_photo" class="text-center center-block file-upload">
                    </div>
                    <hr>
                    <br>

                </div><!--/col-3-->
                <div class="col-sm-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>Full name:</h4></label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="full name" title="enter your first name if any.">
                                    @if($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone Number:</h4></label>
                                    <input type="number" class="form-control" name="phone_number" id="phone_number"
                                           placeholder="enter phone" title="enter your phone number if any.">
                                    @if($errors->has('phone_number'))
                                        <p class="text-danger">{{ $errors->first('phone_number') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="you@email.com" title="enter your email.">
                                    @if($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="password"><h4>Change Password:</h4></label>
                                    <input type="password" class="form-control" disabled name="password"
                                           id="password"
                                           placeholder="password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i
                                                class="glyphicon glyphicon-ok-sign"></i> Save
                                    </button>
                                </div>
                            </div>
                            <hr>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
      $(document).ready(function () {
        var readURL = function (input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('.avatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }

        $(".file-upload").on('change', function () {
          readURL(this);
        });
      });
    </script>
@endsection