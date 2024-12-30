@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center mt-3">
            {{-- <img  class="responsive-img" src="{{asset('images/credit_cards.png')}}" alt="credit-card"> --}}
        </div>
        <div class="container mt-4">
            <div class="row">
                <!-- Ürün Görselleri -->
                <div class="col-md-5 position-relative">
                    <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-end" style="font-size: 0.9rem; z-index: 10;">
                        -40%
                    </div>
                    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="img-fluid rounded">
                    <!-- Küçük Resimler -->
                    <div class="d-flex mt-2">
                        <img src="{{ $product['image'] }}" alt="Thumbnail 1" class="img-thumbnail me-2" style="width: 80px;">
                        {{-- <img src="{{ asset('images/jant2.webp') }}" alt="Thumbnail 2" class="img-thumbnail" style="width: 80px;"> --}}
                    </div>
                </div>

                <!-- Ürün Bilgileri -->
                <div class="col-md-7">
                    <h4 class="fw-bold">{{ $product['description'] }}</h4>
                    <p><strong>MARKA :</strong> {{ $product['title'] }} <br> </p> {{-- <strong>ÜRÜN KODU :</strong> CMS-1062-04 --}}
                    <p class="text-decoration-line-through text-muted">{{ $product['original_price'] }}</p>
                    <p class="h4 text-success fw-bold">{{ $product['discounted_price'] }} {{ $product['currency'] }}</p>
                    <div class="d-flex mb-3">
                        <select class="form-select w-25" aria-label="Adet Seçimi">
                            <option selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <a href="javascript:void(0);"
                            class="btn btn-success ms-3"
                            data-title="{{ $product['title'] }}"
                            data-description="{{ $product['description'] }}"
                            data-original-price="{{ $product['original_price'] }}"
                            data-discounted-price="{{ $product['discounted_price'] }}"
                            data-currency="{{ $product['currency'] }}"
                            data-image="{{ $product['image'] }}"
                            onclick="addToCart(this)">
                            SEPETE EKLE
                        </a>


                    </div>
                    <a href="{{route('payment.form')}}" class="btn btn-outline-dark w-100">HEMEN SATIN ALIN</a>

                    <!-- Ek Bilgiler -->
                    {{-- <div class="mt-4">
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            <span class="me-2 fw-bold">⚡</span> VADE FARKSIZ TAKSİTTEN FAYDALAN!
                        </div>
                        <div class="row text-center">
                            <div class="col-4">
                                <img src="kargo-icon.png" alt="Kargo Bedava" class="mb-1" style="width: 50px;">
                                <p>KARGO BEDAVA</p>
                            </div>
                            <div class="col-4">
                                <img src="bijon-icon.png" alt="Bijon Hediye" class="mb-1" style="width: 50px;">
                                <p>20 ADET BİJON HEDİYE</p>
                            </div>
                            <div class="col-4">
                                <img src="bilezik-icon.png" alt="Bilezik Hediye" class="mb-1" style="width: 50px;">
                                <p>4 ADET BİLEZİK HEDİYE</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>





    </div>


@endsection

@section('css')
    <style>




    </style>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <script>
        function addToCart(element) {
            // Ürün bilgilerini al
            const title = element.getAttribute("data-title");
            const description = element.getAttribute("data-description");
            const originalPrice = element.getAttribute("data-original-price");
            const discountedPrice = element.getAttribute("data-discounted-price");
            const currency = element.getAttribute("data-currency");
            const image = element.getAttribute("data-image");

            // Laravel rotasına yönlendirme
            const url = `{{ route('cart.index') }}?title=${encodeURIComponent(title)}&description=${encodeURIComponent(description)}&original_price=${encodeURIComponent(originalPrice)}&discounted_price=${encodeURIComponent(discountedPrice)}&currency=${encodeURIComponent(currency)}&image=${encodeURIComponent(image)}`;
            window.location.href = url;
        }
    </script>
@endsection
