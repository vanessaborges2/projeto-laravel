@extends('layout')

@section('conteudo')

    <h1>Meu carrinho de compras</h1>

    @if(!$pedido || $pedido->itens->isEmpty())
        <p class="danger">Seu carrinho está vazio!</p>
    @else
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço Unitário</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedido->itens as $item)
                    <tr>
                        <td>{{$item->produto->nome}}</td>
                        <td>{{$item->quantidade}}</td>
                        <td>{{$item->preco}}</td>
                        <td>{{$item->quantidade * $item->preco}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h4>Total do carrinho: {{$pedido->total}} </h4>
    @endif
@endsection