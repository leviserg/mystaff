@extends('layouts.app')
@section('content')
<div class="container">
    <ul>
        @foreach($data as $row)
            @if($row->chiefName != null)
                <li>{{$row->placeName->place}}: <b>{{$row->name}}</b>, Salary: <b>{{$row->salary}}</b>, Employment: <b>{{$row->created_at}}</b>, boss: {{$row->chiefName->name}}</li>
            @else
                <li>{{$row->placeName->place}}: <b>{{$row->name}}</b>, Salary: <b>{{$row->salary}}</b>, Employment: <b>{{$row->created_at}}</b></li>
            @endif
        @endforeach
    </ul>
</div>
@endsection