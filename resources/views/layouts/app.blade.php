<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel CRUD Produk')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
\    <style>
        body {
            background: #fff;
            color: #22223b;
            font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
        }
        .main-card, .card-modern {
            border-radius: 22px;
            box-shadow: 0 6px 32px 0 rgba(34,68,59,0.10);
            background: #fff;
            border: 2px solid #e8f6ef;
            padding: 2.5rem 2rem 2rem 2rem;
            margin-top: 2.5rem;
            margin-bottom: 2.5rem;
            position: relative;
            z-index: 1;
        }
        .btn-primary {
            background: rgba(126, 214, 167, 0.85);
            color: #23443b;
            border: none;
            border-radius: 18px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 24px 0 rgba(126,214,167,0.18), 0 1.5px 6px 0 rgba(34,68,59,0.08);
            backdrop-filter: blur(2px);
            transition: background 0.2s, box-shadow 0.2s, transform 0.1s;
        }
        .btn-primary:hover, .btn-primary:focus {
            background: rgba(94, 203, 140, 0.95);
            color: #23443b;
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 8px 32px 0 rgba(126,214,167,0.22), 0 2px 8px 0 rgba(34,68,59,0.10);
        }
        .btn-success {
            background: #4ecb71;
            border: none;
            border-radius: 18px;
        }
        .btn-warning {
            background: #ffe066;
            border: none;
            color: #23443b;
            border-radius: 18px;
        }
        .btn-danger {
            background: #ff7675;
            border: none;
            border-radius: 18px;
        }
        .btn-secondary {
            background: #b6e2d3;
            border: none;
            color: #23443b;
            border-radius: 18px;
        }
        .table-modern th {
            background: #b6e2d3;
            color: #22223b;
            border: none;
        }
        .table-modern td {
            vertical-align: middle;
            border-top: 1px solid #a8e6cf;
        }
        .navbar {
            border-radius: 0 0 18px 18px;
            box-shadow: 0 2px 12px 0 rgba(34,34,59,0.04);
            background: #e8f6ef !important;
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
