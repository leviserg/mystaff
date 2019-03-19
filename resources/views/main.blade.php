@extends('layouts.app')
@section('content')
<div class="container">
    <ol type="1">
        @foreach($chiefs as $chief)
        <li><h3>{{$chief->placeName->place}}: <b>{{$chief->name}}</b>, Salary: <b>{{$chief->salary}}</b>, Employment: <b>{{$chief->created_at}}</b></h3>
            <ul>
                @foreach($deps[$chief->id-1] as $dep)
                    <li>
                        <h4>{{$dep->placeName->place}}: <b>{{$dep->name}}</b>, Salary: <b>{{$dep->salary}}</b>, Employment: <b>{{$dep->created_at}}</b>, Boss: {{$dep->chiefName->name}}</h4></li>
                @endforeach
            </ul>
        </li>
        @endforeach
    </ol>
</div>        
@endsection
