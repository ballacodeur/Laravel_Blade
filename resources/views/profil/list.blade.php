@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liste des profils') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                {{-- Ajoutez ici les en-têtes pour les autres colonnes --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profils as $profil)
                            <tr>
                                <th scope="row">{{ $profil->id }}</th>
                                <td>{{ $profil->nom }}</td>
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
