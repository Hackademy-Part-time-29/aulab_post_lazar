<div>
<div class="card" style="width: 20rem; height:38rem;">
  <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="Immagine dell'articolo {{$article->title}}">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <h6 class="card-text cardEleH">{{$article->subtitle}}</h6>
    <p class="card-text cardEleH2">{{Str::limit($article->body, 65)}}</p>
    <hr>
    <a href="{{route('article.show', $article)}}" class="btn buttonCard">Leggi l'articolo</a>
    @if($article->category)
    <p class="small text-muted my-2">Categoria: <br>
        <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize fw-bold text-muted">{{$article->category->name}}</a>
        </p>    
        @else
            <p class="small text-muted">Nessuna categoria</p>
        @endif
        <p class="small text-muted"> Autore: <br>
          <a href="{{route('article.byUser', $article->user)}}" class="text-capitalize fw-bold text-muted">{{$article->user->name}}</a>
        </p>
        <p class="small text-muted my-0">
          @foreach ($article->tags as $tag)
          #{{ $tag->name }}
          @endforeach
          
        </p>
        <p class="card-subtitle text-muted fst-italic small">
          Tempo di lettura {{$article->readDuration()}} min.
        </p>
  </div>

</div>
</div>