@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		@if (count($job)>0)
			<a href="{{ route('get',['id'=>$job->id]) }}">{{$job[0]->post}}</a>
		@else
			<p>The job you searched is not here.</p>
		@endif
	</div>
</div>

@endsection