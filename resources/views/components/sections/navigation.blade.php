<nav class="navbar navbar-expand-lg py-4 position-fixed w-100">
    <div class="container">
        <div>
            <a href="{{ route('home') }}" class="fs-1">Home</a>
        </div>

        <div class="d-none d-lg-block navbar__links">
            <a href="{{ route('shop') }}">Shop</a>
            <a href="">Tour</a>
            <i class="bi bi-dash"></i>
            <a href="{{ route('discography') }}">Discography</a>
            <a href="{{ route('lyrics') }}">Lyrics</a>
        </div>

        <div class="d-block d-lg-none">
            <a href="#menu" class="text-light"><i class="bi bi-list" style="font-size: 1.5rem;"></i></a>
        </div>
    </div>
</nav>

<nav id="menu">
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('shop') }}">Shop</a></li>
        <li><a href="">Tour</a></li>
        <li><a href="{{ route('discography') }}">Discography</a></li>
        <li><a href="{{ route('lyrics') }}">Lyrics</a></li>
        <li><span>About us</span>
            <ul>
                <li><a href="/about/history">History</a></li>
                <li><span>The team</span>
                    <ul>
                        <li><a href="/about/team/management">Management</a></li>
                        <li><a href="/about/team/sales">Sales</a></li>
                        <li><a href="/about/team/development">Development</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><span>Services</span>
            <ul>
                <li><a href="/services/design">Design</a></li>
                <li><a href="/services/development">Development</a></li>
                <li><a href="/services/marketing">Marketing</a></li>
            </ul>
        </li>
    </ul>
</nav>
