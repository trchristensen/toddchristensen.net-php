<div class="container max-w-xl px-4 pt-10 pb-5 mx-auto prose">
    <form method="post" action="/send-magic-link" hx-post="/send-magic-link" hx-target="#response">
        <input type="email" name="email" placeholder="Enter your email">
        <button type="submit">Send Magic Link</button>
        <div id="response"></div>
    </form>
    {{-- <form method="POST" hx-post="/guestbook" hx-target="#guestbook-container" class="block">
        <div class="flex justify-between gap-2">
            <input
                class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 appearance-none rounded-xl focus:outline-none focus:bg-white focus:border-purple-500"
                id="message" name="message" type="text" required>
            <button class="px-4 py-1 font-bold text-white bg-purple-500 rounded-lg" type="submit">Post</button>
        </div>
    </form> --}}
    <hr />
    @include('partials.guestbook-entries')
</div>
