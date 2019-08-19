@extends('admin.layout.masteradmin')


@section('title')

<title>Admin Panel</title>
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
		<table class="table table-dark">
			<thead>
				<tr>
					<td>Job</td>
					<td>Email</td>
					<td></td>
				</tr>
				<tbody>
					@foreach ($jobseekers as $jobseeker)
					<tr>
						<td>{{App\Job::find($jobseeker->job_id)->post}}</td>
						<td>{{$jobseeker->email}}</td>
						<td><a href="{{ route('download',['id'=>$jobseeker->id]) }}" class="btn btn-primary">Download</a></td>
					</tr>
					@endforeach
				</tbody>
			</thead>
		</table>
		<!-- Page Content -->
		

	</div>
	@endsection