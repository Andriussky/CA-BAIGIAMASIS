{{--<link rel="stylesheet" href="{{ asset('css/header.css') }}">--}}


<header>
    <nav>
        <div class="nav-wrapper">
            <a href="/" class="brand-logo">
                <img src="{{asset('/img/logo.png')}}" alt="logo" class="logo">
            </a>
            <a href="/login">


            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li>[{{app()->getLocale()}}]</li>
                <li></li>
                <li><a href="/">Home</a></li>
{{--                <li><a href="{{route('orders.index')}}">Orders</a></li>--}}
                <li><a href="{{route('shelf_contents.index')}}">Shelf</a></li>
                <li><a href="{{route('categories.index')}}">Categories</a></li>
{{--                <li><a href="{{route('statuses.index')}}">Statuses</a></li>--}}
{{--                <li><a href="{{route('users.index')}}">Users</a></li>--}}
{{--                <li><a href="{{route('persons.index')}}">Persons</a></li>--}}
{{--                <li><a href="{{route('addresses.index')}}">Addresses</a></li>--}}
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
