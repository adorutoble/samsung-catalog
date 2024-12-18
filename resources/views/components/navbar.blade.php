<header>
    <nav class="fixed z-10 w-full border-gray-400 backdrop-blur-sm px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="https://1000logos.net/wp-content/uploads/2017/06/Samsung-emblem.png" class="mr-3 h-6 sm:h-9" alt="Samsung Logo" />
            </a>
            <div class="flex items-center lg:order-2">
                @if (Route::has('login'))
                    @auth
                    <div class="relative">
                        <button 
                            id="userDropdown" 
                            class="flex items-center text-gray-800 dark:text-white font-medium px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600" 
                            type="button"
                        >
                            Welcome, {{ Auth::user()->name }}
                            <svg 
                                class="w-4 h-4 ml-2 transition-transform transform rotate-0" 
                                fill="currentColor" 
                                viewBox="0 0 20 20" 
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path 
                                    fill-rule="evenodd" 
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" 
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </button>
                    
                        <!-- Dropdown Menu -->
                        <div 
                            id="userDropdownMenu" 
                            class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg dark:bg-gray-800 hidden"
                        >
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="block">
                                @csrf
                                <button 
                                    type="submit" 
                                    class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700"
                                >
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                    

                    @else
                        <a href="{{ route('login') }}" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                @auth
                <ul class="flex ml-4 pl-20 items-center flex-col mt-4 font-medium lg:flex-row lg:space-x-6 lg:mt-0">
                    <x-nav-link href="/" :active="request()->routeIs('dashboard')">
                        Home
                    </x-nav-link>
                    <x-nav-link href="/catalog" :active="request()->routeIs('catalog')">
                        Catalog
                    </x-nav-link>
                    <x-nav-link href="/about" :active="request()->routeIs('about')">
                        About
                    </x-nav-link>
                    <x-nav-link href="/contact" :active="request()->routeIs('contact')">
                        Contact
                    </x-nav-link>
                    
                </ul>
                
                @endauth
            </div>
        </div>
    </nav>
    
</header>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const dropdownButton = document.getElementById("userDropdown");
    const dropdownMenu = document.getElementById("userDropdownMenu");

    dropdownButton.addEventListener("click", function () {
        dropdownMenu.classList.toggle("hidden");
    });

    document.addEventListener("click", function (event) {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add("hidden");
        }
    });
});


</script>