@extends('admin.layout.masteradmin')


@section('title')

<title>Create Job</title>
@endsection

@section('content')
<div id="content-wrapper" class="black">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb black">
			<li class="breadcrumb-item">
				<a href="/admin">Dashboard</a>
			</li>
			<li class="breadcrumb-item">
				<a href="/job">Job</a>
			</li>
			<li class="breadcrumb-item active">Create</li>
		</ol>

		<!-- Page Content -->
		<form action="{{ route('company.store') }}" method="post">
			@csrf
			<div class="form-group">
				<label for="" class="white">Name</label>
				<input class="form-control" name="name" id="" type="text" required/>
				<small id="" class="form-text text-muted">Please enter name</small>
			</div>
			
			<div class="form-group">
				<label for="" class="white">Address</label>
				<input class="form-control" name="address" id="" type="text" required/>
				<small id="" class="form-text text-muted">Please enter the address</small>
			</div>

			<div class="form-group">
				<label for="" class="white">Description</label>
				<input class="form-control" name="description" id="" type="textarea" required/>
				<small id="" class="form-text text-muted">Please enter description</small>
			</div>

			<div class="form-group">
				<label for="" class="white">Number of jobs</label>
				<input class="form-control" name="no_of_jobs" id="" type="text" required/>
				<small id="" class="form-text text-muted">Please enter the total number of jobs</small>
			</div>

			<div class="form-group">
				
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
		{{-- <form action="{{ route('company.store') }}" method="post">
			@csrf
			<input type="text" name="name"><br>
			<input type="text" name="address"><br>
			<input type="textarea" name="description"><br>
			<input type="text" name="no_of_jobs"><br>
			<input type="submit">
		</form> --}}

	</div>
	@endsection