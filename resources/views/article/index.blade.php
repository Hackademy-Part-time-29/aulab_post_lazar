<x-layout>
<br>
<div class="centered">
    <h1 class="display-3">Tutti gli articoli</h1>
    <br>
    <div class="row">
        @foreach($articles as $article)
        <div class="col-3 my-2">
        <x-card :article="$article"/>
        </div>
        @endforeach
    </div>
    </div>
</x-layout>