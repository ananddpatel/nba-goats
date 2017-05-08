@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="panel panel-default">
		<form id="battle-form" method="POST" action="battle/{{$goats->first()->id}}-{{$goats->last()->id}}">
			{{csrf_field()}}
				<div class="row">
					<div class="col-xs-6 col-md-4 col-md-offset-2">
						<div class="thumbnail">
							<div class="img-wrapper">
								<label>
									<input id="image1" type="radio" name="image" value="{{$goats->first()->id}}" onclick="document.getElementById('battle-form').action = 'battle/' + this.value + '-' + document.getElementById('image2').value;">
									{{-- <img name="image" src="{{$goats->first()->url}}"> --}}
									<blockquote class="imgur-embed-pub" lang="en" data-id="jgcOX7o"><a href="//imgur.com/jgcOX7o"></a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>
									{{-- <img name="image" src="{{asset('img/hakeem.jpg')}}" onload="console.log('hello')"> --}}
								</label>
							</div>
						</div>
						<div class="lead text-uppercase text-center"><strong>{{$goats->first()->title}}</strong></div>
					</div>
					<!-- item -->
					<div class="col-xs-6 col-md-4">
						<div class="thumbnail">
							<div class="img-wrapper">
								<label>
									<input id="image2" type="radio" name="image" value="{{$goats->last()->id}}" onclick="document.getElementById('battle-form').action = 'battle/' + this.value + '-' + document.getElementById('image1').value;">
									<img class="img-fluid" name="image" src="{{$goats->last()->url}}">
									{{-- <img class="img-fluid" name="image" src="{{asset('img/hakeem.jpg')}}"> --}}
								</label>
							</div>
						</div>
						<div class="lead text-uppercase text-center"><strong>{{$goats->last()->title}}</strong></div>
					</div>
				</div>
			<div class="text-center"><button style="margin-bottom: 15px;" class="btn btn-primary btn-lg">Submit</button></div>
		</form>
	</div>
	</div>

@endsection