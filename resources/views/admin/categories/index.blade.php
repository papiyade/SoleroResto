@extends('layouts.app_admin')

@section('title', 'Liste des Catégories')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title" style="font-size: 28px;">Liste des Catégories</h4>
                    <a href="{{ route('admin.categories.create') }}">
                        <button type="button" class="btn btn-success">
                            <span class="btn-icon-start text-info">
                                <i class="fa fa-plus color-info"></i>
                            </span>
                            Ajouter
                        </button>
                    </a>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table id="categoriesTable" class="display table table-striped" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox{{ $category->id }}" required="">
                                                <label class="form-check-label" for="customCheckBox{{ $category->id }}"></label>
                                            </div>
                                        </td>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}" class="btn btn-primary btn-sm" title="Modifier">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <form id="delete-category-form-{{ $category->id }}" action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm sweet-confirm" data-id="{{ $category->id }}" title="Supprimer">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
    <script>
        $(document).ready(function() {
            $('#categoriesTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
                }
            });
        });
    </script>
@endsection
