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
				<a href="/company">company</a>
			</li>
			<li class="breadcrumb-item active">Index</li>
		</ol>
		
		<table class="table table-dark">
			<thead>
				<tr>
					<td>Name</td>
					<td>Address</td>
					<td>Number of Jobs</td>
					<td></td>
					<td></td>
				</tr>
			</thead>
		
		
		<tbody>
			@foreach($companies as $company)
			<tr>
				<td>{{$company->name}}</td>
				<td>{{$company->address}}</td>
				<td><a href="{{ route('company.edit',['id'=>$company->id]) }}" class="btn btn-primary">Edit</a></td>
				<td>
					<form id = "deleteform{{$company->id}}" action="{{route('company.destroy',$company->id)}}" method="post">
						@csrf
						<input type="hidden" name="_method" value="delete">
					</form>
					<button onclick="confirm({{$company->id}})" class="btn btn-danger">Delete</button>
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