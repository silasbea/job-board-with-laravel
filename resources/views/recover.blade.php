@extends('layouts.signup')
@section('recover')



{!! Form::open(array('action' => 'pagesController@recoverPass'))  !!}
                               <ul class="sign">
                                <li><p class='msg' style="position:relative; left:-6px;">{{ @$msg }}</p></li>

                                <li><h4>Forgot Password</h4></td></tr>
                                <li><input type='text' name='user' style='height:28px;width:255px;' placeholder="Username" required="required" /></li>
                                <li><input type='text' name='email' style='height:28px;width:255px;' placeholder="e-mail address" required="required" /></li>
                                <li><input type='password' name='secret' style='height:28px;width:255px;' placeholder="Secret Passcode" required="required" /></li>


                                <li><button type="submit" name="submit" style="margin-top: 3px">Recover Pass</button> </li>

                               <li><p style="color: snow; margin-top: 10px">Have an account? <a href="/site/signin">Sign In!</a></p></li>





                            </ul>
                        {!! Form::close() !!}
@stop
