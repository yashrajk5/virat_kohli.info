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
            <h2>Chronological History</h2>
            <ul class="timeline">
                <li>
                    <div class="timeline-date">Year 1</div>
                    <div class="timeline-event">
                        <h3>Event Title 1</h3>
                        <p>Description of the event and its significance.</p>
                    </div>
                </li>
                <li>
                    <div class="timeline-date">Year 2</div>
                    <div class="timeline-event">
                        <h3>Event Title 2</h3>
                        <p>Description of the event and its impact on [Personality Name].</p>
                    </div>
                </li>
                <!-- Add more timeline events as needed -->
            </ul>
        </div>
        </body>
        </html>
    </section>
@endsection