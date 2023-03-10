<link rel="stylesheet" href="{{ asset('css/headers.css') }}">


<header>
    <nav>
        <div class="nav-wrapper">
            <a href="/" class="brand-logo">
                <img src="{{asset('https://cdn.vectorstock.com/i/preview-1x/69/19/book-logo-vector-45966919.jpg')}}" alt="logo" class="logo" style="width: 100px;">
            </a>
            <a href="/login">

            </a>
            <ul id="nav-mobile" class="links">
                <li>[{{app()->getLocale()}}]</li>
                <li></li>
                <li><a href="{{route('home')}}"  class="header-button">Home</a></li>
                <li><a href="{{route('shelf_contents.index')}}"  class="header-button">Shelf</a></li>
                <li><a href="{{route('categories.index')}}"  class="header-button">Categories</a></li>
                <li></li>

                <a href="{{route('profile.edit')}}"  class="header-button">{{ __('Profile') }}</a>
                <form method="POST" action="{{ route('logout') }}">    @csrf
                    <x-responsive-nav-link :href="route('logout')"  class="header-button"
                                           onclick="event.preventDefault();                    this.closest('form').submit();">        {{ __('Log Out') }}    </x-responsive-nav-link>
                </form>
            </ul>

        </div>
    </nav>
    @auth
        <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
            <li>
                <span>{{auth()?->user()?->email}}</span>
            </li>
            @if (auth()?->user()?->isAdmin())
                <li>
                    <a href="{{route('orders.index')}}" class="header-button">
                        {{ __('Orders') }}
                    </a>
                </li>
                <li>
                    <a href="{{route('statuses.index')}}" class="header-button">
                        {{ __('Statuses') }}
                    </a>
                </li>
                <li>
                    <a href="{{route('users.index')}}" class="header-button">
                        {{ __('Users') }}
                    </a>
                </li>
                <li>
                    <a href="{{route('persons.index')}}"  class="header-button">
                        {{ __('Persons') }}
                    </a>
                </li>
                <li>
                    <a href="{{route('addresses.index')}}"  class="header-button">
                        {{ __('Addresses') }}
                    </a>
                </li>
    @endif
    @endauth

            @auth
                <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">

        @if (auth()?->user()?->isManager())


                        <li>
                            <a href="{{route('users.index')}}"  class="header-button">
                                {{ __('Users') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('persons.index')}}"  class="header-button">
                                {{ __('Persons') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('addresses.index')}}"  class="header-button">
                                {{ __('Addresses') }}
                            </a>
                        </li>

        @endif
        @endauth
</header>
