
<!DOCTYPE html>
<html lang="en">


@include('partials._head')

@include('partials._stylesheets')

 <body>
 
 @include('partials._nav')

  <!--   end of navbar -->


<div class="container">


  @yield('content')


  @include('partials._footer')





</div> <!-- end of container-->

@include('partials._javascript')

@yield('scripts')

 </body>
</html>


