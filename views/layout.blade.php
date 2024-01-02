<!DOCTYPE html>
<html lang="en" data-theme="sunset">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'toddchristensen.net' }}</title>
    <meta name="description" content="Just an aspiring solopreneuer, making things and having fun along the way.">
    <meta property="og:title" content="Todd Christensen">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="Just an aspiring solopreneuer, making things and having fun along the way.">

    <!-- Tailwind CSS -->
    <link href="./output.css" rel="stylesheet">

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

<body class="min-h-screen">
    <div class="relative min-h-screen bg-base-200">
        <div class="flex flex-col min-h-screen lg:flex-row max-lg:pb-16">
            <div id="header-wrapper"
                class="shrink-0 space-y-4 lg:space-y-8 lg:w-[400px] xl:w-[550px] p-6 lg:p-16 lg:pr-0 xl:pr-16">
                <header class="flex flex-col gap-4">
                    <div class="flex items-start justify-start gap-4 lg:gap-8 lg:flex-col"><span
                            class="relative shrink-0"><img alt="Todd Christensenprofile pic" width="176"
                                height="176" decoding="async" data-nimg="1"
                                class="object-cover w-20 h-20 rounded-full lg:w-44 lg:h-44" style="color:transparent"
                                src="avatar.jpeg" />
                            <div class="absolute inset-0 rounded-full shadow-[0_0_0px_1px_rgba(0,0,0,0.06)]"></div>
                        </span>
                        <div class="flex-1">
                            <h1 class="mb-1 text-xl font-bold lg:font-extrabold lg:text-4xl lg:mb-3">Todd Christensen
                            </h1>
                            <div class="flex flex-col gap-1 lg:flex-row lg:gap-4">
                                <h2 class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor"
                                        class="w-4 h-4 mr-1 lg:w-5 lg:h-5 text-base-content/80">
                                        <path fill-rule="evenodd"
                                            d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="text-base-content/80">Bay Area, California, USA</span></h2>
                                <div>
                                    <p class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="inline w-4 h-4 mr-1 lg:w-5 lg:h-5 text-base-content/80">
                                            <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                                            <path fill-rule="evenodd"
                                                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                                clip-rule="evenodd"></path>
                                            <path
                                                d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z">
                                            </path>
                                        </svg> <span class="text-base-content/80">$<!-- -->0<!-- -->/month</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="intro">
                        <div class="container">
                            <p>I'm a former full-time web developer and aspiring solopreneuer, making things and having
                                fun along the way.</p>
                        </div>

                    </section>
                    {{-- <nav hx-boost="true" class="header-nav">
                    <a class="nav-link" hx-boost="true" href="/" hx-get="/" hx-push-url="/" hx-target="main">
                        <div class="logo">
                            tc
                        </div>
                    </a>
                    <a href="/projects" hx-get="/projects" hx-push-url="/projects" hx-target="main">some projects</a>
                    <a class="nav-link" href="/about" hx-get="/about" hx-push-url="/about" hx-target="main">more
                        about me</a>
                    <a class="nav-link" href="/guestbook" hx-get="/guestbook" hx-push-url="/guestbook"
                        hx-target="main">guestbook</a>
                    <a href="/contact" hx-get="/contact" hx-push-url="/contact" hx-target="main">hit
                        me up</a>
                </nav> --}}
                </header>
            </div>
            <div class="lg:h-screen lg:overflow-scroll noscrollbar w-full max-w-[1100px]">
                <div class="px-6 my-0 divider lg:hidden "></div>
                <main class="flex-grow p-6 lg:p-16">@yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

</html>
