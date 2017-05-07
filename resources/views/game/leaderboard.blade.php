@extends('layouts.app')

@section('content')

<div class="container">
	<div class="panel panel-default">
		<div class="lead panel-heading text-center"><strong>TOP 10 GOATs</strong></div>
		<div class="text-center">
		<table class="table table-hover">
			<div class="text-center"><thead>
							<th></th>
							<th>ELO</th>
							<th>Won</th>
							<th>Lost</th>
							<th>By</th>
						</thead></div>
			<tbody>
				@foreach($top_10 as $player)
					<tr>
						{{-- <td><img src="{{$player->getThumbnail()}}"></img></td> --}}
						<td>
							<div class="row">
								<img class="col-sm-12 col-md-4" src="{{$player->getThumbnail()}}">
								<div class="col-sm-12-col-md-4">{{$player->title}}</div>
							</div>
						</td>
						<td>{{$player->elo}}</td>
						<td>{{$player->wins}}</td>
						<td>{{$player->losses}}</td>
						<td>{{$player->user->name}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		</div>
	</div>
</div>

@endsection