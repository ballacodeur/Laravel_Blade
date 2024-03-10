@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier un pointage') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pointages.update', $pointage->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('Utilisateur') }}</label>

                            <div class="col-md-6">
                                <select id="user_id" class="form-control @error('user_id') is-invalid @enderror" name="user_id" required>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" @if ($pointage->user_id == $user->id) selected @endif>{{ $user->nom }}</option>
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
                            <label for="heure_pointage" class="col-md-4 col-form-label text-md-right">{{ __('Heure de pointage') }}</label>

                            <div class="col-md-6">
                                <input id="heure_pointage" type="datetime-local" class="form-control @error('heure_pointage') is-invalid @enderror" name="heure_pointage" value="{{ old('heure_pointage', $pointage->heure_pointage) }}" required>

                                @error('heure_pointage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
