@extends('layouts.user')
@section('logged')

@include('includes.user_dash')        
             
@stop


@section('user_bio')

<p class='msg'>{{ @$msg }}</p>           
{!! Form::open(array('action' => 'App\Http\Controllers\pagesController@updateBio'))  !!}
<ul class="">

<li>{!! Form::text('full',$details->fullname, array('required','class' => 'ent', 'placeholder' => 'Company name' )) !!}</li>
<li>{!! Form::text('email',$details->email,array('required','class' => 'ent', 'placeholder' => 'email address' )) !!}</li>
<li>{!! Form::text('phone',$details->phone, array('required','class' => 'ent', 'placeholder' => 'Phone no')) !!}</li>

<li>{!! Form::submit('Update Bio',['class' => 'button']) !!}</li>

</ul>

{!! Form::close() !!}  

@stop

