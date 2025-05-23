@extends('produtos.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Laravel 12 CRUD Example from scratch - ItSolutionStuff.com</h2>
  <div class="card-body">

        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('produtos.create') }}"> <i class="fa fa-plus"></i> Create New Product</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th width="250px">Ação</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($produtos as $produto)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ $produto->estoque }}</td>
                    <td>
                        <form action="{{ route('produtos.destroy',$produto->idprodutos) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('produtos.show',$produto->idprodutos) }}"><i class="fa-solid fa-list"></i> Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('produtos.edit',$produto->idprodutos) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            @endforelse
            </tbody>

        </table>

        {!! $produtos->links() !!}

  </div>
</div>
@endsection