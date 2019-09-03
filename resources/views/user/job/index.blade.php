@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@foreach ($jobs as $job)
			<div class="card card-hover">
				<div class="card-body">
					<div style="float: left;">
						
						<h3 class="card-title">{{$job->post}}</h3>
						<p class="card-text">Ur job</p>
					</div>
					<div class="reveal" style="float:left;  margin-left: 100px">
						<a href="{{ route('get',['id'=>$job->id]) }}" class="btn btn-success">Details</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	</div
	@endsection