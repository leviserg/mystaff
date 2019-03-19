@extends('layouts.app')
@section('content')
            <div class="container">
                <table class="table table-bordered" id="data-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Level</th>
                            <th>Place</th>
                            <th>Name</th>
                            <th>Salary</th>
                            <th>Empl.Date</th>
                            <th>Boss</th>
                            <th>ImgUrl</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </main>
    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.getdata') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'place', name: 'place' },
                    { data: 'place_name', name: 'place_name' },
                    { data: 'name', name: 'name' },
                    { data: 'salary', name: 'salary' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'chief_name', name: 'chief_name' },
                    {
                        "data":{
                            "avatar":"avatar",
                        },
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<div class="text-centered"><img src=' + data.avatar + ' class="img-thumbnail" width="35" height="35"></img></div>';
                            }
                            return data;
                        }
                    },
                    { 
                        "data":{
                            "place":"place",
                            "id":"id"
                        },
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a class="btn btn-primary" href="/admin/' + data.place + '/'+ data.id +'">Edit</a>';
                            }
                            return data;
                        }
                    } 
                ],
                columnDefs:[
                    {
                        "searchable": false,
                        "targets": [0,1,2,6,7,8] 
                    },
                    {
                        "orderable":false,
                        "targets":[7,8]
                    },
                    {
                        "visible": false,
                        "targets": [1]
                    }
                ]
            });
        });
    </script>
@endpush