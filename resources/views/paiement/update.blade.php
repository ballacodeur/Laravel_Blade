@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier un paiement') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('paiements.update', $paiement->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('Utilisateur') }}</label>

                            <div class="col-md-6">
                                <select id="user_id" class="form-control @error('user_id') is-invalid @enderror" name="user_id" required>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" @if ($paiement->user_id == $user->id) selected @endif>{{ $user->nom }}</option>
                                    @endforeach
                                </select>

                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="montant" class="col-md-4 col-form-label text-md-right">{{ __('Montant') }}</label>

                            <div class="col-md-6">
                                <input id="montant" type="number" step="0.01" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant', $paiement->montant) }}" required>

                                @error('montant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Ajoutez ici les champs restants --}}

                        <div class="form-group row mb-0">
                            <
