



@foreach ($pusers as $puser)
   Name  {{$puser->name}}

 @foreach ($puser->mesages as $mg)
  Comment {{$mg->text_message}} <br/>

  @endforeach
@endforeach


<br/><br/>

@foreach ($pusers as $puser)
     {{$puser->name}}
  // access user properties here
  @foreach ($puser->articles as $article)
   {{$article->body}} 

 
        {{$puser->address}}

         {{$article->title}} <br/>

  @endforeach
@endforeach





 



