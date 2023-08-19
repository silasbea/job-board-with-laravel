@extends('layouts.home')

@section('listing')
<ul class="listing">
@foreach($jobs as $job)


                <li>
                    <table class="listing">
                        <tbody>
                        <tr><td class="em">{{ $job->title }}</td></tr>
                        <tr><td class="apad">{{ $job->fname }}</td></tr>
                        <td class="apad">{{ $job->location }}</td></tr>
                    <tr><td class="details">{{ $job->short }}</td></tr>
                    <tr><td>Deadline: {{ $job->finish }}</td><td><a href="/single/{{$job->id}}">Apply</a></td></tr>

                     </tbody>
                    </table>
                </li>

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
