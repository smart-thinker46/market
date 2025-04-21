<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $Heading ?? 'Dashboard' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen">

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 min-h-screen bg-white/80 backdrop-blur-xl shadow-2xl border-r border-gray-200">
            <div class="p-6 text-3xl font-bold text-blue-700 tracking-tight border-b border-gray-100">
                HR Manager
            </div>
            <nav class="p-6 space-y-4 text-gray-700 font-medium">
                <a href="#" class="flex items-center gap-3 hover:text-blue-600 transition-all">
                    <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center gap-3 hover:text-blue-600 transition-all">
                    <span>Employees</span>
                </a>
                <a href="#" class="flex items-center gap-3 hover:text-blue-600 transition-all">
                    <span>Payroll</span>
                </a>
                <a href="#" class="flex items-center gap-3 hover:text-blue-600 transition-all">
                    <span>Leaves</span>
                </a>
                <a href="#" class="flex items-center gap-3 hover:text-blue-600 transition-all">
                    <span>Performance</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">
            <h1 class="text-3xl font-semibold text-gray-800 mb-8">
                {{ $Heading ?? 'Dashboard' }}
            </h1>

            {{ $slot }}
        </main>
    </div>

</body>
</html>
