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
                <img src="{{ asset('images\virat4.jpg') }}" alt="About Image">
            </div>
            <div class="about-text">
                <h2>About Virat Kohli</h2>
                <p>
                He has received many accolades for his performances on the cricket field. He was recognized as the ICC ODI Player of the Year in 2012 and has won the Sir Garfield Sobers Trophy, given to the ICC Cricketer of the Year, on two occasions, in 2017 and 2018 respectively. Subsequently, Kohli also won ICC Test Player of the Year and ICC ODI Player of the Year awards in 2018, becoming the first player to win both awards in the same year. Also, he was named the Wisden Leading Cricketer in the World for three consecutive years, from 2016 to 2018. At the national level, Kohli was honoured with the Arjuna Award in 2013, the Padma Shri under the sports category in 2017 and the Khel Ratna award, India's highest sporting honour, in 2018.
                In 2016, he was ranked as one of the world's most famous athletes by ESPN, and one of the most valuable athlete brands by Forbes. In 2018, Time magazine included him on its list of the 100 most influential people in the world. In 2020, he was ranked 66th in Forbes list of the top 100 highest-paid athletes in the world for the year 2020 with estimated earnings of over $26 million. Kohli has been deemed one of the most commercially viable cricketers, with estimated earnings of ₹165 crore (US$21 million) in the year 2022.
                </p>
            </div>
        </div>
    </body>
 </html>
 </section>
@endsection
