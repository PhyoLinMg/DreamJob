@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<ol>
				@foreach ($jobs as $job)
					<li><a href="{{ route('get',['id'=>$job->id]) }}">{{$job->post}}</a></li>
				@endforeach
			</ol>
		</div>
	</div>
	</div
	@endsection