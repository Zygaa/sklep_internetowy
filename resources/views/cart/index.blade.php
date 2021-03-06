@extends('layouts.app')

@section('content')
    <div class ="container">
        <div class="cart_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cart_container">
                            <div class="cart_title">Koszyk<small> ({{ $cart->getItems()->count() }}) </small></div>
                            <form action="{{ route('orders.store') }}" method="POST" id="order-form">
                              @csrf
                              <div class="cart_items">
                                  <ul class="cart_list" style="list-style-type: none">
                                      @foreach($cart->getItems() as $item)
                                          <li class="cart_item clearfix">
                                              <div class="cart_item_image"><img src="{{ $item->getImage() }}" alt="Zdjęcie produktu"></div>
                                              <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                                  <div class="cart_item_name cart_info_col">
                                                      <div class="cart_item_title">Nazwa produktu</div>
                                                      <div class="cart_item_text">{{ $item->getName() }}</div>
                                                  </div>
                                                  <div class="cart_item_quantity cart_info_col">
                                                      <div class="cart_item_title">Ilość</div>
                                                      <div class="cart_item_text">{{ $item->getQuantity() }}</div>
                                                  </div>
                                                  <div class="cart_item_price cart_info_col">
                                                      <div class="cart_item_title">Cena [PLN]</div>
                                                      <div class="cart_item_text">{{ $item->getPrice() }}</div>
                                                  </div>
                                                  <div class="cart_item_total cart_info_col">
                                                      <div class="cart_item_title">Razem [PLN]</div>
                                                      <div class="cart_item_text">{{ $item->getSum() }}</div>
                                                  </div>
                                                  <div class="cart_info_col">
                                                      <button type="button" class="btn btn-danger btn-sm delete" data-id="{{ $item->getProductId() }}">Usuń z koszyka</button>
                                                  </div>
                                              </div>
                                          </li>
                                      @endforeach
                                  </ul>
                              </div>

                            <div class="order_total">
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title" style="float:left">Podsumowanie [PLN]</div>
                                    <div class="order_total_amount" style="float:right">{{ $cart->getSum() }}</div>
                                </div>
                            </div>
                            <div class="cart_buttons"> <button type="button" class="button cart_button_clear"><a
                                        href="/">Kontynuuj zakupy</a></button>
                                <button type="submit" class="button cart_button_checkout btn-primary" {{ !$cart->hasItems() ? 'disabled' : '' }}>Zamawiam</button> </div>
                        </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    $(function(){
    $('.delete').click(function(e) {
    $.ajax({
    method: "DELETE",
    url: `/cart/${e.target.getAttribute('data-id')}`,
    })
    .done(function ( response ) {
    location.reload();
    })
    });
    });
@endsection
