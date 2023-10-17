@include('template.include.css')
@include('template.include.sidebar')
@include('template.include.header')


<!DOCTYPE html>
<html>

<head>
    <!-- Include necessary CSS and JavaScript libraries here -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatablesSimple').DataTable();
        });
    </script>
</head>

<body>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tables</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>
                <div class="card mb-4">
                    
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Menu
                    </div>
                    
                    <link rel="stylesheet" type="text/css" href="styles.css">
                </head>
                <body>
                    <div class="text-right"> <!-- Menggunakan Bootstrap class 'text-right' untuk perataan ke kanan -->
                        <button type="button" class="btn btn-primary">Tambah</button>
                    </div>
                    

                    <div class="card-body">
                        <table id="datatablesSimple" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>kode_menu</th>
                                    <th>nama_menu</th>
                                    <th>deskripsi</th>
                                    <th>harga</th>
                                    <th>gambar</th>

                                </tr>
                            </thead>
                            <tbody>
                        
                                @foreach ($menus as $index => $menu)
                                    
                                <tr>
                                    
                                    <td>{{ $menu->kode_menu }}</td>
                                    <td>{{ $menu->nama_menu }}</td>
                                    <td>{{ $menu->deskripsi }}</td>
                                    <td>{{ $menu->harga }}</td>
                                    <td>{{ $menu->gambar }}</td>
                                    <td>
                                        <a href="/template/{{ $menu->kode_menu }}/edit_menu" class="btn btn-success">
                                            <i class="fas fa-edit"></i> Edit </a>
                                    
                                        <form action="/template/{{ $menu->kode_menu }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i> Delete </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
