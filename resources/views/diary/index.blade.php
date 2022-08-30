@extends('layout')

@section('content')
<div class="container">
    <div class="article">
        @foreach($diaries as $diary)
        <div class="title">title：　<a href="">{{ $diary->title }}</a></div>
        <div class="title">content：　{{ $diary->content }}</content>
        </div>
        <div class="title">updated：　{{ $diary->updated_at }}</a></div>
        @endforeach
    </div>
</div>
@endsection