@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		@foreach($companies as $company)
		<div class="col-md-3" style="margin-left:10px;">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
				</div>
			</div>
		</div>
		@endforeach
		
	</div>
</div>

@endsection