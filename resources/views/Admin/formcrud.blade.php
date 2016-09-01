@extends('Admin.master')
@section('content')
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <li style="list-style:none"><a href="{{ route('manager')}}">back</a></li>
                <form action= "" method= "post" enctype="multipart/form-data" id="formre">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Name" value="{{old('name')}}">
                         @if ($errors->has('name'))
                         <p class="error1" >{{ $errors->first('name') }} </p>
                        @endif
                       
                      </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">description</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="description" >
                     </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Photo</label>
                        <input type="file" name="file" id="exampleInputFile">
                        <p class="help-block">jpg,png,bmp,...</p>
                        @if ($errors->has('file'))
                         <p class="error1" >{{ $errors->first('file') }} </p>
                        @endif
                      </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">price</label>
                        <input type="number" class="form-control" id="" name="price" placeholder="price" id="price">
                    </div>
                     
                      <button type="submit" id="log" class="btn btn-default">Tạo</button>
                </form>
            </div>
        </div>
@endsection