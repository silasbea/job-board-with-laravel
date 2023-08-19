@extends('layouts.signup')
@section('signup')



                     {!! Form::open(array('action' => 'App\Http\Controllers\pagesController@signUp'))  !!}

                     <ul class="sign">


                   <li><h4>Sign Up</h4></li>
                   <li><p class='msg' style="position:relative; left:-6px;">{{ @$msg }}</p></li>
                   <li><input type='text' name='user' placeholder="username" style='height:28px;width:255px;' required="required" /></li>
                   <li><input type='email' name='email' placeholder="e-mail" style='height:28px;width:255px;' required="required" /></li>
                   <li>
                                        <select name='who' style="width:270px" class=" select ent" required="required">
                                        <option selected value=''> ----
                                        <option>I am a Creative</option>
                                        <option>I want to hire</option>

                                    </select>
                                    </li>

                  <tr><td><button type="submit" name="submit" style="margin-top: 3px">Sign Up</button> </td></tr>

                  <tr><td><p style="color: snow; margin-top: 10px">Have an account? <a href="/site/signin">Sign In!</a></p></td></tr>



                  </ul>

                        {!! Form::close() !!}


@stop
