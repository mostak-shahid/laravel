@extends('layout')
@section('title', 'Home')
@section('content')
                <div class="title m-b-md">
                    Laracasts {{$foo}}
                </div>
                <ul>
                    <?php // foreach ($tasks as $task) : ?>
                    @foreach($tasks as $task)
                        <!-- <li><?= $task ?></li> -->
                        <li>{{ $task }}</li>
                    <?php // endforeach; ?>
                    @endforeach
                    @if(@$script)
                        <li>{!!$script!!}</li>
                    @endif
                    @if(@$request)
                        <li>{{$request}}</li>
                    @endif

                </ul>
@endsection