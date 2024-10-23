<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($jobs as $job)
{{--            <li><a href="{{route('jobs.show', $job->id)}}">{{$job->title}}</a> - {{$job->description}}</li>--}}
            <x-job-card :job="$job" />
        @empty
            <li>No Jobs available</li>
        @endforelse
    </div>
</x-layout>
