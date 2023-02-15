@extends('layouts.main-layout')

@section('content')

    <h1>People</h1>

    <ul>
        @foreach ($people as $person)
            <li>
                <h3>{{ $person -> name }}</h3>
                Email: {{ $person -> mail }}
                <br>
                Phone: {{ $person -> personDetail -> phone }}
                <br>
                Address: {{ $person -> personDetail -> address }}
                <hr>

                @if ($person -> posts -> count() > 0)
                    <h3>Posts: {{ $person -> posts -> count() }} </h3>
                
                    <ul>
                        @foreach ($person -> posts as $post)
                            <li>
                                <b>{{ $post -> title }}</b> <br>
                                <div>{{ $post -> body }}</div>
                            </li>
                        @endforeach
                    </ul>
                @endif
                
                
            </li>
        @endforeach
    </ul>

    
@endsection