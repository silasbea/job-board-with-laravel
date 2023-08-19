@extends('layouts.user')
@section('logged')

@include('includes.user_dash')

@stop


@section('editpost')

<p class='msg'>{{ @$msg }}</p>
@foreach($jobs as $job)

{!! Form::open(array('url' => '/user/edit/'.$job->id, 'action' => 'pagesController@editPost') ) !!}
<ul>

<li>Job Title</li>
<li>{!! Form::text('title',$job->title,array('required','class' => 'ent' )) !!}</li>

<li>Location</li>
<li>{!! Form::text('location',$job->location,array('required','class' => 'ent' )) !!}</li>

<li>Application URL</li>
<li>{!! Form::text('url',$job->url,array('required','class' => 'ent')) !!}</li>

<li>Short Description</li>
<li>{!! Form::textarea('short',$job->short,array('required','class' => 'textarea' )) !!}</textarea></li>

<li>Full Job Description</li>
<li>{!! Form::textarea('post',$job->post,array('required','id' => 'textarea','class' => 'textarea' )) !!}</li>

<li>{!! Form::submit('Edit Post',array('class' => 'button')) !!}</li>

@endforeach
</ul>
{!! Form::close() !!}

@stop
