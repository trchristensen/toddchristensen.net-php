<div class="container max-w-xl px-4 mx-auto prose">

    <form id="contactForm" action="sendmail.php" method="post">
        <div class="mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
                <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0" for="name">
                    Name
                </label>
            </div>
            <div class="md:w-2/3">
                <input
                    class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 appearance-none rounded-xl focus:outline-none focus:bg-white focus:border-purple-500"
                    id="name" type="text" value="Jane Doe" required>
            </div>
        </div>
        <div class="mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
                <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0" for="email">
                    Email
                </label>
            </div>
            <div class="md:w-2/3">
                <input
                    class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 appearance-none rounded-xl focus:outline-none focus:bg-white focus:border-purple-500"
                    id="email" type="email" value="jane@email.com" required>
            </div>
        </div>
        <div class="mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
                <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0" for="email">
                    Message
                </label>
            </div>
            <div class="md:w-2/3">
                <textarea
                    class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 appearance-none rounded-xl focus:outline-none focus:bg-white focus:border-purple-500"
                    name="message" placeholder="Your Message" required></textarea>
            </div>
        </div>
        <div class="flex justify-end">
            <button class="px-4 py-1 font-bold text-white bg-purple-500 rounded-lg" type="submit">Send</button>
        </div>
    </form>
</div>
<?php /**PATH /Users/anon/Code/php/tc/views/partials/contact-content.blade.php ENDPATH**/ ?>