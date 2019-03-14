@extends('layouts.app')
@section('content')
<div class="container">
    <ol type="1">
        @foreach($chiefs as $chief)
        <li><h3>{{$chief->placeName->place}}: <b>{{$chief->name}}</b>, Salary: <b>{{$chief->salary}}</b>, Employment: <b>{{$chief->created_at}}</b></h3>
            <ul>
                @foreach($deps[$chief->id-1] as $dep)
                <li><h4>{{$dep->placeName->place}}: <b>{{$dep->name}}</b>, Salary: <b>{{$dep->salary}}</b>, Employment: <b>{{$dep->created_at}}</b>, Boss: {{$dep->chiefName->name}}</h4>
                    <ul>
                        @foreach($mgrs[$dep->id-1] as $mgr)
                        <li><h5>{{$mgr->placeName->place}}: <b>{{$mgr->name}}</b>, Salary: <b>{{$mgr->salary}}</b>, Employment: <b>{{$mgr->created_at}}</b>, Boss: {{$mgr->chiefName->name}}</h5>
                            <ul>
                                @foreach($engs[$mgr->id-1] as $eng)
                                <li><h6>{{$eng->placeName->place}}: <b>{{$eng->name}}</b>, Salary: <b>{{$eng->salary}}</b>, Employment: <b>{{$eng->created_at}}</b>, Boss: {{$eng->chiefName->name}}</h6>
                                    <ul>
                                        @foreach($prgs[$eng->id-1] as $prg)
                                        <li><i>{{$prg->placeName->place}}: <b>{{$prg->name}}</b>, Salary: <b>{{$prg->salary}}</b>, Employment: <b>{{$prg->created_at}}</b>, Boss: {{$prg->chiefName->name}}</i></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </li>
        @endforeach
    </ol>
</div>        
@endsection
