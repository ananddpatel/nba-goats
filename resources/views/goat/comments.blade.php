@extends('layouts.app')

@section('content')

<div class="container">
	<div class="panel panel-default">
		<div class="row">
		{{-- <div class="panel-heading text-center"><strong>{{$image->title}}</strong></div> --}}
			<div class="col-xs-12 col-md-4 col-md-offset-4">
				<div class="thumbnail">
					<div class="img-wrapper">
						<img src="{{$image->url}}">
					</div>
				</div>
				<table class="table table-condensed table-bordered text-center">
					<th colspan="2"><div class="text-center">{{$image->title}}</div></th>
					<tbody>
						<tr>
							<td><strong>ELO</strong></td>
							<td><strong>{{$image->elo}}</strong></td>
						</tr>
						<tr>
							<td><strong>Won</strong></td>
							<td><strong>{{$image->wins}}</strong></td>
						</tr>
						<tr>
							<td><strong>Lost</strong></td>
							<td><strong>{{$image->losses}}</strong></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		@if(Auth::check())
		<div class="card" style="margin-left: 25px; margin-right: 25px">
			<div class="card-block">
				<form method="POST" action="/comments/{{$image->id}}">
					{{csrf_field()}}
					<div class="form-group">
						<textarea class="form-control" name="body" placeholder="Your comment here" required></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
			@if(count($errors))
				@include('layouts.errors')
			@endif
		</div>
		@else
			<div class="text-center"><a href="/login" class="btn btn-primary">Sign-in</a> to comment</div>
		@endif
		<hr>

		@if(count($image->comments))
			<div class="comments" style="margin-left: 25px; margin-right: 25px">
				<h4>Comments</h4>
				<ul class="list-group">
					@foreach($image->comments as $comment)
						<li class="list-group-item">
							<p><strong>{{$comment->user->name}}: </strong>{{$comment->body}}</p>
							<p class="ml-auto">{{$comment->created_at->diffForHumans()}}</p>
						</li>
					@endforeach
				</ul>
			</div>
		@endif
		
	</div>
</div>

@endsection