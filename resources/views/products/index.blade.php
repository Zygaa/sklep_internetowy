@extends('layouts.app')

@section('content')
<div class ="container">
  <div class="row">
    <div class="col-6">
      <h1>Lista produktów</h1>
    </div>
    <div class="col-6 d-flex justify-content-end">
      <a class="float-right" href="/products/create">
        <button type="button" class="btn btn-primary">Dodaj</button>
      </a>
    </div>
  </div>
  <div class="row">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nazwa</th>
          <th scope="col">Description</th>
          <th scope="col">Ilość</th>
          <th scope="col">Cena</th>
          <th scope="col">Akcje</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
          <tr>
            <th scope="row">{{ $product -> id }}</th>
            <td>{{ $product -> name }}</td>
            <td>{{ $product -> description }}</td>
            <td>{{ $product -> amount }}</td>
            <td>{{ $product -> price }}</td>
            <td>
              <a href="{{ route('products.show', $product->id) }}">
                <button class="btn  btn-primary btn-s">P</button>
              </a>
              <a href="{{ route('products.edit', $product->id) }}">
                <button class="btn  btn-success btn-s">E</button>
              </a>
              <button class="btn  btn-danger btn-s delete" data-user-id="{{ $product->id }}">X</button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $products->links() }}
  </div>
</div>
@endsection
@section('javascript')
  $(function(){
    $('.delete').click(function(e) {
      $.ajax({
        method: "DELETE",
        url: `/products/${e.target.getAttribute('data-user-id')}`,
      })
      .done(function ( response ) {
          Swal.fire("Usunięto");
      })
      .fail(function ( response ) {
          console.log(response);
          Swal.fire("ERROR");
      });
   });
  });
@endsection
