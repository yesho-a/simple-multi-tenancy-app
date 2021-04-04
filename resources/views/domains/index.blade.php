<h1>List of domains</h1>
@foreach ($tenant as $post)
{{$post->id}} - {{ $post->domain}} - {{ $post->tenant_id}}
<br>

@endforeach