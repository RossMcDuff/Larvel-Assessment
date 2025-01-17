@auth
    <x-panel>
    <form method="POST" action="/posts/{{ $post->slug }}/comments">
        @csrf

        <header class="flex items-center">

            <img src="../images/default.jpg" alt="Avatar" width="40" height="40" class="rounded-full">
            <h2 class="ml-4">Want to participate?</h2>

        </header>

        <div class="mt-6">

            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Quick, think of something to say!" required></textarea>

            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror

        </div>

        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">

            <x-form.button>Post</x-form.button>

        </div>

    </form>

    </x-panel>
@else
    <p class="font-semibold"><a class="hover:underline" href="/register">Register</a> or <a class="hover:underline" href="/login">Log in</a> to leave a comment.</p>
@endauth