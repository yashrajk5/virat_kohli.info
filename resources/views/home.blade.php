@extends('layout')

@section('title', 'Home')

@section('content')
<section id="home" class="home-section">
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('styles2.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="home-content">
            <div class="home-text">
                <h2>Virat Kohli</h2>
                <p>Virat Kohli is an Indian international cricketer and the former captain of the Indian national cricket team. He currently represents Royal Challengers Bangalore in the IPL and Delhi in domestic cricket. Kohli is widely regarded as one of the greatest batsmen in the history of the sport.[3] He is the highest run scorer in T20I and IPL. In 2020, the International Cricket Council named him the male cricketer of the decade. Kohli is currently fourth-highest run-scorer in international cricket and stands second in the list of most international centuries scored. He also holds the record for scoring the most centuries in One Day International cricket. Kohli was a member of the Indian team that won the 2011 Cricket World Cup and 2013 ICC Champions Trophy.</p>
            </div>
            <div class="home-image">
                <img src="{{ asset('images\virat2.jpg') }}" alt="Home Image">
            </div>
        </div>
    </body>
</html>
</section>
@endsection
