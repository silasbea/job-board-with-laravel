@extends('layouts.signup')
@section('signin')


{!! Form::open(array('action' => 'App\Http\Controllers\pagesController@signIn'))  !!}

<ul class="sign">
<li><p class='msg' style="position:relative; left:-6px;">{{ @$msg }}</p></li>
<li><input type='text' name='user' placeholder="username" style='height:28px;width:255px;' required="required" /></li>
<li><input type='password' name='pass' placeholder="password" style='height:28px;width:255px;' required="required" /></li>


<li><button type="submit" name="submit" style="margin-top: 3px">Sign in</button> </li>
<li><p style="color: snow; margin-top: 10px">New User? <a href="/site/signup">Sign Up!</a></p></li>
<li><p style="color: snow; margin-top: 10px"><a href="/site/recover">Forgot password?</a></p></li>
</ul>

{!! Form::close() !!}



@stop
