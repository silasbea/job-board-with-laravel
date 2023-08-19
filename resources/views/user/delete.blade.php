@extends('layouts.user')
@section('logged')

@include('includes.user_dash')        
             
@stop


@section('deletepost')

<p class='msg'>{{ @$msg }}</p>
@foreach($jobs as $job) 

{!! Form::open(array('url' => '/user/delete/'.$job->id, 'action' => 'pagesController@deletePost') ) !!}
<ul>

<li><h3>Job Title</h3></li>  
<li>{!! $job->title !!}</li>

<li><h3>Location</h3></li>   
<li>{!! $job->location !!}</li>
 
<li><h3>Application URL</h3></li>   
<li>{!! $job->url !!}</li>
      
<li><h3>Short Description</h3></li>  
<li>{!! $job->short !!}</textarea></li>   <li><br /></li> 
    
  
<li>{!! Form::submit('Delete Post',array('class' => 'button')) !!}</li>

@endforeach 
</ul>
{!! Form::close() !!}  

@stop

