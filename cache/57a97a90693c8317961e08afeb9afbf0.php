<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'toddchristensen.net'); ?></title>
    <!-- Tailwind CSS -->
    <link href="./output.css" rel="stylesheet">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js"
        integrity="sha512-AB2vAMVrtmmI+2BwSMqB+y1qGPNJovUOCp4w27S9pvX8yXPQNbBO4kuM952+LlOpng9VeWPb86b5N32bkvXRvQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- HTMX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.9/htmx.min.js"></script>
</head>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>


<body class="grid grid-rows-[1fr_auto] min-h-screen bg-white">
    <div class="flex flex-col flex-grow duration-300 ease-in-out transition-margin">
        <header class="container flex max-w-xl px-4 mx-auto">
            <nav hx-boost="true" class="flex flex-row items-center w-full h-full gap-4 py-6">
                <a hx-boost="true" href="/" hx-get="/" hx-push-url="/" hx-target="main">
                    <div
                        class="flex items-center justify-center w-8 h-8 leading-loose text-white bg-black rounded-full">
                        tc
                    </div>
                </a>
                
                <a href="/about" hx-get="/about" hx-push-url="/about" hx-target="main">more
                    about me</a>
                <a href="/guestbook" hx-get="/guestbook" hx-push-url="/guestbook" hx-target="main">guestbook</a>
                
            </nav>
        </header>
        <main class="flex-grow"><?php echo $__env->yieldContent('content'); ?></main>
        <footer class="py-4 text-white bg-black">
            <div class="container max-w-xl px-4 mx-auto">
                
            </div>
        </footer>
    </div>
</body>

</html>
<?php /**PATH /Users/anon/Code/php/tc/views/layout.blade.php ENDPATH**/ ?>