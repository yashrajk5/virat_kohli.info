@extends('layout')

@section('title', 'About')

@section('content')

 <section id="about" class="about-section">
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <link rel="stylesheet" href="{{ asset('styles3.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body> 
        <div class="about-content">
            <div class="about-image">
                <img src="{{ asset('image\v1.jpg') }}" alt="About Image">
            </div>
            <div class="about-text">
                <h2>About [Personality Name]</h2>
                <p>
                    [Personality Name] is a remarkable individual known for [brief description of the personality]. 
                    With a passion for [specific interests or achievements], [he/she/they] have made significant contributions 
                    to [relevant fields or areas of expertise].
                </p>
            </div>
        </div>
    </body>
 </html>
 </section>
@endsection
