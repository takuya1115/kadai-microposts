@if (Auth::user()->is_favorite($micropost->id)) 
                {{-- お気に入り解除ボタン --}}
        {!! Form::open(['route' => ['microposts.unfavorite', $micropost->id], 'method' => 'delete']) !!}
                {!! Form::submit('unFavorite', ['class' => "btn btn-success btn-sm"]) !!}  
        {!! Form::close() !!}
@else
                {{-- お気に入りボタン --}}
        {!! Form::open(['route' => ['microposts.favorite', $micropost->id]]) !!}
                {!! Form::submit('Favorite', ['class' => "btn-light btn-sm"]) !!}
        {!! Form::close() !!}
@endif
    


