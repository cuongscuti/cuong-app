
<!DOCTYPE html>
<html lang="en">
    <head>
     <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script   src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additi‌​onal-methods.min.js"‌​></script>
    </head>
    <body>
		<form action= "{{route("postFile")}}" method= "post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type= "file" name = "file"  id='upload'>
			<input type= "submit" >
		</form>  
		  
		@if ( $errors->any() )
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>	
	@endif 
	</body> 
	<!-- <script>
   // $(document).ready(function(){
   //            $('#file').validate({
   //    rules: {
   //         image: {
   //            required: true,
   //            extension:'jpe?g,png',
   //            uploadFile:true,
   //            }
   //           }
   //        });
   //     });
	</script>    -->
</html>