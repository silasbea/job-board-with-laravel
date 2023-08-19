@extends('layouts.user')
@section('logged')

@include('includes.user_dash')

@stop

@section('create_cate')

{!! Form::open(array('action' => 'App\Http\Controllers\pagesController@createCate'))  !!}   
<ul class="">  
<li><span class='msg'>{{ @$msg }}</span></li>

<li><div class="input-group-lg">
<label>New Category</label>
</div>
</li>


<li><div class="input-group-lg">
  <input type="text" name="cate" class="form-control" placeholder="Category">
 </div>
</li>

 
 <li><div class="input-group-lg">
<button type="submit" name="submit">Create</button> 
</div>
</li>


</ul>

{!! Form::close() !!}

@stop





