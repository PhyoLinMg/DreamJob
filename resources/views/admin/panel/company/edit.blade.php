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
		<form action="{{ route('company.update',['company'=>$jj]) }}" method="post">
			@csrf
			@method('PUT')
			<input type="text" name="name" value="{{$jj->name}}">
			<input type="text" name="address" value="{{$jj->address}}">
			<input type="textarea" name="description" value="{{$jj->description}}">
			<input type="text" name="no_of_jobs" value="{{$jj->number_of_jobs}}">
			<input type="submit">
		</form>

	</div>
	@endsection