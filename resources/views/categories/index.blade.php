@extends('master.layout')

@section('content')
<div class="container mt-5">
    <!-- Judul Halaman -->
    <h1 class="mb-4 text-center font-weight-bold">Daftar Kategori</h1>

    <!-- Tombol Tambah Kategori -->
    <div class="text-right mb-3">
        <a href="{{ route('categories.create') }}" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Tambah Kategori
        </a>
    </div>

    <!-- Tabel Daftar Kategori -->
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="text-center">
                            <!-- Tombol Edit -->
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-warning" title="Edit">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                    <i class="fas fa-trash-alt"></i>
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="pagination-wrapper">
                {{ $categories->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Menambahkan FontAwesome -->
@section('scripts')
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection
