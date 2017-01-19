

  <!--   end of navbar -->
  @extends('main')

  @section('title','|Homepage')


  @section('stylesheets')
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


  @endsection

  @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
		     <div class="jumbotron">
		        <h1>Welcome to my Blog!</h1>
		     <p class="lead">Thanks to my visiting my site</p>
		     <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
		    </div>
        </div>
     </div>  <!-- end of header row-->



     <div class="row">
        <div class="col-md-8">
        @foreach($posts as $post)
         <div class="post">
            

             <h3>{{ $post->title }}</h3>
             <p>{{ substr(strip_tags($post->body),0,300) }} {{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
             <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
          </div>
         
          @endforeach

   </div>


         

         <div class="col-md-3 col-md-offset-1">
         	<h2>Sidebar</h2>
         </div>

</div>

     

</div> <!-- end of container-->

@endsection


@section('scripts')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
confirm('i loaded page');


</script>


@endsection