<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'toddchristensen.net'); ?></title>
    <!-- Tailwind CSS -->
    

    <!-- Alpine.js -->
    
    
    <!-- HTMX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.9/htmx.min.js"></script>
</head>
<style>
    [x-cloak] {
        display: none !important;
    }

    *,
    ::before,
    ::after {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
        border-color: #e5e7eb;
    }

    body {
        padding: 0;
        margin: 0;
        min-height: 100vh;
    }

    main {
        flex-grow: 1;
    }

    .logo {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        color: white;
        background-color: black;
        border-radius: 100%;
    }

    .full-grid {
        display: grid;
        grid-template-rows: 1fr auto;
        min-height: 100vh;
    }

    .layout-wrapper {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .content-wrapper {
        display: flex;
        flex-direction: column;
        transition: margin 0.3s ease-in-out;
    }

    .container {
        width: 100%;
        max-width: 36rem;
        padding: 0 16px;
        margin: 0 auto;
    }

    .header-nav {
        display: flex;
        align-items: center;
        padding: 24px 0;
    }

    .nav-link {
        text-decoration: none;
        color: inherit;
        padding: 8px;
    }

    .footer {
        padding: 16px;
        background-color: black;
        color: white;
    }
</style>


<body class="full-grid">
    <div class="flex flex-col flex-grow duration-300 ease-in-out layout-wrapper transition-margin">
        <header class="container">
            <nav hx-boost="true" class="header-nav">
                <a class="nav-link" hx-boost="true" href="/" hx-get="/" hx-push-url="/" hx-target="main">
                    <div class="logo">
                        tc
                    </div>
                </a>
                
                <a class="nav-link" href="/about" hx-get="/about" hx-push-url="/about" hx-target="main">more
                    about me</a>
                <a class="nav-link" href="/guestbook" hx-get="/guestbook" hx-push-url="/guestbook"
                    hx-target="main">guestbook</a>
                
            </nav>
        </header>
        <main class="flex-grow"><?php echo $__env->yieldContent('content'); ?></main>
        <footer class="py-4 text-white bg-black footer">
            <div class="container max-w-xl px-4 mx-auto">
                
            </div>
        </footer>
    </div>
</body>

</html>
<?php /**PATH /Users/anon/Code/php/tc/views/layout.blade.php ENDPATH**/ ?>