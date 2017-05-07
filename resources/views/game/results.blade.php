@extends('layouts.app')

@section('content')

	<script type="text/javascript">
		window.setTimeout(function() {
			window.location.href = '/play';
		}, 5000);
	</script>

	<div class="container">
		<div class="panel panel-default">
			<div class="row">

				<div class="col-xs-6 col-md-4 col-md-offset-2">
					<div class="thumbnail">
						<div class="img-wrapper">
							<img name="image" src="{{$winner->url}}">
						</div>
					</div>
					<div class="lead text-uppercase text-center"><strong>{{$winner->title}}</strong></div>
				</div>

				<!-- item -->
				<div class="col-xs-6 col-md-4">
					<div class="thumbnail">
						<div class="img-wrapper">
							<img class="img-fluid" name="image" src="{{$loser->url}}">
						</div>
					</div>
					<div class="lead text-uppercase text-center"><strong>{{$loser->title}}</strong></div>
				</div>
			</div>

			@include('game.stats')
			
			<div class="text-center"><a href="/play" style="margin-bottom: 15px;" class="btn btn-primary btn-lg">Next Game</a></div>
		</div>
	</div>

@endsection