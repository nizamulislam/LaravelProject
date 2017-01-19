
  @extends('main')

   @section('title','|Contactpage')

  @section('stylesheets')
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


  @endsection



  @section('content')


  <!--   end of navbar -->

 <div class="container">
    
    <div class="row">

       <div class="col-md-12">
       <h3>Contact me</h3>
          <hr/>
          <form action="{{ url('contact')}}" method="POST">
               {{ csrf_field() }}
            <div class="form-group">
               <label name="email">Email</label>
               <input id="email" name="email" class="form-control">


            </div>



             <div class="form-group">
               <label name="subject">Subject</label>
               <input id="subject" name="subject" class="form-control">


            </div>




                <div class="form-group">
               <label name="message">Message</label>
               <textarea id="message" name="message" class="form-control">Type your message</textarea>


            </div>


            <input type="submit" value="Send Message" class="btn btn-success">

          </form>

        </div>



 </div>


 <!-- end of container -->
@endsection


@section('scripts')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
confirm('i loaded contact page');


</script>


@endsection