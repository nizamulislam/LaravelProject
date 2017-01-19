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





		 <form action="{{ URL::to('savedata') }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}

<table border="2px">
 <tr>
   <td>
   <label>Title</label>
   <input type="text" name="title" class="form-control">
   </td>
   </tr>



    <tr>
   <td>
   <label>Image</label>
   <input type="file" name="image" class="form-control">
   </td>
   </tr>



</table>

<input type="submit" value="UPLOAD image" name="save">
		{!! Form::close() !!} 	


</div>


<div>
<table border="3px">

   <thead>
   <tr>

   <th>ID</th>
   <th>Title</th>
   <th>Picture</th>
   <th>Action</th>
   </tr>


   <tbody>
     <?php
        foreach($data as $row)
     {
         $image='upload/thumb/'.$row->image;


     	?>
     	 <tr>
     	 <td><?php echo $row->id ?></td>
     	 <td><?php echo $row->title ?></td>
     	 <td><img src="{{asset($image)}}"></td>
     	 <td>

     	 <a href="<?php echo  'edit/'.$row->id ?>">Edit</a>

     	  <a  href="<?php echo  'delete/'.$row->id ?>">delete</a>

     	 </td>


     	 </tr>


     	<?php
     }


     ?>

   </tbody>


   </thead>

</table>





</table>



</div>


</body>
</html>