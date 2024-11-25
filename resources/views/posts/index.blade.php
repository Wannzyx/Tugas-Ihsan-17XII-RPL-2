@extends('master.layout')

@section('content')
<div class="container" style="padding-top: 100px;">
    <h1 class="mb-4 text-white">Daftar Postingan</h1>
    
    <!-- Tombol Tambah Postingan -->
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3 shadow-sm">
        <i class="fas fa-plus-circle"></i> <strong>Tambah Postingan</strong>
    </a>

    <!-- Tabel Daftar Postingan -->
    <div class="table-responsive">
        <table class="table table-hover table-bordered text-white">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        @if ($post->image)
                            <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded" style="max-width: 100px;">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <!-- Detail Button -->
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-info mx-1 shadow-sm" title="Lihat Detail">
                            <i class="fas fa-eye"></i> <strong>Detail</strong>
                        </a>

                        <!-- Edit Button -->
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning mx-1 shadow-sm" title="Edit Postingan">
                            <i class="fas fa-edit"></i> <strong>Edit</strong>
                        </a>

                        <!-- Delete Button -->
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mx-1 shadow-sm" title="Hapus Postingan" onclick="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">
                                <i class="fas fa-trash-alt"></i> <strong>Hapus</strong>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div class="pagination-wrapper mt-3">
        {{ $posts->links() }}
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection

<!-- Custom Styling -->
<style>
    /* Container Styling */
    .container {
        margin-top: 50px;
    }

    /* Table Styling */
    .table {
        background-color: #2c2f38;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
        text-align: center;
        vertical-align: middle;
        padding: 12px;
    }

    .thead-dark th {
        background-color: #343a40;
        color: white;
    }

    /* Image Styling */
    .img-fluid {
        border-radius: 5px;
    }

    /* Button Styling */
    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #e0a800;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #c82333;
    }

    /* Pagination Styling */
    .pagination-wrapper .pagination {
        justify-content: center;
    }

    .pagination-wrapper .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
    }

    .pagination-wrapper .pagination .page-link {
        color: #007bff;
    }

    .pagination-wrapper .pagination .page-item:hover .page-link {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    /* Button Shadow */
    .btn {
        border-radius: 5px;
        padding: 8px 16px;
        font-weight: 600;
        transition: all 0.3s ease-in-out;
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>
