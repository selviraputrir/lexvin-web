<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages - Inventra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-inter { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#F3F4F6]">

    <div class="flex h-screen overflow-hidden">

        @include('admin.navbar') 

        <div class="flex-1 flex flex-col min-w-0">
            
            <header class="h-20 bg-white border-b border-gray-200 flex items-center justify-between px-8 z-10 sticky top-0">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Contact Messages</h1>
                </div>

                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-3 pl-6 border-l border-gray-200">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-bold text-gray-800">User Admin</p>
                            <p class="text-xs text-gray-500">Super Admin</p>
                        </div>
                        <img src="/image/0.jpg" alt="User" class="w-10 h-10 rounded-full border-2 border-white shadow-sm ring-2 ring-gray-100">
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto bg-[#F3F4F6] p-8 font-inter">
                <div class="max-w-7xl mx-auto">
                    
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden mt-4">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                
                                <thead class="bg-gray-50/50 border-b border-gray-100">
                                    <tr>
                                        <th class="p-5 text-[10px] font-bold uppercase text-gray-400">Name</th>
                                        <th class="p-5 text-[10px] font-bold uppercase text-gray-400">Email</th>
                                        <th class="p-5 text-[10px] font-bold uppercase text-gray-400">Phone Number</th>
                                        <th class="p-5 text-[10px] font-bold uppercase text-gray-400">Message</th>
                                        <th class="p-5 text-[10px] font-bold uppercase text-gray-400 text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($contacts as $contact) 
                                    <tr class="hover:bg-gray-50/50 transition-colors border-b border-gray-50 last:border-none">
                                        <td class="p-5 text-sm font-bold text-gray-800">{{ $contact->name }}</td>
                                        
                                        <td class="p-5 text-sm text-blue-900 font-semibold italic">{{ $contact->email }}</td>
                                        
                                        <td class="p-5 text-sm font-semibold text-gray-700">{{ $contact->phone_number }}</td>
                                        
                                        <td class="p-5 text-sm text-gray-600">{{ $contact->message }}</td>
                                        
                                        <td class="px-6 py-4 text-center">
                                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?');">
                                                @csrf
                                               
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div> @method('DELETE')
                                                <button type="submit" class="bg-[#C81E1E] hover:bg-red-800 text-white font-medium py-2 px-6 rounded shadow-sm transition duration-200 lowercase">
                                                    delete
                                                </button>
                    </div>

                </div>
            </main>
        </div>
    </div>

</body>
</html>