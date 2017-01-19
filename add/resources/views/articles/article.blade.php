@foreach($articles as $at)
Title{{$at->title}}
Name {{$at->puser->name}}
Address {{$at->puser->address}}
<br/>
@endforeach


<br/><br/>




