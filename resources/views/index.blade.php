@extends('layout')

@section('conteudo')

    <div class="mb-3">

        <form method="post" enctype="multipart/form-data">
            @csrf
            <label for="formFile" class="form-label mt-5" >Upload JSON</label>
            <input class="form-control" type="file" id="formFile" name="formFile" accept=".json,.txt">
            <button class="btn btn-success mt-2">Enviar</button>
        </form>
    </div>

    <a href="{{route('download')}}" id="exportCsv" class="btn btn-primary">Exportar para CSV</a>

    @include('errors', ['errors' => $errors])

@endsection
