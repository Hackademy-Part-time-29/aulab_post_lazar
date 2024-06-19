<x-layout>
    <div class="container p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Inserisci un articolo</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
            <form method="POST" action="/register">
        @csrf
    <div class="mb-3">
    <label class="form-label">Titolo</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
    @error('titolo')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Sottotitolo</label>
    <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" value="{{old('subtitle')}}">
    @error('subtitle')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Inserisci immagine</label>
  <input class="form-control" type="file" id="formFile">
</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Categoria</label>
    <input type="category" class="form-control @error('category') is-invalid @enderror" name="category">
    @error('category')
    {{$message}}
    @enderror
  </div>
  
</form>  
            </div>
        </div>
    </div>

</x-layout>