{{$blogs->title}}

{{$blogs->getAuthor->name}}

<p>The blog has been read by:</p>

@foreach($blogs->getReader as $read)
  <a href="/profile/{{$read->id}}">{{$read->name}}</a><br/>

  @endforeach
