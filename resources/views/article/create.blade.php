<x-layout>
    <div class="container p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Inserisci un articolo</h1>
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
                <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
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
                        <input class="form-control" type="file" id="formFile" name="image">
                        @error('image')
                            {{ $message }}
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        {{-- <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"> --}}
                        <select name="category" class="form-control" id="">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="body"></textarea>
                        <label for="floatingTextarea">Articolo</label>
                        @error('body')
                            {{ $message }}
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Crea articolo</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
