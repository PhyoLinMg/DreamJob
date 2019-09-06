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
				<a href="/company">Company</a>
			</li>
			<li class="breadcrumb-item active">Edit</li>
		</ol>

		<!-- Page Content -->
		<form action="{{ route('company.update',['company'=>$jj]) }}" method="post">
			@csrf
			@method('PUT')

			<div class="form-group">
				<label for="" class="white">Name</label>
				<input class="form-control" name="name" id="" type="text" value="{{$jj->name}}" required/>
				<small id="" class="form-text text-muted">Please enter name</small>
			</div>
			
			<div class="form-group">
				<label for="" class="white">Address</label>
				<input class="form-control" name="address" value="{{$jj->address}}" id="" type="text" required/>
				<small id="" class="form-text text-muted">Please enter the address</small>
			</div>

			<div class="form-group">
				<label for="" class="white">Description</label>
				<input class="form-control" name="description" id="" type="textarea" value="{{$jj->description}}" required/>
				<small id="" class="form-text text-muted">Please enter description</small>
			</div>

			<div class="form-group">
				<label for="" class="white">Number of jobs</label>
				<input class="form-control" value="{{$jj->number_of_jobs}}" name="no_of_jobs" id="" type="text" required/>
				<small id="" class="form-text text-muted">Please enter the total number of jobs</small>
			</div>

			<div class="form-group">
				
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>

	</div>
	@endsection