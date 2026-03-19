<!DOCTYPE html>
<html lang="id">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Lexvin</title>
     <link rel="icon" href="{{ asset('images/logo-lexvinlaw.jpeg') }}" type="image/jpeg">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .sidebar {
            background-color: #441425;
            min-height: 100vh;
            color: white;
        }

        .menu-utama {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .menu-utama:hover {
            background-color: #2c2c2c;
            color: white;
        }

        .menu-anak {
            color: #a7aaad;
            text-decoration: none;
            display: block;
            padding: 8px 15px 8px 40px;
            font-size: 14px;
        }

        .menu-anak:hover {
            color: #ffffff;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0 sidebar">
                <h4 class="text-center text-warning mt-4 mb-4"><b>Lexvin Law</b></h4>

                <a href="{{ route('admin.dashboard') }}" class="menu-utama">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                    </a>

                <a href="#menuPos" data-bs-toggle="collapse"
                    class="menu-utama d-flex justify-content-between mt-2">
                    <span><i class="bi bi-pin-angle-fill me-2"></i> Posts</span>
                    <i class="bi bi-chevron-down" style="font-size: 12px; margin-top: 5px;"></i>
                    </a>
                <div class="collapse" id="menuPos">
                    <div class="bg-dark py-2">
                        <a href="{{ route('admin.pos.index') }}" class="menu-anak">All Posts</a>
                        <a href="{{ route('admin.pos.create') }}" class="menu-anak">Add New</a>
                        </div>
                    </div>

                <a href="#menuTesti" data-bs-toggle="collapse"
                    class="menu-utama d-flex justify-content-between mt-2">
                    <span><i class="bi bi-chat-left-quote-fill me-2"></i> Testimonial</span>
                    <i class="bi bi-chevron-down" style="font-size: 12px; margin-top: 5px;"></i>
                    </a>
                <div class="collapse" id="menuTesti">
                    <div class="bg-dark py-2">
                        <a href="{{ route('admin.testimonial.index') }}" class="menu-anak">All Testimonial</a>
                        <a href="{{ route('admin.testimonial.create') }}"
                            class="menu-anak">Add New</a>
                        </div>
                    </div>

                <div class="px-3 mt-5">
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm w-100">
                            Logout
                            </button>
                        </form>
                    </div>
                </div>

            <div class="col-md-10 p-4" style="background-color: #f0f2f5;">
                @yield('content')
                </div>

            </div>
        </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>


