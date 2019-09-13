@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cidades</div>

                @if(count($errors))
                    <div class="alert alert-danger" role="alert">
                        @json($errors)
                    </div>
                @endif

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Criado em</th>
                                <th>Alterado em</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($cidades as $cidade)
                                <tr>
                                    <td>{{ $cidade->id }}</td>
                                    <td>{{ $cidade->nome }}</td>
                                    <td>{{ $cidade->created_at }}</td>
                                    <td>{{ $cidade->updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
