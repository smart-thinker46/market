<x-layout>
    <x-slot:Heading>
        Dashboard
    </x-slot:Heading>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Widget Card -->
        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Employees</p>
            <p class="text-3xl font-extrabold text-blue-700 mt-1">120</p>
        </div>

        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Pending Leaves</p>
            <p class="text-3xl font-extrabold text-yellow-600 mt-1">8</p>
        </div>

        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Monthly Payroll</p>
            <p class="text-3xl font-extrabold text-green-600 mt-1">Ksh 1.2M</p>
        </div>

        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Resigned</p>
            <p class="text-3xl font-extrabold text-red-600 mt-1">2</p>
        </div>
    </div>

    <div class="grid grid-cols-10  lg:grid-cols-1 gap-10">
        <!-- Recent Employees -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="px-6 py-4 border-b border-gray-200 font-medium flex items-center">
                <i class="fas fa-users mr-2"></i>
                Recent Employees
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Department</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Join Date</th>
                            </tr>
                        </thead>
                        {{--<tbody class="bg-white divide-y divide-gray-200">
                            @forelse($recentEmployees as $employee)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->employee_id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->department }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->join_date }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">No recent employees</td>
                                </tr>
                            @endforelse
                        </tbody>--}}
                </div>
                <div class="mt-4">
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                        View All Employees
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Leave Requests -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="px-6 py-4 border-b border-gray-200 font-medium flex items-center">
                <i class="fas fa-calendar-alt mr-2"></i>
                Recent Leave Requests
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">From</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                    {{--<tbody class="bg-white divide-y divide-gray-200">
                            @forelse($recentEmployees as $employee)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->employee_id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->department }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->join_date }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">No recent employees</td>
                                </tr>
                            @endforelse
                        </tbody>--}}
                    </table>
                </div>
                <div class="mt-4">
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                        View All Leaves
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-layout>
