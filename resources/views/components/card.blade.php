<div>
<div class="card" style="width: 18rem;">
  <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <h6 class="card-text">{{$article->subtitle}}</h6>
    <p class="card-text">{{Str::limit($article->body, 33)}}</p>
    <a href="{{route('article.show', $article)}}" class="btn btn-primary">Leggi l'articolo</a>
    <p class="small text-muted my-2">Categoria: <br>
        <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize fw-bold text-muted">{{$article->category->name}}</a>
        </p>
        <p class="small text-muted"> Autore: <br>
          <a href="{{route('article.byUser', $article->user)}}" class="text-capitalize fw-bold text-muted">{{$article->user->name}}</a>
        </p>
        <p class="small text-muted my-0">
          @foreach ($article->tags as $tag)
          #{{ $tag->name }}
          @endforeach
        </p>
  </div>

</div>
</div>