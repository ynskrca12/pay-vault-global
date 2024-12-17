@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center mt-3">
            {{-- <img  class="responsive-img" src="{{asset('images/credit_cards.png')}}" alt="credit-card"> --}}
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="row d-flex justify-content-center mt-4 mb-4">
                    <div class="col-12 col-md-3">
                        <div class="card text-center shadow-sm" style="width: 105%;">
                            <div class="position-relative">
                                <!-- İndirim Etiketi -->
                                <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-end" style="font-size: 0.9rem; z-index: 10;">
                                    -40%
                                </div>
                                  <!-- Ürün Resimleri -->
                                <div class="img-container position-relative"
                                    onclick="redirectToProductDetails(this)"
                                    data-title="CMS"
                                    data-description="CMS-1062-04 7.0x17'-4x100 ET35 67.2 Diamond Rim Black Gloss Jant (4 Adet)"
                                    data-original-price="24,099.00TL"
                                    data-discounted-price="14,459.00TL"
                                    data-image="{{ asset('images/jant.webp') }}">
                                    <!-- İlk Resim -->
                                    <img src="{{ asset('images/jant.webp') }}" class="card-img-top default-img" alt="Ürün Resmi">
                                    <!-- Hover Resmi -->
                                    <img src="{{ asset('images/jant2.webp') }}" class="card-img-top hover-img position-absolute top-50 start-50 translate-middle" alt="Hover Resmi">
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Ürün Başlığı -->
                                <h5 class="card-title fw-bold">CMS</h5>
                                <!-- Ürün Açıklaması -->
                                <p class="card-text small text-muted mb-2">
                                    CMS-1062-04 7.0x17"-4x100 ET35 67.2 <br>
                                    Diamond Rim Black Gloss Jant (4 Adet)
                                </p>
                                <!-- Fiyat Alanı -->
                                <p class="text-muted text-decoration-line-through fs-6 mb-0">24,099.00TL</p>
                                <p class="text-warning fw-bold fs-5">14,459.00TL</p>
                                <!-- Buton -->
                                <button class="btn btn-outline-dark w-100 fw-bold">SEPETE EKLE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card text-center shadow-sm" style="width: 105%;">
                            <div class="position-relative">
                                <!-- İndirim Etiketi -->
                                <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-end" style="font-size: 0.9rem; z-index: 10;">
                                    -40%
                                </div>
                                <div class="img-container position-relative"
                                    onclick="redirectToProductDetails(this)"
                                    data-title="CMS"
                                    data-description="CMS-1062-04 7.0x17'-4x100 ET35 67.2 Diamond Rim Black Gloss Jant (4 Adet)"
                                    data-original-price="24,099.00TL"
                                    data-discounted-price="14,459.00TL"
                                    data-image="{{ asset('images/jant.webp') }}">
                                    <!-- İlk Resim -->
                                    <img src="{{ asset('images/jant.webp') }}" class="card-img-top default-img" alt="Ürün Resmi">
                                    <!-- Hover Resmi -->
                                    <img src="{{ asset('images/jant2.webp') }}" class="card-img-top hover-img position-absolute top-50 start-50 translate-middle" alt="Hover Resmi">
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Ürün Başlığı -->
                                <h5 class="card-title fw-bold">CMS</h5>
                                <!-- Ürün Açıklaması -->
                                <p class="card-text small text-muted mb-2">
                                    CMS-1062-04 7.0x17"-4x100 ET35 67.2 <br>
                                    Diamond Rim Black Gloss Jant (4 Adet)
                                </p>
                                <!-- Fiyat Alanı -->
                                <p class="text-muted text-decoration-line-through fs-6 mb-0">24,099.00TL</p>
                                <p class="text-warning fw-bold fs-5">14,459.00TL</p>
                                <!-- Buton -->
                                <button class="btn btn-outline-dark w-100 fw-bold">SEPETE EKLE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card text-center shadow-sm" style="width: 105%;">
                            <div class="position-relative">
                                <!-- İndirim Etiketi -->
                                <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-end" style="font-size: 0.9rem; z-index: 10;">
                                    -32%
                                </div>
                                <div class="img-container position-relative"
                                    onclick="redirectToProductDetails(this)"
                                    data-title="ARCEO"
                                    data-description="Arceo Lastik Jant Temizlik Seti"
                                    data-original-price="2,199.00TL"
                                    data-discounted-price="1,499.00TL"
                                    data-image="{{ asset('images/temizlik-kiti.webp') }}">
                                    <!-- İlk Resim -->
                                    <img src="{{ asset('images/temizlik-kiti.webp') }}" class="card-img-top default-img" alt="Ürün Resmi">
                                    <!-- Hover Resmi -->
                                    <img src="{{ asset('images/temizlik-kiti2.jpg') }}" class="card-img-top hover-img position-absolute top-50 start-50 translate-middle" alt="Hover Resmi">
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Ürün Başlığı -->
                                <h5 class="card-title fw-bold">ARCEO</h5>
                                <!-- Ürün Açıklaması -->
                                <p class="card-text small text-muted mb-2">
                                    Arceo Lastik Jant Temizlik Seti
                                </p>
                                <br><br>
                                <!-- Fiyat Alanı -->
                                <p class="text-muted text-decoration-line-through fs-6 mb-0" style="margin-top: 15px;">2,199.00TL</p>
                                <p class="text-warning fw-bold fs-5">1,499.00TL</p>
                                <!-- Buton -->
                                <button class="btn btn-outline-dark w-100 fw-bold">SEPETE EKLE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card text-center shadow-sm" style="width: 105%;">
                            <div class="position-relative">
                                <!-- İndirim Etiketi -->
                                <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-end" style="font-size: 0.9rem; z-index: 10;">
                                    -32%
                                </div>
                                <div class="img-container position-relative"
                                    onclick="redirectToProductDetails(this)"
                                    data-title="ARCEO"
                                    data-description="Arceo Lastik Jant Temizlik Seti"
                                    data-original-price="2,199.00TL"
                                    data-discounted-price="1,499.00TL"
                                    data-image="{{ asset('images/temizlik-kiti.webp') }}">
                                    <!-- İlk Resim -->
                                    <img src="{{ asset('images/temizlik-kiti.webp') }}" class="card-img-top default-img" alt="Ürün Resmi">
                                    <!-- Hover Resmi -->
                                    <img src="{{ asset('images/temizlik-kiti2.jpg') }}" class="card-img-top hover-img position-absolute top-50 start-50 translate-middle" alt="Hover Resmi">
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Ürün Başlığı -->
                                <h5 class="card-title fw-bold">ARCEO</h5>
                                <!-- Ürün Açıklaması -->
                                <p class="card-text small text-muted mb-2">
                                    Arceo Lastik Jant Temizlik Seti
                                </p><br><br>
                                <!-- Fiyat Alanı -->
                                <p class="text-muted text-decoration-line-through fs-6 mb-0" style="margin-top: 15px;">2,199.00TL</p>
                                <p class="text-warning fw-bold fs-5">1,499.00TL</p>
                                <!-- Buton -->
                                <button class="btn btn-outline-dark w-100 fw-bold">SEPETE EKLE</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-4 mb-4">
                    <div class="col-md-3">
                        <div class="card text-center shadow-sm" style="width: 105%;">
                            <div class="position-relative">
                                <!-- İndirim Etiketi -->
                                <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-end" style="font-size: 0.9rem; z-index: 10;">
                                    -33%
                                </div>
                                  <!-- Ürün Resimleri -->
                                <div class="img-container position-relative"
                                    onclick="redirectToProductDetails(this)"
                                    data-title="ARC"
                                    data-description="Arc 12 Volt 6,5 Amper Yatay Motosiklet Aküsü Üretim Tarihi: 2024"
                                    data-original-price="947.37TL"
                                    data-discounted-price="631.58TL"
                                    data-image="{{ asset('images/aku.webp') }}">
                                    <!-- İlk Resim -->
                                    <img src="{{ asset('images/aku.webp') }}" class="card-img-top default-img" alt="Ürün Resmi">
                                    <!-- Hover Resmi -->
                                    <img src="{{ asset('images/aku2.webp') }}" class="card-img-top hover-img position-absolute top-50 start-50 translate-middle" alt="Hover Resmi">
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Ürün Başlığı -->
                                <h5 class="card-title fw-bold">ARC</h5>
                                <!-- Ürün Açıklaması -->
                                <p class="card-text small text-muted mb-2">
                                    Arc 12 Volt 6,5 Amper Yatay Motosiklet Aküsü Üretim Tarihi: 2024
                                </p>
                                <!-- Fiyat Alanı -->
                                <p class="text-muted text-decoration-line-through fs-6 mb-0" style="margin-top: 29px;">947.37TL</p>
                                <p class="text-warning fw-bold fs-5">631.58TL</p>
                                <!-- Buton -->
                                <button class="btn btn-outline-dark w-100 fw-bold">SEPETE EKLE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center shadow-sm" style="width: 105%;">
                            <div class="position-relative">
                                <!-- İndirim Etiketi -->
                                <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-end" style="font-size: 0.9rem; z-index: 10;">
                                    -33%
                                </div>
                                  <!-- Ürün Resimleri -->
                                <div class="img-container position-relative"
                                    onclick="redirectToProductDetails(this)"
                                    data-title="ARC"
                                    data-description="Arc 12 Volt 6,5 Amper Yatay Motosiklet Aküsü Üretim Tarihi: 2024"
                                    data-original-price="947.37TL"
                                    data-discounted-price="631.58TL"
                                    data-image="{{ asset('images/aku.webp') }}">
                                    <!-- İlk Resim -->
                                    <img src="{{ asset('images/aku.webp') }}" class="card-img-top default-img" alt="Ürün Resmi">
                                    <!-- Hover Resmi -->
                                    <img src="{{ asset('images/aku2.webp') }}" class="card-img-top hover-img position-absolute top-50 start-50 translate-middle" alt="Hover Resmi">
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Ürün Başlığı -->
                                <h5 class="card-title fw-bold">ARC</h5>
                                <!-- Ürün Açıklaması -->
                                <p class="card-text small text-muted mb-2">
                                    Arc 12 Volt 6,5 Amper Yatay Motosiklet Aküsü Üretim Tarihi: 2024
                                </p>
                                <!-- Fiyat Alanı -->
                                <p class="text-muted text-decoration-line-through fs-6 mb-0" style="margin-top: 29px;">947.37TL</p>
                                <p class="text-warning fw-bold fs-5">631.58TL</p>
                                <!-- Buton -->
                                <button class="btn btn-outline-dark w-100 fw-bold">SEPETE EKLE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center shadow-sm" style="width: 105%;">
                            <div class="position-relative">
                                <!-- İndirim Etiketi -->
                                <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-end" style="font-size: 0.9rem; z-index: 10;">
                                    -40%
                                </div>
                                <div class="img-container position-relative"
                                    onclick="redirectToProductDetails(this)"
                                    data-title="CMS"
                                    data-description="CMS-1062-04 7.0x17'-4x100 ET35 67.2 Diamond Rim Black Gloss Jant (4 Adet)"
                                    data-original-price="24,099.00TL"
                                    data-discounted-price="14,459.00TL"
                                    data-image="{{ asset('images/jant.webp') }}">
                                    <!-- İlk Resim -->
                                    <img src="{{ asset('images/jant.webp') }}" class="card-img-top default-img" alt="Ürün Resmi">
                                    <!-- Hover Resmi -->
                                    <img src="{{ asset('images/jant2.webp') }}" class="card-img-top hover-img position-absolute top-50 start-50 translate-middle" alt="Hover Resmi">
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Ürün Başlığı -->
                                <h5 class="card-title fw-bold">CMS</h5>
                                <!-- Ürün Açıklaması -->
                                <p class="card-text small text-muted mb-2">
                                    CMS-1062-04 7.0x17"-4x100 ET35 67.2 <br>
                                    Diamond Rim Black Gloss Jant (4 Adet)
                                </p>
                                <!-- Fiyat Alanı -->
                                <p class="text-muted text-decoration-line-through fs-6 mb-0">24,099.00TL</p>
                                <p class="text-warning fw-bold fs-5">14,459.00TL</p>
                                <!-- Buton -->
                                <button class="btn btn-outline-dark w-100 fw-bold">SEPETE EKLE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center shadow-sm" style="width: 105%;">
                            <div class="position-relative">
                                <!-- İndirim Etiketi -->
                                <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-end" style="font-size: 0.9rem; z-index: 10;">
                                    -40%
                                </div>
                                <div class="img-container position-relative"
                                    onclick="redirectToProductDetails(this)"
                                    data-title="CMS"
                                    data-description="CMS-1062-04 7.0x17'-4x100 ET35 67.2 Diamond Rim Black Gloss Jant (4 Adet)"
                                    data-original-price="24,099.00TL"
                                    data-discounted-price="14,459.00TL"
                                    data-image="{{ asset('images/jant.webp') }}">
                                    <!-- İlk Resim -->
                                    <img src="{{ asset('images/jant.webp') }}" class="card-img-top default-img" alt="Ürün Resmi">
                                    <!-- Hover Resmi -->
                                    <img src="{{ asset('images/jant2.webp') }}" class="card-img-top hover-img position-absolute top-50 start-50 translate-middle" alt="Hover Resmi">
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Ürün Başlığı -->
                                <h5 class="card-title fw-bold">CMS</h5>
                                <!-- Ürün Açıklaması -->
                                <p class="card-text small text-muted mb-2">
                                    CMS-1062-04 7.0x17"-4x100 ET35 67.2 <br>
                                    Diamond Rim Black Gloss Jant (4 Adet)
                                </p>
                                <!-- Fiyat Alanı -->
                                <p class="text-muted text-decoration-line-through fs-6 mb-0">24,099.00TL</p>
                                <p class="text-warning fw-bold fs-5">14,459.00TL</p>
                                <!-- Buton -->
                                <button class="btn btn-outline-dark w-100 fw-bold">SEPETE EKLE</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex mt-4 mb-4">
                    <div class="col-md-3">
                        <div class="card text-center shadow-sm" style="width: 105%;">
                            <div class="position-relative">
                                <!-- İndirim Etiketi -->
                                <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-end" style="font-size: 0.9rem; z-index: 10;">
                                    -40%
                                </div>
                                  <!-- Ürün Resimleri -->
                                <div class="img-container position-relative"
                                    onclick="redirectToProductDetails(this)"
                                    data-title="CMS"
                                    data-description="CMS-1062-04 7.0x17'-4x100 ET35 67.2 Diamond Rim Black Gloss Jant (4 Adet)"
                                    data-original-price="24,099.00TL"
                                    data-discounted-price="14,459.00TL"
                                    data-image="{{ asset('images/jant.webp') }}">
                                    <!-- İlk Resim -->
                                    <img src="{{ asset('images/jant.webp') }}" class="card-img-top default-img" alt="Ürün Resmi">
                                    <!-- Hover Resmi -->
                                    <img src="{{ asset('images/jant2.webp') }}" class="card-img-top hover-img position-absolute top-50 start-50 translate-middle" alt="Hover Resmi">
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Ürün Başlığı -->
                                <h5 class="card-title fw-bold">CMS</h5>
                                <!-- Ürün Açıklaması -->
                                <p class="card-text small text-muted mb-2">
                                    CMS-1062-04 7.0x17"-4x100 ET35 67.2 <br>
                                    Diamond Rim Black Gloss Jant (4 Adet)
                                </p>
                                <!-- Fiyat Alanı -->
                                <p class="text-muted text-decoration-line-through fs-6 mb-0">24,099.00TL</p>
                                <p class="text-warning fw-bold fs-5">14,459.00TL</p>
                                <!-- Buton -->
                                <button class="btn btn-outline-dark w-100 fw-bold">SEPETE EKLE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center shadow-sm" style="width: 105%;">
                            <div class="position-relative">
                                <!-- İndirim Etiketi -->
                                <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-end" style="font-size: 0.9rem; z-index: 10;">
                                    -40%
                                </div>
                                <div class="img-container position-relative"
                                    onclick="redirectToProductDetails(this)"
                                    data-title="CMS"
                                    data-description="CMS-1062-04 7.0x17'-4x100 ET35 67.2 Diamond Rim Black Gloss Jant (4 Adet)"
                                    data-original-price="24,099.00TL"
                                    data-discounted-price="14,459.00TL"
                                    data-image="{{ asset('images/jant.webp') }}">
                                    <!-- İlk Resim -->
                                    <img src="{{ asset('images/jant.webp') }}" class="card-img-top default-img" alt="Ürün Resmi">
                                    <!-- Hover Resmi -->
                                    <img src="{{ asset('images/jant2.webp') }}" class="card-img-top hover-img position-absolute top-50 start-50 translate-middle" alt="Hover Resmi">
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Ürün Başlığı -->
                                <h5 class="card-title fw-bold">CMS</h5>
                                <!-- Ürün Açıklaması -->
                                <p class="card-text small text-muted mb-2">
                                    CMS-1062-04 7.0x17"-4x100 ET35 67.2 <br>
                                    Diamond Rim Black Gloss Jant (4 Adet)
                                </p>
                                <!-- Fiyat Alanı -->
                                <p class="text-muted text-decoration-line-through fs-6 mb-0">24,099.00TL</p>
                                <p class="text-warning fw-bold fs-5">14,459.00TL</p>
                                <!-- Buton -->
                                <button class="btn btn-outline-dark w-100 fw-bold">SEPETE EKLE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>


