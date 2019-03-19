@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <div class="col-md-10">
             @foreach($data as $person)
            <div class="card">
                <div class="card-header">{{$person->placeName->place}} <b>{{$person->name}}</b></div>
                <div class="card-body">
                    <div class="col-md-10">
                        <form action="/admin/{{$person->place}}/{{$person->id}}" method="POST" class="form">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10">
                                        <label class="control-label">Person Place <b>{{$person->placeName->place}}</b></label>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{$person->avatar}}" class="pull-right img-responsive"/>
                                        <label for="user_image" class="ml-2"> Select Image </label>
                                            <input type="file" name="user_image" id="user_image"/>
                                        <span id="uploaded_img"></span>
                                    </div>
                                </div>
                                    <input name="curplace" style="display: none" value="{{$person->place}}">
                                    <input name="curid" style="display: none" value="{{$person->id}}">
                                <label for="personName" class="control-label">Name</label>
                                    <input type="text" name="personName" id="personId" class="form-control" value="{{$person->name}}"><br/>
                                <label for="personSal" class="control-label">Salary</label>
                                    <input type="number" name="personSal" id="personSal" class="form-control" value="{{$person->salary}}"><br/>
                                <label class="control-label">Employment Date</label>
                                    <p>{{$person->created_at}}</p>
                                    @if($person->placeName->id > 1)
                                <label class="control-label">Boss : {{$person->chiefName->name}}</label>
                                    <br/>
                                    @endif
                                <div class="mt-2 row">                       
                                    <div class="col-md-6">
                                        <a href="/admin" class="btn btn-success mr-2" style="width:30%">Back</a>
                                        <button type="submit" class="btn btn-info ml-2" style="width:30%">Change</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>        
@endsection
