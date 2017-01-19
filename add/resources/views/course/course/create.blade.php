
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>STANLEY - Free Bootstrap Theme </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
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
				  <div class="form-group">
				    <!--<input type="text" class="form-control" id="" placeholder="course code" name="course_code">-->
				      {!! Form::text('course_code', $value = null,$attributes = array('class'=>'form-control','id'=>'course_code','placeholder'=>'course code input','required')); !!}
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


	container -->
	    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>