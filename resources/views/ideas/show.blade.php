<x-layout title="Idea Page">
    <div class="card bg-primary mt-6 p-6 text-black items-start">
        <h2 class="font-bold ">Your Idea</h2>

        <div class="mt-2">
            {{ $idea->description }}
        </div>

        <div class="mt-6">
            <a href="/ideas/{{ $idea->id }}/edit" class="btn btn-secondary">Edit</a>

        </div>

    </div>

</x-layout>
