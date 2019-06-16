@extends('layout')

@section('title', 'About')

@section('content')
	<h1 class="text-success">{{$page->title}}</h1>
	<p>{{$page->content}}</p>
	<p>about-us.blade.php</p>
@endsection
