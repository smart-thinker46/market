<!-- resources/views/dashboards/employee.blade.php -->
<x-layout>
    <x-slot:Heading>
        Employee Dashboard
    </x-slot:Heading>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <!-- Widget Cards -->
        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Leave Balance</p>
            <p class="text-3xl font-extrabold text-blue-700 mt-1">1</p>
        </div>

        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Upcoming Trainings</p>
            <p class="text-3xl font-extrabold text-green-600 mt-1">recruit</p>
        </div>

        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Performance Score</p>
            <p class="text-3xl font-extrabold text-purple-600 mt-1">20%</p>
        </div>

        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-6 border border-gray-200">
            <p class="text-sm text-gray-500">Payslips</p>
            <p class="text-3xl font-extrabold text-yellow-600 mt-1">Ksh20,00</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Leave History -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="px-6 py-4 border-b border-gray-200 font-medium flex items-center">
                <i class="fas fa-calendar-alt mr-2"></i>
                Leave History
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">From</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">To</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        {{--<tbody class="bg-white divide-y divide-gray-200">
                            @forelse($leaveHistory as $leave)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $leave->leave_type }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $leave->start_date }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $leave->end_date }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        @if($leave->status == 'Approved')
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Approved</span>
                                        @elseif($leave->status == 'Pending')
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                        @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Rejected</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">
                                        No leave history available.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>--}}
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layout>
