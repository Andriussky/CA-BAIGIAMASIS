<link rel="stylesheet" href="{{ asset('css/headers.css') }}">


<header>
    <nav>
        <div class="nav-wrapper">
            <a href="/" class="brand-logo">
                <img src="{{asset('https://cdn3.vectorstock.com/i/1000x1000/23/77/book-icon-logo-vector-2982377.jpg')}}" alt="logo" class="logo" style="width: 100px;">
            </a>
            <a href="/login">


            </a>
            <ul id="nav-mobile" class="links">
                <li>[{{app()->getLocale()}}]</li>
                <li></li>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('shelf_contents.index')}}">Shelf</a></li>
                <li><a href="{{route('categories.index')}}">Categories</a></li>
                <li></li>
            </ul>
            <a href="{{route('profile.edit')}}">{{ __('Profile') }}</a>
            <form method="POST" action="{{ route('logout') }}">    @csrf
                <x-responsive-nav-link :href="route('logout')"
                                       onclick="event.preventDefault();                    this.closest('form').submit();">        {{ __('Log Out') }}    </x-responsive-nav-link>
            </form>
        </div>
    </nav>
    @auth
        <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
            <li>
                <span>{{auth()?->user()?->email}}</span>
            </li>
            @if (auth()?->user()?->isAdmin())
                <li>
                    <a href="{{route('orders.index')}}">
                        {{ __('Orders') }}
                    </a>
                </li>
                <li>
                    <a href="{{route('statuses.index')}}">
                        {{ __('Statuses') }}
                    </a>
                </li>
                <li>
                    <a href="{{route('users.index')}}">
                        {{ __('Users') }}
                    </a>
                </li>
                <li>
                    <a href="{{route('persons.index')}}">
                        {{ __('Persons') }}
                    </a>
                </li>
                <li>
                    <a href="{{route('addresses.index')}}">
                        {{ __('Addresses') }}
                    </a>
                </li>
    @endif
    @endauth

            @auth
                <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">

        @if (auth()?->user()?->isManager())


                        <li>
                            <a href="{{route('users.index')}}">
                                {{ __('Users') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('persons.index')}}">
                                {{ __('Persons') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('addresses.index')}}">
                                {{ __('Addresses') }}
                            </a>
                        </li>

        @endif
        @endauth
</header>
