@extends('produtos.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Edit Product</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('produtos.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('produtos.update',$product->idprodutos) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="inputNome" class="form-label"><strong>Nome:</strong></label>
            <input
                type="text"
                name="nome"
                value="{{ $product->nome }}"
                class="form-control @error('nome') is-invalid @enderror"
                id="inputNome"
                placeholder="Nome">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputPreco" class="form-label"><strong>Preço:</strong></label>
            <textarea
                class="form-control @error('preco') is-invalid @enderror"
                style="height:150px"
                name="preco"
                id="inputPreco"
                placeholder="Preço">{{ $product->preco }}</textarea>
            @error('preco')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputEstoque" class="form-label"><strong>Estoque:</strong></label>
            <textarea
                class="form-control @error('estoque') is-invalid @enderror"
                style="height:150px"
                name="estoque"
                id="inputEstoque"
                placeholder="Estoque">{{ $product->estoque }}</textarea>
            @error('estoque')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
    </form>

  </div>
</div>
@endsection