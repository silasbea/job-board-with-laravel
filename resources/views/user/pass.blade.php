@extends('layouts.user')
@section('logged')

@include('includes.user_dash')        
           
    
@stop	

@section('pass')

{!! Form::open(array('action' => 'App\Http\Controllers\pagesController@changePass'))  !!}
<ul>
<li><p class="msg">{{ @$msg }} </p></li>

<li><label>New Password</label></li>
<li><input type="password" name="newpass" class="ent" required="" /></li>
<li><button type="submit" name="submit">Change</button></li>
</ul>
{!! Form::close() !!}     
    
@stop	

