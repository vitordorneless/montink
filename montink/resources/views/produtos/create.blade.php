@extends('produtos.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Add New Product</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('produtos.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input
                type="text"
                name="nome"
                class="form-control @error('nome') is-invalid @enderror"
                id="inputName"
                placeholder="Nome">
            @error('nome')
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
                placeholder="Preço"></textarea>
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
                placeholder="Estoque"></textarea>
            @error('estoque')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>

  </div>
</div>
@endsection