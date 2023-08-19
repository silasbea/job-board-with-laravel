@extends('layouts.user')
@section('logged')

@include('includes.user_dash')

@stop


@section('post')

<p class='msg'>{{ @$msg }}</p>
{!! Form::open(array('action' => 'App\Http\Controllers\pagesController@post'))  !!}
<ul>

 <li>Post Under</li>

 <li><select name="cate" class="ent select">

    @foreach ($cates as $cate) {
    <option>{{ $cate->cate }}</option>
    @endforeach

    </select></li>


<li>Job Title</li>

<li>{!! Form::text('title',null,array('required','class' => 'ent', 'placeholder' => 'Web Developer' )) !!}</li>

 <li>Location</li>
 <li>{!! Form::text('location',null,array('required','class' => 'ent', 'placeholder' => 'Anywhere' )) !!}</li>

 <li>Application URL</li>
 <li>{!! Form::text('url',null,array('required','class' => 'ent', 'placeholder' => 'http://example.com/apply' )) !!}</li>

<li>Short Description</li>
<li>{!! Form::textarea('short',null,array('required','class' => 'textarea', 'placeholder' => 'Web Developer. Remote. Anywhere' )) !!}</textarea></li>

<li>Full Job Description</li>
<li>{!! Form::textarea('post',null,array('required','class' => 'textarea','id' => 'textarea', 'placeholder' => 'Full job details here' )) !!}</li>

<li>{!! Form::submit('Post Work',array('class' => 'button')) !!}</li>

</ul>
{!! Form::close() !!}

@stop
