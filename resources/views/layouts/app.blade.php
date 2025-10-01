<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel CRUD Produk')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #f8fafc 0%, #e2e8f0 100%);
            color: #22223b;
            font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
        }
        .card-modern {
            border-radius: 18px;
            box-shadow: 0 4px 24px 0 rgba(34,34,59,0.07);
            background: #fff;
            border: none;
        }
        .btn-primary, .btn-success, .btn-warning, .btn-danger, .btn-secondary {
            border-radius: 8px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }
        .table-modern th {
            background: #f1f5f9;
            color: #22223b;
            border: none;
        }
        .table-modern td {
            vertical-align: middle;
            border-top: 1px solid #e2e8f0;
        }
        .navbar {
            border-radius: 0 0 18px 18px;
            box-shadow: 0 2px 12px 0 rgba(34,34,59,0.04);
        }
        .pagination .page-link {
            border-radius: 6px !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Produk App</a>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
