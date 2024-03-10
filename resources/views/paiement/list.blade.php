@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liste des paiements') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Utilisateur</th>
                                <th scope="col">Montant</th>
                                {{-- Ajoutez ici les en-têtes pour les autres colonnes --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paiements as $paiement)
                            <tr>
                                <th scope="row">{{ $paiement->id }}</th>
                                <td>{{ $paiement->user->nom }}</td>
                                <td>{{ $paiement->montant }}</td>
                                {{-- Ajoutez ici les cellules pour les autres colonnes --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
