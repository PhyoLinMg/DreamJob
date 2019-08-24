@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		@foreach($companies as $company)
		<div class="col-md-3" style="margin-left:10px;">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">{{$company->name}}</h5>
					<h6 class="card-subtitle mb-2 text-muted">{{$company->address}}</h6>
					<p class="card-text">{{$company->description}}</p>
					@foreach($company->jobs as $job)
					<a href="{{ route('get',['id'=>$job->id]) }}" class="card-link">{{$job->post}}</a>
					@endforeach
				</div>
			</div>
		</div>
		@endforeach
		
	</div>
</div>

@endsection