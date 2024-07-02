<x-layout>
    @if($article->category)
<p class="category-pad" class="fs-5"> Categoria:
        <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize fw-bold text-muted">{{$article->category->name}}</a>
    </p>
    @else
    <p class="fs-5">Nessuna categoria</p>
    @endif
    <p class="small text-muted my-0">
        @foreach ($article->tags as $tag)
        #{{ $tag->name }}
        @endforeach
      </p>
    <div>
        <div class="article-ele" class="d-flex justify-content-center">
    <img src="{{Storage::url($article->image)}}" alt="" class="imageLimit">
    </div>
    <h1 class="article-ele">{{$article->title}}</h1>
    <h3 class="text-center">{{$article->subtitle}}</h3>
    <p class="article-ele">{{$article->body}}</p>
    </div>
    @if(Auth::user() && Auth::user()->revisor)
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-evenly">
                <form action="{{route('revisor.acceptArticle',$article)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Accetta l'articolo</button>
                </form>
                <form action="{{route('revisor.rejectArticle',$article)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Rifiuta l'articolo</button>
                </form>
            </div>
        </div>
    </div>
    @endif
   
</x-layout>