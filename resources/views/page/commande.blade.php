@extends('layouts.container')
@section('content')
    <table class="table table-bordered data-table w-100">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Produit</th>
                <th>Montant</th>
                <th>Client</th>
                <th>Paiement </th>
                <th>Livraison</th>
                <th></th>
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
                ajax: "{{ route('commande') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'Numero',
                        name: 'Numero'
                    },
                    {
                        data: 'Date',
                        name: 'Date'
                    },
                    {
                        data: 'Heure',
                        name: 'Heure'
                    },
                    {
                        data: 'Produit',
                        name: 'Produit'
                    },
                    {
                        data: 'Montant',
                        name: 'Montant'
                    },
                    {
                        data: 'Client',
                        name: 'Client'
                    },
                    {
                        data: 'Paiement',
                        name: 'Paiement'
                    },
                    {
                        data: 'Livraison',
                        name: 'Livraison'
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
