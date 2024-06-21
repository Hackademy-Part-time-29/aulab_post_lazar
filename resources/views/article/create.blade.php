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
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFile" name="image">
                        @error('image')
                            {{ $message }}
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        <select name="category" class="form-control @error('image') is-invalid @enderror">
                            <option>Scegli la categoria</option>
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
                        <textarea class="form-control @error('body') is-invalid @enderror" rows="25" name="body"></textarea>
                        @error('body')
                            {{ $message }}
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Crea articolo</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
