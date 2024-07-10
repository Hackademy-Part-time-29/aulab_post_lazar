<x-layout>
    <div class="container p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-3">Modifica l'articolo</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('article.update', $article)}}" class="card p-5 shadow" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" value="{{$article->title}}">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control" name="subtitle" value="{{$article->subtitle}}">
                        @error('subtitle')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Immagine attuale</label>
                        <img src="{{Storage::url($article->image)}}" alt="{{$article->title}}" class="w-50 d-flex">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nuova immagine</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        <select name="category" class="form-control">
                            <option selected disabled>Scegli la categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if($article->category_id==$category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-label">
                    <label>Corpo del testo</label>
                        <textarea class="form-control" rows="25" name="body">{{$article->body}}</textarea>
                        @error('body')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" name="tags" class="form-control" id="tags" value="{{$article->tags->implode('name',', ')}}">
                        <span class="small text-muted fst-italic">Dividi ogni tag con una virgola</span>
                        @error('tags')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mt-3 d-flex justify-content-center flex-column align-items-center">
                        <button type="submit" class="btn buttonCard">Modifica articolo</button>
                        <a href="{{route('homepage')}}" class="text-secondary mt-2">Torna alla home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
