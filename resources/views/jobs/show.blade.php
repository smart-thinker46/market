<x-layout>
    <x-slot:Heading>
       job
    </x-slot>
<h2><strong>{{ $job['title'] }}</strong></h2>
<p> This job pays {{ $job['salary'] }} per year</p>
</x-layout>