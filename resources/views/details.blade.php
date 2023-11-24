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
            <h2>Details</h2>
            <div class="details-category">
                <h3>Books</h3>
                <ul>
                    <li><a href="#">Book Title 1</a></li>
                    <li><a href="#">Book Title 2</a></li>
                    <!-- Add more book titles as needed -->
                </ul>
            </div>
            <div class="details-category">
                <h3>Awards</h3>
                <ul>
                    <li>Award Title 1</li>
                    <li>Award Title 2</li>
                    <!-- Add more awards as needed -->
                </ul>
            </div>
            <div class="details-category">
                <h3>News Articles</h3>
                <ul>
                    <li><a href="#">News Article 1</a></li>
                    <li><a href="#">News Article 2</a></li>
                    <!-- Add more news articles as needed -->
                </ul>
            </div>
        </div>
        </body>
        </html>
    </section>
@endsection