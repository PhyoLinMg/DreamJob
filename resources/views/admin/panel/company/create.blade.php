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
			<input type="text" name="name"><br>
			<input type="text" name="address"><br>
			<input type="textarea" name="description"><br>
			<input type="text" name="no_of_jobs"><br>
			<input type="submit">
		</form>

	</div>
	@endsection