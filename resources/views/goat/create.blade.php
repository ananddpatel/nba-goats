@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Submit a GOAT</div>
	                <div class="panel-body">
	                <form method="POST" action="/submit">
	                	{{csrf_field()}}
						<div class="input-group">
						  <span class="input-group-addon">Title</span>
						  <input type="text" name="title" class="form-control" >
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Imgur URL</span>
						  <input type="text" name="url" class="form-control" >
						</div>
						<br>
						<div class="text-center"><button class="btn btn-success">Submit</button></div>
					</form>
					<br>
					@include('layouts.errors')
            </div>
        </div>
    </div>
</div>


@endsection