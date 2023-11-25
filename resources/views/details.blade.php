@extends('layout')

@section('title', 'Details')

@section('content')
    <section id="details" class="details-section">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <link rel="stylesheet" href="{{ asset('styles5.css') }}">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            
        <div class="details-content">
            <div class="image-section">
                <!-- Replace 'path/to/your/image1.jpg' with the actual path to your first image file -->
                <img src="{{ asset('images\Anvir.jpg') }}" alt="History Image">
            </div>
            <div class="text-section">
                <h2>Details</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, justo eget bibendum volutpat,
                    justo felis bibendum justo, vitae elementum dolor odio vel risus. Vestibulum ante ipsum primis in
                    faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur eu mi ut ligula viverra gravida
                    ac ut libero.
                </p>
            </div>
            <div class="image-section">
                <!-- Replace 'path/to/your/image2.jpg' with the actual path to your second image file -->
                <img src="{{ asset('images\Virat3.jpg') }}" alt="History Image">
            </div>
        </div>

        </body>
        </html>

    </section>
@endsection
