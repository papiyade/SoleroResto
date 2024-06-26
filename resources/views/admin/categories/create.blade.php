@extends('layouts.app_admin')

@section('title', 'Créer une Catégorie')

@section('content')
    <div class="container">

                <div class="card" style="width: 60%;">
                    <div class="card-header">Créer une Catégorie</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom de la catégorie" value="{{ old('name') }}">
                            </div>
                            <div class="form-group mt-3">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Entrez la description de la catégorie">{{ old('description') }}</textarea>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Créer</button>


                            </div>
                        </form>
                    </div>
                </div>

    </div>
@endsection
