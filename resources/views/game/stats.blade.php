<div class="row">
	<div class="col-xs-6 col-md-4 col-md-offset-2">
		<table class="table table-condensed table-bordered text-center">
			<th colspan="2"><div class="text-center">Winner</div></th>
			<tbody>
				<tr>
					<td><strong>Gain</strong></td>
					<td><strong>+{{$data['winner']['change']}}</strong></td>
				</tr>
				<tr>
					<td><strong>ELO</strong></td>
					<td><strong>{{$data['winner']['updated']}}</strong></td>
				</tr>
				<tr>
					<td><strong>Won</strong></td>
					<td><strong>{{$winner->wins}}</strong></td>
				</tr>
				<tr>
					<td><strong>Lost</strong></td>
					<td><strong>{{$winner->losses}}</strong></td>
				</tr>
			</tbody>
		</table>
		<div class="text-center"><a href="/comments/{{$winner->id}}" class="btn btn-primary btn-sm">Comments</a></div>
	</div>
	<div class="col-xs-6 col-md-4">
		<table class="table table-condensed table-bordered text-center">
			<th colspan="2"><div class="text-center">Loser</div></th>
			<tbody>
				<tr>
					<td><strong>Loss</strong></td>
					<td><strong>{{$data['loser']['change']}}</strong></td>
				</tr>
				<tr>
					<td><strong>ELO</strong></td>
					<td><strong>{{$data['loser']['updated']}}</strong></td>
				</tr>
				<tr>
					<td><strong>Won</strong></td>
					<td><strong>{{$loser->wins}}</strong></td>
				</tr>
				<tr>
					<td><strong>Lost</strong></td>
					<td><strong>{{$loser->losses}}</strong></td>
				</tr>
			</tbody>
		</table>
		<div class="text-center"><a href="/comments/{{$loser->id}}" class="btn btn-primary btn-sm">Comments</a></div>
	</div>
</div>