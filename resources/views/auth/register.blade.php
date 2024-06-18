<x-layout>
    <h1>Registrati!</h1>
    <form method="POST" action="/register">
        @csrf
    <div class="mb-3">
    <label class="form-label">Nome e cognome</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
    @error('name')
    {{$message}}
    @enderror
  </div>
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
  <div class="mb-3">
    <label class="form-label">Conferma password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation">
    @error('password')
    {{$message}}
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Registrati</button>
</form>
</x-layout>