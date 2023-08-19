@extends('layouts.single')

@section('listing')
<ul class="listing">
@foreach($jobs as $job)

               <li style="margin-top: 20px;"><b>{{ $job->title }}</b></li><br />
                        <li class="">{{ $job->fname }}</li>
                        <li class="">{{ $job->location }}</li><br />
                        <li class="details">{!! $job->post !!}</li>


              @unless($job->url == '')

              <li><a href="{{ $job->url }}" target="_blank"><button style="margin-top: 15px;">Apply</button></a></li>
              @endunless

@endforeach
</ul>

@stop


@section('cates')
<ul class="cates">
@foreach($cates as $cate)

 <li><a href="/cate/{{ $cate->cate }}"> {{ $cate->cate }} </a></li>

@endforeach
</ul>

@stop
