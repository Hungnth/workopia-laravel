<x-layout>
    <h1>All Jobs</h1>
    <ul>
        @forelse($jobs as $job)
            <li>{{$job->title}} - {{$job->description}}</li>
        @empty
            <li>No Jobs available</li>
        @endforelse
    </ul>
</x-layout>
