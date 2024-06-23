<x-layout>
<p class="category-pad" class="fs-5"> Categoria:
        <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize fw-bold text-muted">{{$article->category->name}}</a>
    </p>
    <div>
        <div class="article-ele" class="d-flex justify-content-center">
    <img src="{{Storage::url($article->image)}}" alt="" class="imageLimit">
    </div>
    <h1 class="article-ele">{{$article->title}}</h1>
    <h3 class="text-center">{{$article->subtitle}}</h3>
    <p class="article-ele">{{$article->body}}</p>
    </div>
   
</x-layout>