<div class="row">
    @if(count(Auth::user()->images))
    @foreach(Auth::user()->images as $image)
    <div class="col-xs-6 col-md-3">
        <img src="{{$image->getThumbnail()}}">
        <div class="text-center"><strong>{{$image->title}}</strong></div>
        <div class="text-center">
        ELO: {{$image->elo}} | WINS: {{$image->wins}}</div>
    </div>
    @endforeach
    @else
    <div class="text-center">
        You don't have any GOATs.
        <a href="/submit">Submit one here.</a>
    </div>
    @endif
</div>