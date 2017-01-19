



@foreach($a as $user)
<h1>{{$user->name}}</h1>

   @foreach($user->tarticles as $t)
     {{$t->title}}


@endforeach

@endforeach






