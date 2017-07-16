@extends('layouts.app')

@section('content')
<h1>Messages</h1>

@if( count( $messages ) > 0 )
	@foreach( $messages as $message )
		<ul class="list-group">
			<li class="list-group-item">
				Name: {{$message->name}}
			</li>
			<li class="list-group-item">
				Name: {{$message->email}}
			</li>
			<li class="list-group-item">
				Name: {{$message->message}}
			</li>
		</ul>
	@endforeach;
@endif;
<p>
	
</p>
@endsection


@section('sidebar')
@parent
<p> This is appended to the sidebar. </p>
@endsection

