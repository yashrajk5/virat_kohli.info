@extends('layout')

@section('title', 'History')

@section('content')
    <section id="history" class="history-section">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <link rel="stylesheet" href="{{ asset('styles4.css') }}">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        
        <div class="history-content">
            <div class="image-section">
                <!-- Replace 'path/to/your/history-image.jpg' with the actual path to your history image file -->
                <img src="{{ asset('images\Virat3.jpg') }}" alt="History Image">
            </div>
            <div class="text-section">
                <h2>History</h2>
                <p>
                    Born and raised in New Delhi, Kohli trained at the West Delhi Cricket Academy and started his youth career with the Delhi Under-15 team. He made his international debut in 2008 and quickly became a key player in the ODI team. He made his T20I debut in 2010 and later made scoring his Test debut in 2011. In 2013, Kohli reached the number one spot in the ICC rankings for ODI batsmen for the first time. During 2014 T20 World Cup, he set a record for the most runs scored in the tournament. In 2018, he achieved yet another milestone, becoming the world's top-ranked Test batsman, making him the only Indian cricketer to hold the number one spot in all three formats of the game. His form continued in 2019, when he became the first player to score 20,000 international runs in a single decade. In 2021, Kohli made the decision to step down as the captain of the Indian national team for T20Is, following the T20 World Cup and in early 2022 he stepped down as the captain of the Test team as well..</p>
                <p>
                   
                </p>
            </div>
        </div>

        </body>
        </html>

    </section>
@endsection
