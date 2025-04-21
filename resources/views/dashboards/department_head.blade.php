<x-layout>
    <x-slot:Heading>
        Department Dashboard
    </x-slot:Heading>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <!-- Widget Cards -->
        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Department Employees</p>
            <p class="text-3xl font-extrabold text-blue-700 mt-1">3</p>
        </div>

        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Pending Leaves</p>
            <p class="text-3xl font-extrabold text-yellow-600 mt-1">4</p>
        </div>

        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Training Scheduled</p>
            <p class="text-3xl font-extrabold text-green-600 mt-1">6</p>
        </div>

        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Performance Reviews</p>
            <p class="text-3xl font-extrabold text-purple-600 mt-1">5</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Department Employees -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="px-6 py-4 border-b border-gray-200 font-medium flex items-center">
                <i class="fas fa-users mr-2"></i>
                Department Employees
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Position</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Join Date</th>
                            </tr>
                        </thead>
                        {{--<tbody class="bg-white divide-y divide-gray-200">
                            @forelse($departmentEmployees as $employee)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->employee_id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->position }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $employee->join_date }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">No employees in your department</td>
                                </tr>
                            @endforelse
                        </tbody>--}}
                    </table>
                </div>
            </div>
        </div>

        <!-- Pending Leave Requests -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="px-6 py-4 border-b border-gray-200 font-medium flex items-center">
                <i class="fas fa-calendar-alt mr-2"></i>
                Pending Leave Requests
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">From</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        {{--<tbody class="bg-white divide-y divide-gray-200">
                            @forelse($pendingLeaves as $leave)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $leave->employee_name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $leave->leave_type }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $leave->start_date }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div class="flex space-x-2">
                                            <form action="{{ route('leaves.approve', $leave->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="text-green-600 hover:text-green-900">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('leaves.reject', $leave->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="text-red-600 hover:text-red-900">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">No pending leave requests</td>
                                </tr>
                            @endforelse
                        </tbody>--}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
