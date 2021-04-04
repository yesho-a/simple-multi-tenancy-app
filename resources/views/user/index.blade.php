


@extends('layouts.app')
@section('content')

<h1><strong>User-{{tenant('id')}}</strong></h1>
@foreach ($user as $post)
{{$post->name}} - {{$post->email}}
<br>

@endforeach
@endsection
