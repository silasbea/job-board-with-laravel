@extends('layouts.user')
@section('logged')

@include('includes.user_dash')

@stop


@section('profile')

<p class='msg'>{{ @$msg }}</p>
{!! Form::open(array('action' => 'pagesController@updateProfile'))  !!}
<ul>

<li>Professional Title</li>

<li>{!! Form::text('title',$bio->cate,array('required','class' => 'ent', 'placeholder' => 'Web Developer' )) !!}</li>


<li>Fullname</li>

<li>{!! Form::text('fname',$bio->fullname,array('required','class' => 'ent', 'placeholder' => 'John Doe' )) !!}</li>

 <li>e-mail</li>
 <li>{!! Form::text('email',$bio->email,array('required','class' => 'ent', 'placeholder' => 'me@aol.com' )) !!}</li>

<li>About me</li>
<li>{!! Form::textarea('me',$bio->me,array('required','class' => 'textarea', 'id' => 'textarea', 'placeholder' => 'Professional Bio' )) !!}</textarea></li>

<li style="margin-top: 5px;">Social </li>
<li>{!! Form::text('fb',$bio->fb,array('required','class' => 'ent', 'placeholder' => 'Facebook ID' )) !!}</li>
<li>{!! Form::text('twitter',$bio->twitter,array('required','class' => 'ent', 'placeholder' => 'twitter' )) !!}</li>
<li>{!! Form::text('ln',$bio->linkedin,array('required','class' => 'ent', 'placeholder' => 'in' )) !!}</li>

<li>{!! Form::submit('Update Profile',array('class' => 'button')) !!}</li>

</ul>
{!! Form::close() !!}

@stop
