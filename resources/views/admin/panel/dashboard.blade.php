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
			@if (\Auth::user()->role=="company")
			<thead>
				<tr>
					<td>Job</td>
					<td>Email</td>
					<td></td>
				</tr>
			</thead>
			@elseif(\Auth::user()->role=="admin")
			<thead>
				<tr>
					<td>Job Post</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</thead>
			@endif
			<tbody>
				@if (\Auth::user()->role=="company")
				@foreach ($jobseekers as $jobseeker)
				<tr>

					<td>{{App\Job::find($jobseeker->job_id)['post']}}</td>
					<td>{{$jobseeker->email}}</td>
					<td><a href="{{ route('download',['id'=>$jobseeker->id]) }}" class="btn btn-primary">Download</a></td>
					<td>{{$jobseeker->status}}</td>
				</tr>
				@endforeach
				@elseif(\Auth::user()->role=="admin")
				@foreach ($jobs as $job)
				<tr>
					<td>{{$job->post}}</td>
					<td><a href="{{ route('update',['id'=>$job->id]) }}" class="btn btn-success">Approve</a></td>
					<td>
						<form id = "deleteform{{$job->id}}" action="{{route('job.destroy',$job->id)}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="delete">
						</form>
						<button onclick="confirm({{$job->id}})" class="btn btn-danger">Delete</button>
					</td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>
		<!-- Page Content -->
		<script>
		function confirm($id){
			const swal=window.swal;

			swal({
				title: "Are you sure?",
				text: "",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					document.getElementById("deleteform"+$id).submit();

				} else {
					swal("Not Deleted");

				}
			});
		}
	</script>
	</div>
	@endsection