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
    </head>
    <body>
            
    <div class="contact-content">
            <h2>Contact</h2>
            <p>If you have any questions or would like to get in touch, please use the contact form below.</p>
            <form action="#" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </body>
    </html>
    </section>
@endsection
