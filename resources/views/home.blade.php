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
                <p>Virat Kohli is an Indian international cricketer and the former captain of the Indian national cricket team. He currently represents Royal Challengers Bangalore in the IPL and Delhi in domestic cricket. He is widely regarded as one of the greatest batsmen in the history of the sport. He is the highest run scorer in T20I and IPL. In 2020, the International Cricket Council named him the male cricketer of the decade. Kohli is currently fourth-highest run-scorer in international cricket and stands second in the list of most international centuries scored. He also holds the record for scoring the most centuries in One Day International cricket. Kohli was a member of the Indian team that won the 2011 Cricket World Cup and 2013 ICC Champions Trophy.
<br>
                In 2016, he was ranked as one of the world's most famous athletes by ESPN, and one of the most valuable athlete brands by Forbes. In 2018, Time magazine included him on its list of the 100 most influential people in the world. In 2020, he was ranked 66th in Forbes list of the top 100 highest-paid athletes in the world for the year 2020 with estimated earnings of over $26 million. Kohli has been deemed one of the most commercially viable cricketers, with estimated earnings of ₹165 crore (US$21 million) in the year 2022.
                </p>
            </div>
            <div class="home-image">
                <img src="{{ asset('images\virat2.jpg') }}" alt="Home Image">
            </div>
        </div>
    </body>
</html>
</section>
@endsection
