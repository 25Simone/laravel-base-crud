<form action="{{ route($route, $id) }}" method="post">
    @csrf
    @method('delete')

    <button class="btn btn-danger" type="submit">Elimina</button>
</form>