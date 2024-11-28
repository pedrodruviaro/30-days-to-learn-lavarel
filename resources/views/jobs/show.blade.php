<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-2xl mb-2">{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} for year</p>

</x-layout>
