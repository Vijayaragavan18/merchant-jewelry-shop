<nav x-data="{ open: false }" class="bg-white bg border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4  sm:px-6 lg:px-8">
        <div class="flex justify-between  h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <div class="DashlogoImage"><img src="/images/logo.png" alt="logo"></div>
                    </a>
                </div>

                <!-- Navigation Links -->




            </div>

            <style>
                .navHeadDash a {
                    font-size: 18px;
                    color: aliceblue;
                }

                .navHeadDash {
                    display: flex;
                    flex-direction: row;
                    margin-right: 30px;
                    align-items: center;

                }


                .navHeadDash a {

                    text-decoration: none;
                    color: #ffff;
                }


                .DashlogoImage img {
                    width: 50px;

                }

                .bg {
                    background-color: #5F1107;
                    padding: 10px 0px;
                }

                .bgClr {
                    background-color: white;

                }

                .bgClr:hover {
                    color: black;
                }
            </style>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="navHeadDash">
                    <a class="" href="/">Home</a>
                </div>
                <div class="navHeadDash">
                    <a class="" href="/allJewelry">All jewelry</a>



                </div>
                <div class="navHeadDash">
                    <a class="" href="/blog">Blogs</a>
                </div>
                <div class="navHeadDash">
                    <a class="" href="/card">{{ Cart::count() }}<i class="navIconRight fa-solid fa-cart-shopping"></i></i></a>
                </div>




                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bgClr hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">


        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200" style="background-color: antiquewhite;">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
            <div class="navBarResDash">

                <div class="navHeadDashMOb">
                    <a class="" href="/">Home</a>
                </div>
                <div class="navHeadDashMOb">
                    <a class="" href="/allJewelry">All jewelry</a>



                </div>
                <div class="navHeadDashMOb">
                    <a class="" href="/blog">Blogs</a>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>


            <style>
                .navHeadDashMOb {
                    display: flex;
                    flex-direction: row;
                    margin-left: 15px;
                    align-items: center;
                }

                .navHeadDashMOb a {
                    text-decoration: none;
                    color: #343b46;
                }

                .navBarResDash {
                    display: flex;
                    flex-direction: column;
                    gap: 8px;
                }
            </style>





        </div>
    </div>
</nav>