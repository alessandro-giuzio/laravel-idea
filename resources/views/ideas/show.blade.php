<x-layout title="Idea Page">



    <div class="mt-6 text-white">
        <h2 class="font-bold">Your Idea</h2>
        <ul class="mt-6">
            <li class="text-sm">{{ $idea->description }}</li>
        </ul>
    </div>
    <div class="mt-6">
        <a href="/ideas/{{ $idea->id }}/edit"
            class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</a>


    </div>

</x-layout>
