@extends('layouts.container')
@section('content')
    <table class="table table-bordered data-table w-100">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Désignation</th>
                <th>Description</th>
                <th>Prix</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection
@section('javascript')
    <script type="text/javascript">
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('tsena') }}",
                columns: [{
                        data: 'titre',
                        name: 'titre'
                    },
                    {
                        data: 'designation',
                        name: 'designation'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'prix',
                        name: 'prix'
                    },



                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

        });
    </script>
@endsection
