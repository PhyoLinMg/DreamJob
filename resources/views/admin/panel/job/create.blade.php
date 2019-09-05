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

		<form action="{{ route('job.store') }}" method="post">
			@csrf
			<div class="form-group">
				<label for="" class="white">Post</label>
				<input class="form-control" name="post" id="" type="text" required/>
				<small id="" class="form-text text-muted">Please enter the post</small>
			</div>
			
			<div class="form-group">
				<label for="" class="white">Salary</label>
				<input class="form-control" name="salary" id="" type="text" required/>
				<small id="" class="form-text text-muted">Please enter the salary</small>
			</div>
			<div class="form-group">
				<label for="" class="white">Category</label>
				<select name="category" id="" class="form-control">
					<option value="bank">Bank</option>
					<option value="media">Media</option>
					<option value="entertainment">Entertainment</option>
					<option value="food">Food</option>
					<option value="shopping">Shopping</option>
				</select>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
	@endsection