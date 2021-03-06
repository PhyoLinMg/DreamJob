@extends('admin.layout.masteradmin')


@section('title')
<title>Job</title>
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
				<a href="/admin/job">Job</a>
			</li>
			<li class="breadcrumb-item active">Index</li>
		</ol>
		
		<table class="table table-dark">
			<thead>
				<tr>
					<td>Post</td>
					<td>Salary</td>
					<td></td>
					<td></td>
				</tr>
			</thead>
		
		
		<tbody>
			@foreach($jobs as $job)
			<tr>
				<td>{{$job->post}}</td>
				<td>{{$job->salary}}</td>
				<td><a href="{{ route('job.edit',['id'=>$job->id]) }}" class="btn btn-primary">Edit</a></td>
				<td>
					<form id = "deleteform{{$job->id}}" action="{{route('job.destroy',$job->id)}}" method="post">
						@csrf
						<input type="hidden" name="_method" value="delete">
					</form>
					<button onclick="confirm({{$job->id}})" class="btn btn-danger">Delete</button>
				</td>
			</tr>
			@endforeach
		</tbody>
</table>
	</div>

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
	@endsection