<x-layout>
    <form action="/login" method="POST" class="py-8">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Log In</legend>


            <label class="label">Email</label>
            <input type="email" name="email" class="input" placeholder="Your Email" required />
            <x-forms.error name="email" />

            <label class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Your Password" required />
            <x-forms.error name="password" />

            <button class="btn btn-neutral mt-4">Log In</button>
        </fieldset>
    </form>
</x-layout>
