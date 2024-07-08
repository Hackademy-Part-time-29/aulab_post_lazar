<x-layout>
    <div class="container p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-3">Crea il tuo articolo</h1>
                @session('success')
                <div class="alert alert-success" role="alert">
                  {{session('success')}}
                </div>
                @endsession
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{ route('article.store') }}" class="card p-5 shadow" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            value="{{ old('title') }}">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control @error('subtitle') is-invalid @enderror"
                            name="subtitle" value="{{ old('subtitle') }}">
                        @error('subtitle')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Inserisci immagine</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFile" name="image">
                        @error('image')
                            {{ $message }}
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        <select name="category" class="form-control @error('image') is-invalid @enderror">
                            <option value= "">Scegli la categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-label">
                    <label>Corpo del testo</label>
                        <textarea class="form-control @error('body') is-invalid @enderror" rows="25" name="body">{{old('body')}}</textarea>
                        @error('body')
                            {{ $message }}
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" name="tags" class="form-control" id="tags" value="{{old('tags')}}">
                        <span class="small text-muted fst-italic">Dividi ogni tag con una virgola</span>
                        @error('tags')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn buttonCard">Crea articolo</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
