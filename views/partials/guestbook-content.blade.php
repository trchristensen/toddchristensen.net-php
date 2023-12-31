<div class="container max-w-xl px-4 mx-auto prose">
    <form method="POST" hx-post="/guestbook" hx-target="#guestbook-container" class="p-5 border rounded-lg">
        <div class="mb-6 md:flex md:items-center">
            <div class="md:w-fit">
                <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0" for="message">
                    Message
                </label>
            </div>
            <div class="md:w-full">
                <input
                    class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 appearance-none rounded-xl focus:outline-none focus:bg-white focus:border-purple-500"
                    id="message" name="message" type="text" required>
            </div>
        </div>
        <div class="flex justify-end">
            <button class="px-4 py-1 font-bold text-white bg-purple-500 rounded-lg" type="submit">Post</button>
        </div>

    </form>
    <hr />
    @include('partials.guestbook-entries')
</div>
