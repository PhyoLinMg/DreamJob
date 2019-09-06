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
			<li class="breadcrumb-item active">Edit</li>
		</ol>

		<!-- Page Content -->

		<form action="{{ route('job.update',['job'=>$jj]) }}" method="post">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="" class="white">Post</label>
				<input type="text" class="form-control" name="post" value="{{$jj->post}}" required>
				<small id="" class="form-text text-muted">Please enter post</small>
			</div>
			<div class="form-group">
				<label for="" class="white">Salary</label>
				<input class="form-control" name="address" value="{{$jj->salary}}" id="" type="text" required/>
				<small id="" class="form-text text-muted">Please enter the salary</small>
			</div>
			
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>

	</div>
	@endsection