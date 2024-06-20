<x-layout>
    <h1>Benvenuto su {{env('APP_NAME')}}</h1>
    <div class="row">
        @foreach($articles as $article)
        <div class="col-4">
        <div class="card" style="width: 18rem;">
  <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <h6 class="card-text">{{$article->subtitle}}</h6>
    <p class="card-text">{{$article->body}}</p>
    <a href="#" class="btn btn-primary">Leggi l'articolo</a>
  </div>
</div>
        </div>
        @endforeach
    </div>
</x-layout>