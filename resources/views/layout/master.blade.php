<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;1,200;1,300&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <title>Document</title>
    @yield('title')
    @yield('head')
</head>

<body>
    <div class="p-1">
        {{-- absolute side bar --}}
        <div id="absolute_side_bar" class="bg-white hidden shadow-xl">
            <div class="flex justify-between border-b-2 border-blue-500">
                <div class="px-2 flex justify-start items-center">
                    <div class="pl-2 font-bold py-4">
                        <img class="w-10 h-10 rounded-full"
                            src="https://png.pngtree.com/png-vector/20190704/ourlarge/pngtree-businessman-user-avatar-free-vector-png-image_1538405.jpg"
                            alt="user avater">
                    </div>
                    <div class="ml-2 flex items-center">
                        <div>
                            <h4 class="text-teal-800 text-xs font-bold">Shahin Alam</h4>
                            <p class="text-red-500 text-xs font-semibold">Admin</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center mr-3 ">
                    <span class="text-blue-500 cursor-pointer">
                        <i class="fas fa-bars"></i>
                    </span>
                </div>
            </div>
            {{-- menu --}}
            <ul class="py-2 w-full">
                <li class="p-1 active"><a class="" href="#">
                        <span class="inline-block w-7 text-md font-thin ">
                            <i class=" fas fa-tachometer-alt"></i>
                        </span>
                        <span class="text-md font-normal">Dashboard</span>
                    </a>
                </li>
                <li class="p-1 parent_nav_item"><a class="" href="#">
                        <span class="inline-block w-7 text-md font-thin ">
                            <i class="fas fa-user"></i>
                        </span>
                        <span class="text-md font-normal">User</span>
                    </a>
                    <ul class="border-l-2 border-gray-700 mt-2 pl-1 child_nav_item hidden">
                        <li class="p-1 active"><a class="" href="#">
                                <span class="inline-block w-7 text-md font-thin ">
                                    <i class="fas fa-star-of-david"></i>
                                </span>
                                <span class="text-md font-normal">Vendors</span>
                            </a>
                        </li>
                        <li class="p-1"><a class="" href="#">
                                <span class="inline-block w-7 text-md font-thin ">
                                    <i class="fas fa-star-of-david"></i>
                                </span>
                                <span class="text-md font-normal">Suplier</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="p-1"><a class="" href="#">
                        <span class="inline-block w-7 text-md font-thin ">
                            <i class="fas fa-users"></i>
                        </span>
                        <span class="text-md font-normal">Customer</span>
                    </a>
                </li>

            </ul>
            {{-- menu end --}}
            {{-- <h4 class="pl-2 font-bold py-4 border-b-4 border-gray-200">Dashboard Menu</h4> --}}
        </div>
        {{-- absolute side bar end --}}
        {{-- navbar --}}
        {{-- top nav --}}
        <section id="topNav" class="">
            <div class="flex lg:gap-1 xl:gap-1">
                <div class="bg-white flex shadow-md  h-14 w-0 lg:w-2/12 xl:w-2/12">
                    <div class="px-2 flex justify-start items-center">
                        <div>
                            <img class="w-10 h-10 rounded-full"
                                src="https://png.pngtree.com/png-vector/20190704/ourlarge/pngtree-businessman-user-avatar-free-vector-png-image_1538405.jpg"
                                alt="user avater">
                        </div>
                        <div class="ml-2 flex items-center">
                            <div>
                                <h4 class="text-teal-800 text-xs font-bold">Shahin Alam</h4>
                                <p class="text-red-500 text-xs font-semibold">Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white flex items-center shadow-md py-2 w-full  lg:w-10/12 xl:w-10/12">
                    <div class="flex w-full justify-between">
                        <div class="ml-4 flex items-center">
                            <span class="text-gray-500 cursor-pointer block lg:hidden"><i
                                    class="fas fa-bars"></i></span>
                        </div>
                        <div>
                            <ul class="flex  mb-2 gap-3  mr-4">
                                <li><a href="#"><i class="text-gray-500 fas fa-bell"></i></a></li>
                                <li><a href="#"><i class="text-gray-500 fas fa-user"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- top nav end --}}
        {{-- side bar --}}

        <div class="flex lg:gap-1 xl:gap-1">
            <div
                class="bg-white shadow-md overflow-y-auto overflow-x-hidden h__full w-0 lg:w-2/12 xl:w-2/12 py-2  mt-1">
                <h4 class="pl-2 font-bold py-2 border-b-2 border-gray-500">Dashboard Menu</h4>
                <ul class="py-2 w-full">
                    <li class="p-1 active"><a class="" href="#">
                            <span class="inline-block w-7 text-md font-thin ">
                                <i class=" fas fa-tachometer-alt"></i>
                            </span>
                            <span class="text-md font-normal">Dashboard</span>
                        </a>
                    </li>
                    <li class="p-1 parent_nav_item"><a class="" href="#">
                            <span class="inline-block w-7 text-md font-thin ">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="text-md font-normal">User</span>
                        </a>
                        <ul class="border-l-2 border-gray-700 mt-2 pl-1 child_nav_item hidden">
                            <li class="p-1 active"><a class="" href="#">
                                    <span class="inline-block w-7 text-md font-thin ">
                                        <i class="fas fa-star-of-david"></i>
                                    </span>
                                    <span class="text-md font-normal">Vendors</span>
                                </a>
                            </li>
                            <li class="p-1"><a class="" href="#">
                                    <span class="inline-block w-7 text-md font-thin ">
                                        <i class="fas fa-star-of-david"></i>
                                    </span>
                                    <span class="text-md font-normal">Suplier</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="p-1"><a class="" href="#">
                            <span class="inline-block w-7 text-md font-thin ">
                                <i class="fas fa-users"></i>
                            </span>
                            <span class="text-md font-normal">Customer</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div
                class="bg-white flex shadow-md overflow-y-auto overflow-x-hidden h__full w-full lg:w-10/12 xl:w-10/12 py-3 px-5 mt-1">
                {{-- main content --}}

                @yield('main')
                {{-- main content end --}}
            </div>
        </div>
        {{-- side bar end --}}
        {{-- navbar end --}}
        {{-- main --}}
        {{-- main end --}}
        {{-- footer --}}
        {{-- footer end --}}
    </div>
    <script src="https://kit.fontawesome.com/bad080b564.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/d3.js') }}"></script>
    <script>
        $(document).on('click', '.parent_nav_item', function() {
            $('.child_nav_item').slideUp()
            if ($(this).find('ul').css('display') == 'none') {
                $(this).find('ul').slideDown()
            } else {
                $(this).find('ul').slideUp()
            }
        })
        $(document).on('click', '.fa-bars', function() {
            if ($('#absolute_side_bar').css('display') == 'none') {
                $('#absolute_side_bar').slideDown()
            } else {
                $('#absolute_side_bar').slideUp()
            }
        })
    </script>
    @yield('script')
</body>

</html>
