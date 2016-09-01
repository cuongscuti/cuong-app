@extends('Admin.master')
@section('content')
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <form action= "{{route("postauthre")}}" method= "post" enctype="multipart/form-data" id="formre">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" value="{{old('email')}}">
                         @if ($errors->has('email'))
                         <p class="error1" >{{ $errors->first('email') }} </p>
                        @endif
                      </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Name" value="{{old('email')}}">
                         @if ($errors->has('name'))
                         <p class="error1" >{{ $errors->first('name') }} </p>
                        @endif
                      </div>
                       <div class="form-group">
                        <label for="exampleInputFile">Avatar</label>
                        <input type="file" name="file" id="exampleInputFile">
                        <p class="help-block">jpg,png,bmp,...</p>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" >
                        @if ($errors->has('password'))
                         <p class="error1" >{{ $errors->first('password') }} </p>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="Password">
                        @if ($errors->has('password'))
                         <p class="error1" >{{ $errors->first('password') }} </p>
                        @endif
                      </div>
                    <button type="submit" id="log" class="btn btn-default">Đăng ký</button>
                </form>
            </div>
    
    <script type="text/javascript">
        $("#formre").validate({
            rules:{
                password_confirmation: {
                    equalTo:"#exampleInputPassword1"
                },
            },
            messages:{
                password_confirmation: {
                    equalTo:"Mật khẩu không đúng"
                }
            }
        });
    </script>
    @endsection
