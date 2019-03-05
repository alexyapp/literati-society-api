<aside class="probootstrap-aside js-probootstrap-aside">
    <a href="#" class="probootstrap-close-menu js-probootstrap-close-menu d-md-none"><span class="oi oi-arrow-left"></span> Close</a>
    <div class="probootstrap-site-logo probootstrap-animate" data-animate-effect="fadeInLeft">
        
        {{-- <a href="index.html" class="mb-2 d-block probootstrap-logo">Aside</a> --}}
        <p class="mb-0"><a href="{{ route('home') }}">literatisociety.org</a> is a creative space for writers and readers. Write poems or read short stories. <a href="#">Get to writing.</a></p>
    </div>
    <div class="probootstrap-overflow">
        <nav class="probootstrap-nav">
        <ul>
            <li class="probootstrap-animate {{ request()->is('/') ? 'active' : '' }}" data-animate-effect="fadeInLeft"><a href="{{ route('home') }}">Home</a></li>
            <li class="probootstrap-animate {{ request()->is('about*') ? 'active' : '' }}" data-animate-effect="fadeInLeft"><a href="about.html">About</a></li>
            {{-- <li class="probootstrap-animate {{ request()->is('services*') ? 'active' : '' }}" data-animate-effect="fadeInLeft"><a href="services.html">Services</a></li>
            <li class="probootstrap-animate {{ request()->is('portfolio*') ? 'active' : '' }}" data-animate-effect="fadeInLeft"><a href="portfolio.html">Portfolio</a></li> --}}
            <li class="probootstrap-animate {{ request()->is('contact*') ? 'active' : '' }}" data-animate-effect="fadeInLeft"><a href="{{ route('contact') }}">Contact</a></li>
            <li class="probootstrap-animate {{ request()->is('login*') ? 'active' : '' }}" data-animate-effect="fadeInLeft">
                <a href="{{ route('login') }}">Login</a>
            </li>
        </ul>
        </nav>
        <footer class="probootstrap-aside-footer probootstrap-animate" data-animate-effect="fadeInLeft">
        <ul class="list-unstyled d-flex probootstrap-aside-social">
            <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
            <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
            <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
        </ul>
        <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved.</p>
        </footer>
    </div>
</aside>