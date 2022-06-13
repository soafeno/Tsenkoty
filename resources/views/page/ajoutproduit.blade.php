@extends('layouts.container')
@section('content')
    <div class="container">
        <div class="row">
            <div class="form-group">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <form action="{{ $data ? route('ModifierArticle', ['id' => $data]) : route('ajoutArticle') }}" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label" for="disabledInput">Titre</label>
                            <input class="form-control" id="disabledInput" type="text" name="title"
                                value="{{ $data ? $data->title : '' }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="disabledInput">Désignation</label>
                            <input class="form-control" id="disabledInput" type="text" name="designation"
                                value="{{ $data ? $data->designation : '' }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="disabledInput">Description</label>
                            <textarea class="form-control" name="description" value="{{ $data ? $data->description : '' }}"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="disabledInput">Prix</label>
                            <input class="form-control" id="disabledInput" type="text" name="prix"
                                value="{{ $data ? $data->prix : '' }}">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit"
                                class="btn btn-{{ $data ? 'warning' : 'success' }} btn-lg">{{ $data ? 'Modifier' : 'Ajouter' }}</button>
                        </div>
                    </div>

                </div>
            </form>
        @endsection
