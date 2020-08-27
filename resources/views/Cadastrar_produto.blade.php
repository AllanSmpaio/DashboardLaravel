@extends('layout.base', ["current"=>"principal"])

@section('body')
    <form action="{{route('produtos.store')}}" method="POST" >
        <h1>Cadastrar novo produto!</h1>
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome">
            
            <label for="cor">Cor:</label>
            <input type="text" class="form-control" id="cor" name="cor">
            
            <label for="fabricante">Fabricante:</label>
            <input type="text" class="form-control" id="fabricante" name="fabricante">
            
            <label for="observacoes">Observações:</label>
            <input type="text" class="form-control" id="observacoes" name="observacoes">
            
            <label for="preco_compra">Valor de compra:</label>
            <input type="text" class="form-control" id="preco_compra" name="preco_compra">
            
            <label for="preco_venda">Valor de venda:</label>
            <input type="text" class="form-control" id="preco_venda" name="preco_venda">
            
            <label for="qtd_estoque">Quantidade no estoque:</label>
            <input type="text" class="form-control" id="qtd_estoque" name="qtd_estoque">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection