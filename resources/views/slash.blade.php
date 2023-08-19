@extends('layouts.slash')

@section('avatar')

<ul class="bio">

     <li><img class="bio" src="photos/{{ $me->photo_id }}" /></li><br />
     <li>{{ $me->fullname }}</li><br />
     <li>Facebook: {{ $me->fb }}</li>
     <li>Twitter: {{ $me->twitter }}</li>
     <li>LinkedIn: {{ $me->linkedin }}</li>

</ul>

@stop

@section('me')
<span class="me">
<p style="font-size: 1.1em;"><b>{{ $me->cate }}</b> </p>
<p>
   {{ $me->me }}
</p>
</span>
@stop
