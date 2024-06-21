<x-layout>
<p class="fs-5"> Categoria:
        <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize fw-bold text-muted">{{$article->category->name}}</a>

    </p>
    <img src="{{Storage::url($article->image)}}" alt="" class="imageLimit">
    <h1>{{$article->title}}</h1>
    <h3>{{$article->subtitle}}</h3>
    <p>{{$article->body}}</p>
   
</x-layout>