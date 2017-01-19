

@foreach($users as $user)
<h1>{{$user->name}}</h1>

<p><a href="profile/{{$user->id}}">{{$user->email}}</a></p>

@endforeach


