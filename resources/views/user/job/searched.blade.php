@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		@foreach ($jobs as $job)
			<div class="col-md-12">
				<a href="{{ route('get',['id'=>$job->id]) }}">{{$job->post}}</a>
			</div>
		@endforeach
	</div>
</div>

@endsection