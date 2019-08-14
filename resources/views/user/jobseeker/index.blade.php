@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{ route('save') }}" method="post">
            	@csrf
            	<input type="hidden" name="hidden" value="{{$job_id}}">
            	<input type="text" value="2" name="email">
            	<input type="submit">
            </form>

        </div>
    </div>
</div
@endsection