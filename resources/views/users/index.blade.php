@extends('layouts.app')

@section('content')
<div class ="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Email</th>
        <th scope="col">Imię</th>
        <th scope="col">Nazwisko</th>
        <th scope="col">Numer telefonu</th>
        <th scope="col">Akcje</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <th scope="row">{{ $user -> id }}</th>
          <td>{{ $user -> email }}</td>
          <td>{{ $user -> name }}</td>
          <td>{{ $user -> surname }}</td>
          <td>{{ $user -> phone_number }}</td>
          <td>
              <a href="{{ route('users.edit', $user->id) }}">
                  <button class="btn  btn-success btn-s">E</button>
              </a>
            <button class="btn  btn-danger btn-s delete" data-user-id="{{ $user->id }}">X</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $users->links() }}
</div>
@endsection
@section('javascript')
  $(function(){
    $('.delete').click(function(e) {
      $.ajax({
        method: "DELETE",
        url: `/users/${e.target.getAttribute('data-user-id')}`,
      })
      .done(function ( response ) {
          Swal.fire("Usunięto");
      })
      .fail(function ( response ) {
          Swal.fire("ERROR");
      });
   });
  });
@endsection
