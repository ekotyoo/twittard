<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <section class="px-8 py-8">
            <header class="container mx-auto">
                <svg height="30" viewBox="0 0 84 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.4359 6.32263H25.1149V5.16763H31.1539V6.32263H28.8329V12.8566H27.4359V6.32263Z"
                        fill="#5CBDF7" />
                    <path
                        d="M32.7998 7.57663H34.1858L35.2638 11.1516L36.3198 7.57663H37.5298L38.5858 11.1516L39.6638 7.57663H41.0498L39.3228 12.8566H38.0468L36.9248 9.27063L35.8028 12.8566H34.5268L32.7998 7.57663Z"
                        fill="#5CBDF7" />
                    <path
                        d="M45.1867 6.65263C44.9667 6.65263 44.7797 6.5793 44.6257 6.43263C44.479 6.28596 44.4057 6.10263 44.4057 5.88263C44.4057 5.66263 44.479 5.4793 44.6257 5.33263C44.7797 5.17863 44.9667 5.10163 45.1867 5.10163C45.4067 5.10163 45.5937 5.17863 45.7477 5.33263C45.9017 5.4793 45.9787 5.66263 45.9787 5.88263C45.9787 6.10263 45.9017 6.28596 45.7477 6.43263C45.5937 6.5793 45.4067 6.65263 45.1867 6.65263ZM44.4827 7.57663H45.8907V12.8566H44.4827V7.57663Z"
                        fill="#5CBDF7" />
                    <path
                        d="M51.6733 13.0216C51.094 13.0216 50.654 12.8603 50.3533 12.5376C50.0527 12.215 49.9023 11.7603 49.9023 11.1736V8.63263H49.1103V7.57663H49.9023V5.99263H51.2883V7.57663H52.5533V8.63263H51.2883V10.9976C51.2883 11.335 51.3507 11.577 51.4753 11.7236C51.6 11.863 51.8273 11.9326 52.1573 11.9326C52.3847 11.9326 52.6083 11.8813 52.8283 11.7786V12.8346C52.513 12.9593 52.128 13.0216 51.6733 13.0216Z"
                        fill="#5CBDF7" />
                    <path
                        d="M57.9137 13.0216C57.3343 13.0216 56.8943 12.8603 56.5937 12.5376C56.293 12.215 56.1427 11.7603 56.1427 11.1736V8.63263H55.3507V7.57663H56.1427V5.99263H57.5287V7.57663H58.7937V8.63263H57.5287V10.9976C57.5287 11.335 57.591 11.577 57.7157 11.7236C57.8403 11.863 58.0677 11.9326 58.3977 11.9326C58.625 11.9326 58.8487 11.8813 59.0687 11.7786V12.8346C58.7533 12.9593 58.3683 13.0216 57.9137 13.0216Z"
                        fill="#5CBDF7" />
                    <path
                        d="M64.0852 13.0216C63.4545 13.0216 62.9375 12.8566 62.5342 12.5266C62.1309 12.1893 61.9292 11.7383 61.9292 11.1736C61.9292 10.587 62.1199 10.1286 62.5012 9.79863C62.8825 9.46863 63.4179 9.30363 64.1072 9.30363C64.7745 9.30363 65.3502 9.4393 65.8342 9.71063V9.56763C65.8342 9.19363 65.7169 8.9223 65.4822 8.75363C65.2549 8.58496 64.8845 8.50063 64.3712 8.50063C64.0485 8.50063 63.7295 8.53363 63.4142 8.59963C63.0989 8.6583 62.8202 8.74263 62.5782 8.85263V7.76363C62.7982 7.66096 63.0915 7.57663 63.4582 7.51063C63.8322 7.44463 64.1915 7.41163 64.5362 7.41163C65.4529 7.41163 66.1312 7.60963 66.5712 8.00563C67.0112 8.3943 67.2312 8.93696 67.2312 9.63363V12.8566H65.9222V12.3396C65.6949 12.5596 65.4345 12.7283 65.1412 12.8456C64.8552 12.963 64.5032 13.0216 64.0852 13.0216ZM64.4262 12.0096C64.7342 12.0096 65.0129 11.951 65.2622 11.8336C65.5115 11.709 65.7022 11.5403 65.8342 11.3276V10.7446C65.4309 10.4586 64.9689 10.3156 64.4482 10.3156C63.7075 10.3156 63.3372 10.6016 63.3372 11.1736C63.3372 11.4523 63.4289 11.6613 63.6122 11.8006C63.8029 11.94 64.0742 12.0096 64.4262 12.0096Z"
                        fill="#5CBDF7" />
                    <path
                        d="M70.7528 7.57663H72.0948V8.42363C72.3075 8.13763 72.6082 7.92496 72.9968 7.78563C73.3928 7.6463 73.8438 7.57663 74.3498 7.57663V8.63263C73.8145 8.63263 73.3488 8.71696 72.9528 8.88563C72.5642 9.04696 72.2928 9.30363 72.1388 9.65563V12.8566H70.7528V7.57663Z"
                        fill="#5CBDF7" />
                    <path
                        d="M79.8892 13.0216C79.3538 13.0216 78.8735 12.908 78.4482 12.6806C78.0302 12.446 77.7002 12.1196 77.4582 11.7016C77.2235 11.2763 77.1062 10.785 77.1062 10.2276C77.1062 9.67763 77.2235 9.18996 77.4582 8.76463C77.7002 8.3393 78.0302 8.0093 78.4482 7.77463C78.8735 7.53263 79.3538 7.41163 79.8892 7.41163C80.7545 7.41163 81.4365 7.63896 81.9352 8.09363V4.72763H83.3212V12.8566H81.9792V12.2406C81.6785 12.5193 81.3668 12.721 81.0442 12.8456C80.7215 12.963 80.3365 13.0216 79.8892 13.0216ZM80.2302 11.9326C80.6262 11.9326 80.9782 11.8263 81.2862 11.6136C81.5942 11.401 81.8105 11.115 81.9352 10.7556V9.68863C81.8178 9.3293 81.6015 9.0433 81.2862 8.83063C80.9782 8.61063 80.6262 8.50063 80.2302 8.50063C79.7315 8.50063 79.3209 8.66196 78.9982 8.98463C78.6755 9.3073 78.5142 9.72163 78.5142 10.2276C78.5142 10.7336 78.6755 11.1443 78.9982 11.4596C79.3209 11.775 79.7315 11.9326 80.2302 11.9326Z"
                        fill="#5CBDF7" />
                    <path
                        d="M7.59993 14.1848C7.59993 14.1848 8.12142 15.5871 7.82064 16.0812C7.5179 16.5754 6.30892 16.4797 5.93782 16.7141C5.6722 16.882 5.6761 17.3469 5.84212 17.5383C6.00618 17.7316 8.39876 17.5656 8.86751 16.6594C9.33626 15.7531 8.69954 14.0187 8.69954 14.0187L7.59993 14.1848Z"
                        fill="#5CBDF7" />
                    <path
                        d="M11.4202 14.0187L10.4027 14.2394C10.4027 14.2394 10.8421 16.0812 10.4847 16.6867C10.1273 17.2922 8.84603 17.9387 8.61556 18.4465C8.40853 18.8996 8.91829 19.2707 9.71517 18.7766C10.512 18.2824 11.4144 17.5441 11.5843 17.1808C11.9984 16.3019 11.4202 14.0187 11.4202 14.0187Z"
                        fill="#5CBDF7" />
                    <path
                        d="M4.46517 0.133972C2.3011 0.620301 0.615557 2.44452 1.24837 5.21991C1.62337 6.86639 1.85384 7.44647 1.99056 8.18866C2.27962 9.74921 2.20149 10.4348 2.86165 11.8644C3.56282 13.3859 6.1429 15.3391 9.3597 14.8703C12.5765 14.4016 13.8695 13.9621 13.8695 13.9621L15.0238 12.9445L16.1234 12.6691L16.2874 11.8723C16.2874 11.8723 17.1097 11.8351 17.2777 11.5695C17.5433 11.1476 17.387 10.8 16.9202 10.634C16.4534 10.4699 16.1781 10.3312 16.1781 10.3312C16.1781 10.3312 20.7152 7.33319 21.264 7.00507C21.8128 6.67694 22.6663 6.11054 22.7074 5.90546C22.8109 5.38397 21.4007 4.22772 19.5589 3.67889C17.7171 3.12811 16.1351 2.97772 15.8753 3.18475C15.5296 3.45624 14.0062 6.31952 12.9886 6.1828C11.6683 6.00311 10.762 4.76679 10.514 4.06561C10.2327 3.27069 8.54329 -0.782043 4.46517 0.133972Z"
                        fill="#5CBDF7" />
                    <path
                        d="M1.68782 4.42304C1.35774 4.36835 0.513994 5.26679 0.349932 5.48554C0.185869 5.70429 -0.0738961 6.01874 0.0198539 6.25507C0.166338 6.62225 0.918291 6.64179 1.35774 6.67694C1.81673 6.71405 2.69564 6.78632 2.84212 6.51288C2.9886 6.23749 2.67806 5.54218 2.42024 5.1203C2.18196 4.72772 2.03157 4.48163 1.68782 4.42304Z"
                        fill="#5CBDF7" />
                    <path
                        d="M5.28367 5.21966C5.71418 5.16771 6.0175 4.74709 5.96116 4.28017C5.90482 3.81325 5.51016 3.47685 5.07965 3.5288C4.64914 3.58074 4.34582 4.00136 4.40216 4.46828C4.45849 4.9352 4.85316 5.2716 5.28367 5.21966Z"
                        fill="#5CBDF7" />
                    <path
                        d="M7.76399 10.2531C7.38314 10.3918 7.88314 11.7375 8.39681 12.343C8.93782 12.9797 10.2464 14.4094 12.2464 14.5969C13.6038 14.7258 14.2074 14.341 14.5277 13.9914C14.7659 13.7316 15.0218 13.4308 15.1976 13.2941C15.4534 13.093 15.7113 13.2668 16.1507 12.9465C16.4671 12.716 16.5355 12.3332 16.7015 12.1945C16.8656 12.0578 17.1449 12.0891 17.2874 11.9562C17.5433 11.718 17.5081 11.0207 17.3245 10.9855C17.1409 10.9504 17.1234 11.4797 16.9398 11.5539C16.7562 11.6281 16.512 11.5812 16.1702 11.7746C15.8773 11.9387 15.9691 12.2687 15.7679 12.4152C15.5667 12.5617 15.1995 12.3605 14.7054 12.6359C14.4378 12.7844 14.2113 13.4973 13.4398 13.6633C12.4827 13.8683 11.0472 13.1711 10.3597 12.673C8.76399 11.5168 8.41439 10.0148 7.76399 10.2531Z"
                        fill="#5CBDF7" />
                </svg>

            </header>
        </section>

        <section class="px-8">
            <main class="container mx-auto">
                <div class="lg:flex lg:justify-between">
                    <div class="lg:w-1/6">
                        @include('_sidebar-links')
                    </div>

                    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                        @yield('content')
                    </div>

                    <div class="lg:w-1/6">
                        @include('_friends-list')
                    </div>
                </div>
            </main>
        </section>
    </div>
</body>

</html>
