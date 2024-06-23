<x-layout>
<h1 class="display-1 text-capitalize">{{$user->name}}</h1>
    <div class="row">
        @foreach($articles as $article)
        <div class="col-3 my-2">
        <x-card :article="$article"/>
        </div>
        
        @endforeach
    </div>

</x-layout>