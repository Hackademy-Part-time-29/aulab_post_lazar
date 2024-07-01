<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>scope="col">#</th>
            <th>scope="col">Nome tag</th>
            <th>scope="col">Q.tà articoli collegati</th>
            <th>scope="col">Aggiorna</th>
            <th>scope="col">Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $mataInfo)
        <tr>
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo-articles)}}</td>
            @if ($metaType == 'tags')
            <td>
                <form action="">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-secondary">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="">
                    @csrf@method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>