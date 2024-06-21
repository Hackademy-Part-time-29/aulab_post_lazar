<x-layout>
<br>
    <h1 class="display-3">Tutti gli articoli</h1>
    <br>
    <div class="row">
        @foreach($articles as $article)
        <div class="col-4 my-2">
        <x-card :article="$article"/>
        </div>
        @endforeach
    </div>
</x-layout>