@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center mt-3">
            {{-- <img  class="responsive-img" src="{{asset('images/credit_cards.png')}}" alt="credit-card"> --}}
        </div>
        <div class="container my-5">
            <div class="row">
                <!-- Sepet Ürünleri -->
                <div class="col-md-8">
                    <h4 class="fw-bold mb-4">SEPETİNİZ</h4>
                    <hr>
                    @if(isset($cart) )
                        <table class="table border text-center mobile-hidden">
                            <thead>
                                <tr>
                                    <th>ÜRÜNLER</th>
                                    <th>FİYAT</th>
                                    <th>MİKTAR</th>
                                    <th>TOPLAM</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <img src="{{ $cart['image'] }}" alt="Ürün Resmi" width="80" class="">
                                            <div>
                                                <p class="mb-1 fw-bold">{{ $cart['title'] }}</p>
                                                <p class="small mb-0">{{ $cart['description'] }}</p>
                                            </div>
                                        </td>
                                        <td class="align-middle">{{ $cart['discounted_price'] }}</td>
                                        <td class="align-middle">
                                            <input type="number" value="1" min="1"
                                                class="form-control quantity-update" data-key="1" style="width: 60px;">
                                        </td>
                                        <td class="align-middle fw-bold">{{ $cart['discounted_price'] }}</td>
                                    </tr>
                            </tbody>
                        </table>

                        <div class="mobile-show">
                            <div class="product-container mb-4">
                                <div class="d-flex align-items-center image-description">
                                    <div class="image-container" style="margin-right: 10px;">
                                        <img src="{{ $cart['image'] }}" alt="Ürün Resmi" width="80">
                                    </div>
                                    <div class="description-container text-center">
                                        <p class="fw-bold">{{ $cart['title'] }}</p>
                                        <p class="small">{{ $cart['description'] }}</p>
                                    </div>
                                </div>
                                <div class="product-amount mt-3">
                                    <strong>Fiyat:</strong>
                                    {{ $cart['discounted_price'] }}
                                </div>
                                <div class="product-quantity mt-3">
                                    <strong>Miktar:</strong>
                                    1
                                </div>
                                <div class="total-amount mt-3">
                                    <strong>Toplam:</strong>
                                    {{ $cart['discounted_price'] }}
                                </div>
                            </div>
                        </div>
                    @else
                        <p>Sepetiniz boş.</p>
                    @endif
                </div>
                <!-- Ödeme Özeti -->
                <div class="col-md-4">
                    <div class="border p-4 siparis-ozeti">
                        <h5 class="fw-bold mb-3">Sipariş Özeti</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Ara Toplam:</span>
                            <span>{{$cart['discounted_price']}}</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold mb-3">
                            <span>Toplam:</span>
                            <span>{{$cart['discounted_price']}}</span>
                        </div>
                        <a href="#" class="btn btn-dark w-100 mb-2" id="continuePayment">ÖDEMEYE DEVAM ET</a>
                        <a href="{{ route('product.list') }}" class="btn btn-outline-dark w-100">ALIŞVERİŞE DEVAM ET</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('css')
    <style>
        .mobile-show{
            display: none;
        }
        @media (max-width: 768px) {
            .mobile-hidden{
                display: none;
            }
            .mobile-show{
                display: block;
            }
        }
    </style>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('#continuePayment').on('click', function(e) {
                e.preventDefault();

                // Sepet verisinden discounted_price değerini al
                const discountedPrice = @json($cart['discounted_price']); // Blade'den JavaScript'e veri geçirme

                // AJAX ile ödeme sayfasına yönlendirme
                $.ajax({
                    url: "{{ route('payment.form') }}", // Ödeme sayfasının route'u
                    method: "GET", // GET metodu ile veriyi almak
                    data: {
                        discounted_price: discountedPrice // discounted_price'ı gönder
                    },
                    success: function(response) {
                        // Yönlendirme işlemi veya gelen response'u kullanma
                        window.location.href = "{{ route('payment.form') }}?discounted_price=" + discountedPrice;
                    }
                });
            });
        });
    </script>
@endsection
