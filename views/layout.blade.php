<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'toddchristensen.net' }}</title>
    <!-- Tailwind CSS -->
    <link href="./global.css" rel="stylesheet">

    <!-- Alpine.js -->
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js"
        integrity="sha512-AB2vAMVrtmmI+2BwSMqB+y1qGPNJovUOCp4w27S9pvX8yXPQNbBO4kuM952+LlOpng9VeWPb86b5N32bkvXRvQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
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
                {{-- <a href="/projects" hx-get="/projects" hx-push-url="/projects" hx-target="main">some projects</a> --}}
                <a class="nav-link" href="/about" hx-get="/about" hx-push-url="/about" hx-target="main">more
                    about me</a>
                <a class="nav-link" href="/guestbook" hx-get="/guestbook" hx-push-url="/guestbook"
                    hx-target="main">guestbook</a>
                {{-- <a href="/contact" hx-get="/contact" hx-push-url="/contact" hx-target="main">hit
                    me up</a> --}}
            </nav>
        </header>
        <main class="flex-grow">@yield('content')</main>
        <footer class="py-4 text-white bg-black footer">
            <div class="container max-w-xl px-4 mx-auto">
                {{-- <p>Footer Content</p> --}}
            </div>
        </footer>
    </div>
</body>

</html>
