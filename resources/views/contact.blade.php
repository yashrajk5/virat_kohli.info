@extends('layout')

@section('title', 'Contact')

@section('content')
    <section id="contact" class="contact-section">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <link rel="stylesheet" href="{{ asset('styles6.css') }}">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            
        </body>
        </html>
        <div class="contact-content">
            <div class="address-section">
                <h2>Contact Us</h2>
                <p>
                    123 Main Street,<br>
                    Cityville, Country<br>
                    Zip Code: 12345
                </p>
            </div>
            <div class="social-media-section">
                <h3>Follow Us</h3>
                <ul class="social-media-links">
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Facebook</a></li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Twitter</a></li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                    <!-- Add more social media links as needed -->
                </ul>
            </div>
        </div>

        </head>
        <body>

    </section>
@endsection
