@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center mt-3">
            <img  class="responsive-img" src="{{asset('images/credit_cards.png')}}" alt="credit-card">
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <form action="#" method="POST" id="paymentForm">
                    {{-- <form action="{{ route('payment.process') }}" method="POST" id="paymentForm"> --}}
                    @csrf
                    <div class="form-section">
                        <h5>
                            <i class="bi bi-person me-2"></i> User Information
                        </h5><hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-3 mt-md-0">
                                <label for="email" class="form-label">E-mail Address</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>

                        </div>
                    </div>

                    <div class="form-section">
                        <h5 class="mt-4">
                            <i class="bi bi-credit-card me-2"></i> Payment Information
                        </h5>
                        <hr>
                        <div class="row">
                            <!-- Card Number -->
                            <div class="col-md-6">
                                <label for="card_number" class="form-label">Card Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-credit-card"></i></span>
                                    <input type="text" id="card_number" name="card_number" class="form-control"
                                           placeholder="1234 5678 9101 1121" maxlength="19" required>
                                </div>
                            </div>

                            <!-- Expiry Date -->
                            <div class="col-md-3 mt-3 mt-md-0">
                                <label for="expiry_date" class="form-label">Expiry Date (MM/YY)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="text" id="expiry_date" name="expiry_date" class="form-control"
                                           placeholder="MM/YY" maxlength="5" required>
                                </div>
                            </div>

                            <!-- CVV -->
                            <div class="col-md-3 mt-3 mt-md-0">
                                <label for="cvv" class="form-label">CVV</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="text" id="cvv" name="cvv" class="form-control" maxlength="3" required>
                                </div>
                            </div>

                            <!-- Amount -->
                            <div class="col-md-6 mt-3">
                                <label for="amount" class="form-label">Amount</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
                                    <input type="text" id="amount" name="amount" class="form-control" value="{{ request()->get('discounted_price') }}" placeholder="Amount (e.g., 100.00)" required readonly>
                         </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-section">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-send me-2"></i> Submit Payment
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection

@section('css')
    <style>
        .card-input {
            width: 100%;
            padding: 10px;
        }

        .form-section {
            margin-bottom: 30px;
        }
        .responsive-img {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <script>
        // Optional: Format card number and expiry date with spaces
        document.getElementById('card_number').addEventListener('input', function (e) {
            e.target.value = e.target.value.replace(/\D/g, '').replace(/(\d{4})(?=\d)/g, '$1 ');
        });

        document.getElementById('expiry_date').addEventListener('input', function (e) {
            e.target.value = e.target.value.replace(/\D/g, '').replace(/(\d{2})(?=\d)/g, '$1/');
        });
    </script>
@endsection
