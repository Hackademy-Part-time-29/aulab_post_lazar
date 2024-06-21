<x-layout>
  <br>
    <h1 class="display-3">Benvenuto su {{env('APP_NAME')}}</h1>
    <h2>Ecco i nostri articoli più recenti:</h2>
    <br>
    <div class="row">
        @foreach($articles as $article)
        <div class="col-3">
          <x-card :article="$article"/>
        </div>
        @endforeach
       
    </div>
</x-layout>