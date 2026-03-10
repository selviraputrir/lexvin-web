<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - LEXVIN</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-wine-red font-sans antialiased min-h-screen flex items-center justify-center">

    <div class="w-full max-w-sm px-6">
        
        <div class="text-center mb-6"> <img src="{{ asset('images/logo.png') }}" 
                 alt="LEXVIN Logo" 
                 class="h-8 w-auto mx-auto mb-3"> <p class="text-gold-accent text-[10px] uppercase tracking-widest">Admin Access Portal</p> </div>

        <div class="bg-ivory-white rounded-lg shadow-2xl p-6 border-t-4 border-[#B89B65]">
            <h2 class="text-xl font-serif font-bold text-[#451425] mb-5 text-center">Sign In</h2>

            @if ($errors->any())
                <div class="alert alert-danger mb-4 text-xs"> <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                
                <div class="form-group mb-3"> <label class="form-label text-xs">Email Address</label> <input type="email" name="email" class="form-input text-sm py-2" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="form-group mb-4">
                    <label class="form-label text-xs">Password</label>
                    <input type="password" name="password" class="form-input text-sm py-2" required>
                </div>

                <button type="submit" class="btn w-full mt-2 py-2 text-sm uppercase tracking-wide">
                    Login to Dashboard
                </button>
            </form>
        </div>

       
    </div>

</body>
</html>