@extends('layouts.user')
@section('logged')

@include('includes.user_dash')        
             
@stop


@section('posts')


<table class="table">
    <tr><th>Job Title</th> <th>Timestamp</th></tr>
    <tbody id='go'>
        
   @foreach($jobs as $job)
    
    <tr class="bolder"><td>{{ $job->title }}</td><td>{{ $job->timestamp }}</td>
        
    <td><a href="/user/edit/{{$job->id}}"> Edit </a></td>
    <td><a href='/user/delete/{{$job->id}}'> Delete </a></td>
    </tr>
   
    @endforeach
        
</tbody></table> 

@stop

