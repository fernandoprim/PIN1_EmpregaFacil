@props(['job'])

<x-panel class="flex gap-x-5">
    <div>
        <x-employer-logo/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-xl text-gray-500">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-xl group-hover:text-blue-600 transition-colors duration-300">{{ $job->title }}</h3>

        <p class="text-sm mt-auto">{{ $job->salary }}</p>
    </div>

    <div>
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag></x-tag>
            @endforeach
        </div>

    </div>
</x-panel>
