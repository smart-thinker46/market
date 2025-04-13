<x-layout>
  <x-slot:Heading>
     Availabe Jobs
  </x-slot>

 
@foreach ($jobs as $job)
<div class="space-y-4">
  <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border-b border-gray-200 rounded-lg">
  <div class="font-bold text-blue-500">{{ $job->employer->name}}</div>

    <div>
    <strong>{{ $job['title'] }} :</strong> Salary {{$job['salary']}} per year
  </div>
    
  </a>
@endforeach
<div>
  {{$jobs->links()}}
</div>
</div>
</x-layout>
