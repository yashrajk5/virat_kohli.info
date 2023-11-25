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
                <!-- Replace 'path/to/your/details-image.jpg' with the actual path to your details image file -->
                <img src="{{ asset('images\award.jpg') }}" alt="Details Image">
            </div>
            <div class="text-section">
            <h2>Virat Kohli Awards</h2>
                <p>
                    <br>
                    :Sir Garfield Sobers Trophy (ICC Cricketer of the Year): 2017, 2018
                    <br>
                    :ICC ODI Player of the Year: 2012, 2017
                    <br>
                    :ICC Test Team of the Year: 2017 (captain)
                    <br>
                    :Padma Shri: 2017
                    <br>
                    :ICC ODI Team of the Year: 2012, 2014, 2016 (Captain), 2017 (Captain)
                    <br>
                    :Arjuna Award: 2013
                    <br>
                    :Rajiv Gandhi Khel Ratna: 2018
                    <br>
                    :Sir Garfield Sobers Award for ICC Men’s Cricketer of the Decade(2010-2020)
                    <br>

                <h2>Records</h2>
                <br>
                :Virat Kohli records
                <br>
                :Virat Kohli is the only Indian batsman who got 890 rating points in the ICC ODI ranking. Previously Sachin Tendulkar got the best rating of 887 in 1998.
                <br>
                :Virat Kohli has the record of having the highest ICC rating points (922) in the ICC Player Rankings for Test Batsmen.
                <br>
                :Virat Kohli scored six double-centuries as a captain in test matches. He surpassed Cricket legend Brian Lara, who had five double centuries as a test captain.
                <br>
                :Virat Kohli has the most number of 150+ scores as captain in Tests – 9 times.
                <br>
                :Virat Kohli became the first player to hit consecutive 3 centuries in against two opponents (West Indies & Sri Lanka).
                <br>
                :Kolhi is the most successful Indian ODI captain. Kohli’s success rate is 75.89% as a captain which is better than M.S. Dhoni.
                <br>
                :Virat Kohli scored more than 20,000 runs at an average of over 50 in all formats -Test matches, One Day Internationals, and T-20 matches.
                <br>
                :Rahul Dravid scored 10,000 ODI runs after playing 10 years, 317 days while Kohli achieved this by playing just 10 years and 68 days.
 
                </p>
            </div>
        </div>
        </body>
        </html>
    </section>
@endsection
