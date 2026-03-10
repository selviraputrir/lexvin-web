<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Inventra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#F3F4F6]">

    <div class="flex h-screen overflow-hidden">

  @include('admin.navbar')


        <div class="flex-1 flex flex-col min-w-0">
            
            <header class="h-20 bg-white border-b border-gray-200 flex items-center justify-between px-8 z-10 sticky top-0">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
                
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

            <main class="flex-1 overflow-y-auto p-8 bg-[#F3F4F6]">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                    <a href="/messages" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group block">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl group-hover:bg-amber-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>
                            <span class="bg-red-500 text-white text-[10px] font-bold px-2 py-1 rounded-lg">New</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Contact Messages</h3>
                        <div class="flex justify-between items-end mt-2">
                            <p class="text-sm text-gray-500">Inbox & Inquiries</p>
                            <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-amber-600 group-hover:bg-amber-50 transition-colors">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </a>

                    <a href="/regulatormobile" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group block">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-xl group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Mobile</h3>
                        <div class="flex justify-between items-end mt-2">
                            <p class="text-sm text-gray-500">Mobile Devices</p>
                            <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-indigo-600 group-hover:bg-indigo-50 transition-colors">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </a>

                    <a href="/regulatortab" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group block">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center text-xl group-hover:bg-cyan-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-tablet-screen-button"></i>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Tablet</h3>
                        <div class="flex justify-between items-end mt-2">
                            <p class="text-sm text-gray-500">Tabs & iPads</p>
                            <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-cyan-600 group-hover:bg-cyan-50 transition-colors">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </a>

                    <a href="/regulatorlaptop" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group block">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-laptop"></i>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Laptop</h3>
                        <div class="flex justify-between items-end mt-2">
                            <p class="text-sm text-gray-500">Portable Computers</p>
                            <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-blue-600 group-hover:bg-blue-50 transition-colors">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </a>

                    <a href="/regulatorcamera" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group block">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-xl group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-camera"></i>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Camera</h3>
                        <div class="flex justify-between items-end mt-2">
                            <p class="text-sm text-gray-500">Photography Gear</p>
                            <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-purple-600 group-hover:bg-purple-50 transition-colors">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </a>

                    <a href="/regulatorgame" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group block">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center text-xl group-hover:bg-rose-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-gamepad"></i>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Gaming</h3>
                        <div class="flex justify-between items-end mt-2">
                            <p class="text-sm text-gray-500">Consoles & Acc</p>
                            <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-rose-600 group-hover:bg-rose-50 transition-colors">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </a>

                    <a href="/regulatorcomputer" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group block">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-xl bg-slate-50 text-slate-600 flex items-center justify-center text-xl group-hover:bg-slate-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-desktop"></i>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Computer</h3>
                        <div class="flex justify-between items-end mt-2">
                            <p class="text-sm text-gray-500">Desktop & PC</p>
                            <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-slate-600 group-hover:bg-slate-50 transition-colors">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </a>

                    <a href="/regulatorsmarttv" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group block">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center text-xl group-hover:bg-orange-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-tv"></i>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Smart TV</h3>
                        <div class="flex justify-between items-end mt-2">
                            <p class="text-sm text-gray-500">Home Entertainment</p>
                            <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-orange-600 group-hover:bg-orange-50 transition-colors">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </a>

                    <a href="/regulatorsmartphone" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group block">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-xl group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Smartphone</h3>
                        <div class="flex justify-between items-end mt-2">
                            <p class="text-sm text-gray-500">Mobile Devices</p>
                            <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-indigo-600 group-hover:bg-indigo-50 transition-colors">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </a>

                    <a href="/regulatorspeaker" class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group block">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-xl bg-yellow-50 text-yellow-600 flex items-center justify-center text-xl group-hover:bg-yellow-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-volume-high"></i>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Speaker</h3>
                        <div class="flex justify-between items-end mt-2">
                            <p class="text-sm text-gray-500">Audio Systems</p>
                            <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-yellow-600 group-hover:bg-yellow-50 transition-colors">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </div>
                        </div>
                    </a>

                </div>
            </main>
        </div>
    </div>

</body>
</html>