<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="/">
                <span class="logo-icon"><i class="fas fa-home"></i></span>
                <span class="logo-text">RealEstate<span class="highlight">Pro</span></span>
            </a>
        </div>
        <nav class="main-nav">
            <button class="mobile-menu-toggle" aria-label="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-links">
                <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a></li>
                <li><a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>