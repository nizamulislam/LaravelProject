@extends('main')

@section('title', "| $post->title")



  @section('stylesheets')
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


  @endsection





@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
      
    		<img src="{{asset('/images/' . $post->image)}}" width="300" height="200" />


			<h1>{{ $post->title }}</h1>
			<p>{!!$post->body !!}</p>
			<p>Posted in:  {{$post->category->name}}</p>
			<hr>
			
		</div>
	</div>


<!-- ==================================Simple Step===========================================
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@foreach($post->comments as $comment)
				<div class="comment">
					<p><strong>Name:</strong> {{ $comment->name }}</p>
					<p><strong>Comment:</strong>{{ $comment->comment }}({{$comment->created_at}})</p><br>
				</div>
			@endforeach
		</div>
	</div>


	==================end o0f Simple step===================================================== 

	-->







	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comments()->count() }} Comments</h3>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">

						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) }}" class="author-image">
						<div class="author-name">
							<h4>{{ $comment->name }}</h4>
							<p class="author-time">{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
						</div>
						
					</div>

					<div class="comment-content">
						{{ $comment->comment }}
					</div>
					
				</div>
			@endforeach
		</div>
	</div>




















	



        

        <div class="row">
       	<div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
               {{Form::open(['route'=>['comments.store',$post->id],'method'=>'POST'])}}


                  	<div class="row">
					<div class="col-md-6">
						{{ Form::label('name', "Name:") }}
						{{ Form::text('name', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-6">
						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-12">
						{{ Form::label('comment', "Comment:") }}
						{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

						{{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
					</div>
				</div>

               {{Form::close()}}

           </div>




        </div>




@endsection






@section('scripts')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
confirm('i loaded blog page');


</script>


@endsection