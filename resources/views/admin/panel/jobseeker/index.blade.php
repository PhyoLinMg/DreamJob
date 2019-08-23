@extends('admin.layout.masteradmin')

@section('title')
<title>JobSeeker</title>
@endsection

@section('content')
<div id="content-wrapper" class="black">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb black">
			<li class="breadcrumb-item">
				<a href="/admin">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">JobSeeker Applications</li>
		</ol>
		
		<table class="table table-dark">
			<thead>
				<tr>
					<td>Name</td>
					<td>Address</td>
					<td>Email</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</thead>
			<tbody>
				@foreach ($jobseekers as $jobseeker)
				<tr>
					<td>{{$jobseeker->name}}</td>
					<td>{{$jobseeker->address}}</td>
					<td>{{$jobseeker->email}}</td>
					<td><a href="{{ route('download',['id'=>$jobseeker->id]) }}" class="btn btn-primary">Download</a></td>
					<td><a href="{{ route('updateStatus',['id'=>$jobseeker->id]) }}" class="btn btn-success">Hire</a></td>
					<td><a href="{{ route('remove',['id'=>$jobseeker->id]) }}" class="btn btn-danger">Remove</a></td>
				</tr>
				@endforeach
			</tbody>

			<tbody>

			</tbody>
		</table>
	</div>

	@endsection