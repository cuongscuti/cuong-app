@extends('Admin.master')
@section('content')
 <div class="box-body table-responsive no-padding">
 <a style="margin-bottom:10px;" href="{{ route('postcreate') }}" class="btn btn-default btn-flat"><i class="fa fa-plus"></i> Thêm mới</a>
 <li><a href="">logout</a></li>
    <form method="post" action="" id="fcFrom">
        <table class="table table-hover" id="diagnosis-list">
            <tbody >
                <tr>
                    <th>Stt</th>
                    <th>Tên</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Giá</th>
                    <th class="text-right">Thao tác</th>
                </tr>
                <tr>
                     <?php $i=0 ?>                   
                     @foreach($product as $item) 
                       <?php $i++ ?>                                          
                        <tr>
                            <td><?php echo $i ?></td>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->description}}</td>               
                           	<td><img width="100" height="100" src="{{asset($item->photo)}}" alt=""></td>
                           	<td>{{ $item->price}}</td>
                            <td class="text-right">
                                <div class="btn-group">
                                    <a href="{{ URL::route('delete',$item->id) }}" onclick="return confirm('Bạn Chắc Chắn Muốn Xóa')" class="btn btn-default "><span class="fa fa-trash"></span>Xóa</a>
                                    <a href="{{ URL::route('postupdate',$item->id) }}" class="btn btn-default"><i class="fa fa-edit"></i>Chỉnh sửa</a>
                                    <a href="" class="btn btn-default"><i class="fa fa-eye"></i>Xem</a>
                                </div>
                             </td>
                        </tr>
                	@endforeach
                </tr>
            </tbody>
        </table>
   </form>
 </div><!-- /.box-body -->
 @endsection