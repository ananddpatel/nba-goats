@extends('layouts.app')

@section('content')

<div class="container">
	<div class="panel panel-default">
	<div class="row">
		<div class="text-center">Hello</div>
		<form id="battle-form" method="POST" action="battle/{{$goats->first()->id}}-{{$goats->last()->id}}">
			{{csrf_field()}}

		<label>
			<input id="image1" type="radio" name="image" value="{{$goats->first()->id}}" onclick="document.getElementById('battle-form').action = 'battle/' + this.value + '-' + document.getElementById('image2').value">
			<img class="img-fluid col-md-6 col-xs-12" name="image" src="{{$goats->first()->url}}">
		</label>
		
		<label>
			<input id="image2" type="radio" name="image" value="{{$goats->last()->id}}" onclick="document.getElementById('battle-form').action = 'battle/' + this.value + '-' + document.getElementById('image1').value">
			<img class="img-fluid col-md-6 col-xs-12" name="image" src="{{$goats->last()->url}}">
		</label>
			<button class="btn btn-primary">Submit</button>
		</form>
	</div>
	</div>
</div>

@endsection