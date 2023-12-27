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

    /* Sidebar always visible on large screens, hidden on small screens by default */
    @media (min-width: 768px) {
        .js .sidenav {
            transform: translateX(0);
        }

        .js .content {
            margin-left: 16rem;
        }
    }
</style>

<body x-data="{ open: false }" x-init="open = window.innerWidth >= 768;
document.documentElement.classList.add('js')" @resize.window="open = window.innerWidth >= 768"
    class="flex flex-col min-h-screen bg-gray-200">


    <!-- Side Navigation -->
    <aside :class="{ '-translate-x-full': !open }"
        class="fixed top-0 bottom-0 left-0 z-10 h-screen w-64 bg-white border-r px-10 transition-transform duration-300 ease-in-out sidenav">
        <nav hx-boost="true" class="flex flex-col gap-4 py-6 justify-center h-full">
            <a hx-boost="true" href="/" hx-get="/" hx-push-url="/" hx-target="main">todd christensen</a>
            <a href="/about" hx-get="/about" hx-push-url="/about" hx-target="main">About</a>
            <a href="/contact" hx-get="/contact" hx-push-url="/contact" hx-target="main">Contact</a>
        </nav>
    </aside>

    <div :class="{ 'ml-64': open }" class="flex-grow transition-margin duration-300 ease-in-out">
        <!-- Header -->
        <header class="container mx-auto flex justify-between items-center">
            <button @click="open = !open">Menu</button>
        </header>
        <!-- Main Content -->
        <main class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <!-- Footer -->
        <footer :class="{ 'ml-64': open }" class="bg-gray-700 text-white py-4">
            <div class="container mx-auto px-4">
                <p>Footer Content</p>
                <!-- Add footer links, copyright, etc. here -->
            </div>
        </footer>
    </div>

</body>

</html>
<?php /**PATH /Users/anon/Code/php/tc/views/layout.blade.php ENDPATH**/ ?>