<h1>{{$users->name}}</h1>
  {{$users->email}}
<h4>{{$users->name}}</h4>


<img src="{{$users->getProfile->pic}}">

<h1>{{$users->getProfile->about}}</h1>

 <p>blog Witten</p>
@foreach($users->getWritten as $blog)
   <a href="/readerblog/{{$blog->id}}">{{$blog->title}}</a>

   @endforeach





<br/>
   <p>blog Read</p>

  @foreach($users->getRead as $blog)
   <a href="/readerblog/{{$blog->id}}">{{$blog->title}}</a>

   @endforeach