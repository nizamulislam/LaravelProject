<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
       
       <div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
			
				<hr>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			</div>
		</div>
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">

			
					<h3>CONTACT ME</h3>
						{!! Form:: open(array('route' => 'course.store','class'=>'form-horizental')) !!}
				{!! Form:: token(); !!}

				
					
				  <div class="form-group">
				  
			


				   <!--<input type="text" class="form-control" id="" placeholder="course title" name="course_title">-->

 {!! Form::text('course_title', $value = null,$attributes = array('class'=>'form-control','id'=>'course_title','placeholder'=>'course title','required')); !!}
				       
				    <br>
				  </div>
				  <div class="form-group">
				    <!--<input type="text" class="form-control" id="" placeholder="course credit" name="course_credit">-->

            {!! Form::text('course_credit', $value = null,$attributes = array('class'=>'form-control','id'=>'course_credit','placeholder'=>'course credit','required')); !!}

				    <br>
				  </div>
				
				 <!-- <textarea class="form-control" rows="6" placeholder="Enter your text here"></textarea>-->

				
				  <!--<button type="submit" class="btn btn-success">SUBMIT</button>-->
				  <div class="form-group">
                  {!! Form::submit('Submit', 
                array('class'=>'btn btn-lnfo')) !!}
                 </div>
				 

				

				{!! Form::close() !!} 			
			</div>
		</div><!-- /row -->
	</div><!-- /


</body>
</html>