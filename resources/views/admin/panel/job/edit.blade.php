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
		<form action="{{ route('job.update',['job'=>$jj]) }}" method="post">
			@csrf
			@method('PUT')
			<input type="text" name="post" value="{{$jj->post}}">
			<input type="text" name="salary" value="{{$jj->salary}}">
			<input type="submit">
		</form>

	</div>
	@endsection