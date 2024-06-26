{{-- @extends('layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Modifier un plat</div>

                    <div class="card-body">

                            <form action="{{ route('admin.plats.update', $plat) }}" method="POST">

                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Nom :</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $plat->name }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description :</label>
                                <textarea name="description" id="description" class="form-control">{{ $plat->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">Prix :</label>
                                <input type="text" name="price" id="price" class="form-control" value="{{ $plat->price }}">
                            </div>

                            <div class="form-group">
                                <label for="availability">Disponibilité :</label>
                                <select name="availability" id="availability" class="form-control">
                                    <option value="available" {{ $plat->availability === 'available' ? 'selected' : '' }}>Disponible</option>
                                    <option value="unavailable" {{ $plat->availability === 'unavailable' ? 'selected' : '' }}>Non disponible</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="category">Catégorie :</label>
                                <select name="category_id" id="category" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $plat->category_id === $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <a href="{{ route('admin.plats.index') }}" class="btn btn-secondary">Retour</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}


@extends('layouts.app_admin')

@section('title', 'Modifier Plat')

@section('content')
<div class="container">
    <h2>Modifier le plat "{{ $plat->name }}"</h2>
    <form action="{{ route('admin.plats.update', $plat) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="font-italic" for="name">Nom du Plat</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $plat->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description">{{ $plat->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" name="price" id="price" value="{{ $plat->price }}" required>
        </div>
        <div class="form-group">
            <label for="availability">Disponibilité</label>
            <select class="form-control" name="availability" id="availability" required>
                <option value="available" {{ $plat->availability == 'available' ? 'selected' : '' }}>Disponible</option>
                <option value="unavailable" {{ $plat->availability == 'unavailable' ? 'selected' : '' }}>Non disponible</option>
            </select>
        </div>
        <div class="form-group">
            <label for="category_id">Catégorie</label>
            <select class="form-control" name="category_id" id="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $plat->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Mettre à jour le plat</button>
    </form>
</div>
@endsection
