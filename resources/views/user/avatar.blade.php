@extends('layouts.user')
@section('logged')

@include('includes.user_dash')

@stop


@section('avatar')

<p class='msg'>{{ @$msg }}</p>
{!! Form::open(array('url' => '/user/avatar/','enctype' => 'multipart/form-data')) !!}
<ul class="">

<li>{!! Form::file('image', array('class' => 'image')) !!}</li>
<li>{!! Form::submit('Attach Avatar',['class' => 'button']) !!}</li>

</ul>

{!! Form::close() !!}

@stop
