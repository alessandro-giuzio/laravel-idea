<x-layout title="Home Page">
    @if ($ideas->count())
        <div class="mt-6 text-white ">
            <h2 class="font-bold">Your Ideas</h2>
            <ul class="mt-6 grid sm:grid-cols-2 gap-y-6 gap-x-4">
                @foreach ($ideas as $idea)
                    <x-idea-card href="/ideas/{{ $idea->id }}">
                        {{ $idea->description }}
                    </x-idea-card>
                @endforeach
            </ul>
        </div>
    @else
        <p class="mt-6 text-sm/6 text-gray-400">You have no ideas yet.</p>

    @endif
    <p class="mt-6"><a href="/ideas/create" class="underline">Create an Idea.</a></p>
</x-layout>