@endsection

@section('css')
    <style>
        .card-img, .card-img-bottom, .card-img-top {
            width: 65% !important;
        }

        .img-container {
            position: relative;
            width: 100%;
            height: auto;
            cursor: pointer;
        }

        .img-container img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .hover-img {
            opacity: 0;
            transform: scale(1.1);
        }

        .img-container:hover .hover-img {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        .img-container:hover .default-img {
            opacity: 0;
        }


        @media (max-width: 768px) {
            .card {
                margin-bottom: 20px;
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
            $('.headerTitle').text('Products List')
        });
    </script>

    <script>
        function redirectToProductDetails(element) {
            // Ürün bilgilerini al
            const title = element.getAttribute("data-title");
            const description = element.getAttribute("data-description");
            const originalPrice = element.getAttribute("data-original-price");
            const discountedPrice = element.getAttribute("data-discounted-price");
            const image = element.getAttribute("data-image");

            // Laravel rotasına yönlendirme
            const url = `{{ route('product.details') }}?title=${encodeURIComponent(title)}&description=${encodeURIComponent(description)}&original_price=${encodeURIComponent(originalPrice)}&discounted_price=${encodeURIComponent(discountedPrice)}&image=${encodeURIComponent(image)}`;
            window.location.href = url;
        }
    </script>
@endsection
