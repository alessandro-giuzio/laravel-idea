<x-layout title="Home Page">
    @if ($ideas->count())
        <div class="mt-6 text-white">
            <h2 class="font-bold">Your Ideas</h2>
            <ul class="mt-6">
                @foreach ($ideas as $idea)
                    <a href="/ideas/{{ $idea->id }}" class="block rounded-md bg-gray-600/10 p-4 hover:bg-gray-600/20">
                        <li class="text-sm">{{ $idea->description }}</li>
                    </a>
                @endforeach
            </ul>
        </div>
    @else
        <p class="mt-6 text-sm/6 text-gray-400">You have no ideas yet.</p>
        <a href="/ideas/create" class="underline">Create an Idea</a>

    @endif
</x-layout>
