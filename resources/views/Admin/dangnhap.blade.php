@extends('Admin.master')
@section('content')
            <li style="list-style:none"><a href="{{ route('postauthre')}}">Đăng ký</a></li>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <form action= "{{route("postauth")}}" method= "post" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     @if ($errors->has('errologin'))
                    <div class="alert alert-danger" role="alert">
                      <span class="" aria-hidden="true">{{ $errors->first('errologin') }} </span>
                      <!-- <span class="sr-only">Lỗi:</span> -->
                     
                    </div>
                    @endif
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" value="{{old('email')}}">
                         @if ($errors->has('email'))
                         <p class="error1" >{{ $errors->first('email') }} </p>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                         <p class="error1" >{{ $errors->first('password') }} </p>
                        @endif
                      </div>
                    <button type="submit" id="log" class="btn btn-default">Đăng nhập</button>
                </form>
            </div>
@endsection