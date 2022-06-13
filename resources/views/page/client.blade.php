@extends('layouts.container')
@section('content')
    <table class="table table-bordered data-table w-100 ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Code Client</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Lien Facebook</th>
                <th>Identifiant Facebook</th>
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
                ajax: "{{ route('client') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'CodeClient',
                        name: 'CodeClient'
                    },
                    {
                        data: 'Nom',
                        name: 'Nom'
                    },
                    {
                        data: 'Prenom',
                        name: 'Prenom'
                    },
                    {
                        data: 'Age',
                        name: 'Age'
                    },
                    {
                        data: 'Contact',
                        name: 'Contact'
                    },
                    {
                        data: 'Lien',
                        name: 'Lien'
                    },
                    {
                        data: 'Identifiant',
                        name: 'Identifiant'
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
