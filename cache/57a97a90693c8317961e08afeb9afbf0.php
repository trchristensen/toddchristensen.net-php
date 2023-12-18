<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'My Website'); ?></title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js"
        integrity="sha512-AB2vAMVrtmmI+2BwSMqB+y1qGPNJovUOCp4w27S9pvX8yXPQNbBO4kuM952+LlOpng9VeWPb86b5N32bkvXRvQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- HTMX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.9/htmx.min.js"></script>
</head>
<style>
    [x-cloak] {
        display: none !important;
    }

    /* Default styles when JS is disabled */
    .sidenav {
        transform: translateX(-100%);
    }

    .content {
        margin-left: 0;
    }

    /* Styles when JS is enabled */
    .js-enabled .sidenav {
        transform: translateX(0);
    }

    .js-enabled .content {
        margin-left: 16rem;
        /* Adjust as per the width of your sidebar */
    }
</style>


<body x-data="{ open: window.innerWidth >= 768 }" @resize.window="open = window.innerWidth >= 768" x-init="document.documentElement.classList.add('js-enabled')"
    class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-gray-600 text-white py-4 px-4 z-20">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" hx-get="/" hx-push-url="/" hx-boost="true" hx-target="main">ToddChristensen.net</a>
            <button @click="open = !open">Menu</button>
        </div>
    </header>

    <!-- Side Navigation -->
    <aside :class="open ? 'transform translate-x-0' : 'transform -translate-x-full'"
        class="fixed top-0 bottom-0 left-0 z-10 h-screen w-64 bg-white border-r px-10 transition-transform duration-300 ease-in-out py-20">
        <nav hx-boost="true" class="flex flex-col gap-4">
            <a href="/about" hx-get="/about" hx-push-url="/about" hx-target="main">About</a>
            <a href="/contact" hx-get="/contact" hx-push-url="/contact" hx-target="main">Contact</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main :class="open ? 'ml-64' : 'ml-0'" class="flex-grow transition-margin duration-300 ease-in-out content">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="z-20 bg-gray-700 text-white py-4">
        <div class="container mx-auto">
            <p>Footer Content</p>
            <!-- Add footer links, copyright, etc. here -->
        </div>
    </footer>

</body>

</html>
<?php /**PATH /Users/anon/Code/php/tc/views/layout.blade.php ENDPATH**/ ?>