<div class="row">
    @if(count(Auth::user()->images))
    @foreach(Auth::user()->images as $image)
    <div class="col-xs-6 col-md-4 col-lg-3">
         <div class="text-center">
            <a href="{{$image->url}}">
                <img src="{{$image->getThumbnail()}}">
            </a>
        </div>
        <div class="text-center"><strong>{{$image->title}}</strong></div>
        <div class="text-center">
            ELO: {{$image->elo}} | W: {{$image->wins}} | L: {{$image->losses}}
        </div>
        <div class="text-center">
            <form method="POST" action="/submit/{{$image->id}}">
                {{ method_field('DELETE') }}
                {{csrf_field()}}
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    @else
    <div class="text-center">
        You don't have any GOATs.
        <a href="/submit">Submit one here.</a>
    </div>
    @endif
</div>