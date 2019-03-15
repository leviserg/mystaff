@extends('layouts.app')
@section('content')
            <div class="container">
                <table class="table table-bordered" id="data-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Place</th>
                            <th>Name</th>
                            <th>Salary</th>
                            <th>Empl.Date</th>
                            <th>Boss</th>
                            <th>ImgUrl</th>
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
                    { data: 'place_name', name: 'place_name' },
                    { data: 'name', name: 'name' },
                    { data: 'salary', name: 'salary' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'chief_name', name: 'chief_name' },
                    { data: 'avatar', name: 'avatar' }
                ]
            });
        });
    </script>
@endpush