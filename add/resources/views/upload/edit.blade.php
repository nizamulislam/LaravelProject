<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div>

  @if(count($errors)>0)


     @foreach($errors->all() as $error)
      {{$error}}  <br/>
       @endforeach 

  @endif


     @if(Session::has('success'))
        <p>{!!Session::get('success') !!}</p>

 


     @endif




      @if(Session::has('deletemsg'))
        <p>{!!Session::get('deletemsg') !!}</p>

 


     @endif





		 <form action="{{ URL::to('updatedata') }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}

<table border="2px">

<input type="hidden" name="id" value="<?php echo $row->id ?>">
 <tr>
   <td>
   <label>Title</label>
   <input type="text" name="title" value=<?php echo  $row->title?> class="form-control">
   </td>
   </tr>



    <tr>
   <td>
   <label>Image</label>
   <input type="file" name="image" class="form-control">
   <input type="hidden" name="oldpic" value="<?php echo $row->image ?>">

     <?php  
       $img='upload/thumb/'.$row->image;


     ?>
     <img width="150" height="150" src="{{asset($img)}}">
   </td>
   </tr>



</table>

<input type="submit" value="Modify image" name="save">
		{!! Form::close() !!} 	


</div>

</body>
</html>