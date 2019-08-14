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
		</ol>

		<!-- Page Content -->
		<form action="{{ route('job.store') }}" method="post">
			@csrf
			<input type="text" name="post">
			<input type="text" name="salary">
			<input type="submit">
		</form>

	</div>
	@endsection