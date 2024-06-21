<x-layout>
  <div class="container p-5 text-center">
    <div class="row justify-content-center">
    <h1>Fai l'accesso</h1>
    </div>
  </div>
  <div class="container w-50">
  <div class="row justify-content-center">
  <div class="col-12 col-md-8">
    <form method="POST" action="/login">
        @csrf
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
    @error('email')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
    @error('password')
    {{$message}}
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Accedi</button>
</form>
</div>
</div>
</div>
</x-layout>