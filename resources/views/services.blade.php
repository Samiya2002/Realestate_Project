<!-- services.blade.php -->
@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1>Our Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="services-intro">
        <div class="container">
            <div class="section-header">
                <h2>Comprehensive Real Estate Solutions</h2>
                <p>From property acquisition to closing, we handle every aspect of your real estate journey</p>
            </div>
            <div class="intro-content">
                <p class="lead-text">At RealEstatePro, we offer end-to-end services designed to streamline the entire real estate process. Our technology-driven approach combined with expert human guidance ensures efficiency, accuracy, and peace of mind for all parties involved.</p>
            </div>
        </div>
    </section>

    <section id="buying" class="service-category">
        <div class="container">
            <div class="service-category-header animate-fade-in">
                <div class="icon">
                    <i class="fas fa-home"></i>
                </div>
                <h2>Property Buying Services</h2>
                <p>Making your property acquisition smooth and stress-free</p>
            </div>
            <div class="services-grid">
                <div class="service-card animate-slide-up">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Property Search Assistance</h3>
                    <p>Our team helps identify properties that match your criteria, budget, and preferences, saving you time and effort.</p>
                    <ul class="service-features">
                        <li>Personalized property recommendations</li>
                        <li>Market analysis and valuation</li>
                        <li>Neighborhood insights and data</li>
                    </ul>
                </div>
                <div class="service-card animate-slide-up-delay-1">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Negotiation Support</h3>
                    <p>We represent your interests during price negotiations, ensuring you get the best possible deal for your investment.</p>
                    <ul class="service-features">
                        <li>Price negotiation strategy</li>
                        <li>Contract term assistance</li>
                        <li>Contingency management</li>
                    </ul>
                </div>
                <div class="service-card animate-slide-up-delay-2">
                    <div class="service-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Due Diligence</h3>
                    <p>Our thorough inspection and verification process protects you from potential issues and hidden costs.</p>
                    <ul class="service-features">
                        <li>Property inspection coordination</li>
                        <li>Title search and review</li>
                        <li>Documentation verification</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="selling" class="service-category">
        <div class="container">
            <div class="service-category-header animate-fade-in">
                <div class="icon">
                    <i class="fas fa-sign"></i>
                </div>
                <h2>Property Selling Services</h2>
                <p>Maximizing your property's value and streamlining the selling process</p>
            </div>
            <div class="services-grid">
                <div class="service-card animate-slide-up">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Property Valuation</h3>
                    <p>Get an accurate assessment of your property's market value based on comprehensive market analysis.</p>
                    <ul class="service-features">
                        <li>Comparative market analysis</li>
                        <li>Improvement value assessment</li>
                        <li>Strategic pricing recommendations</li>
                    </ul>
                </div>
                <div class="service-card animate-slide-up-delay-1">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Marketing & Exposure</h3>
                    <p>We create professional listings and implement targeted marketing strategies to attract qualified buyers.</p>
                    <ul class="service-features">
                        <li>Professional photography</li>
                        <li>Virtual tours and floor plans</li>
                        <li>Multi-channel marketing</li>
                    </ul>
                </div>
                <div class="service-card animate-slide-up-delay-2">
                    <div class="service-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Offer Management</h3>
                    <p>We handle incoming offers, negotiations, and counteroffers to secure the best terms for your property sale.</p>
                    <ul class="service-features">
                        <li>Offer review and comparison</li>
                        <li>Strategic negotiation</li>
                        <li>Contract preparation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="legal" class="service-category">
        <div class="container">
            <div class="service-category-header animate-fade-in">
                <div class="icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h2>Legal Documentation Services</h2>
                <p>Ensuring compliance and protection throughout the transaction</p>
            </div>
            <div class="services-grid">
                <div class="service-card animate-slide-up">
                    <div class="service-icon">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <h3>Contract Preparation</h3>
                    <p>Our legal experts prepare and review all necessary contracts to protect your interests and ensure compliance.</p>
                    <ul class="service-features">
                        <li>Purchase agreements</li>
                        <li>Disclosure documents</li>
                        <li>Addenda and amendments</li>
                    </ul>
                </div>
                <div class="service-card animate-slide-up-delay-1">
                    <div class="service-icon">
                        <i class="fas fa-search-document"></i>
                    </div>
                    <h3>Title Services</h3>
                    <p>We conduct comprehensive title searches and resolve any issues to ensure clear ownership transfer.</p>
                    <ul class="service-features">
                        <li>Title search and examination</li>
                        <li>Title insurance coordination</li>
                        <li>Lien resolution assistance</li>
                    </ul>
                </div>
                <div class="service-card animate-slide-up-delay-2">
                    <div class="service-icon">
                        <i class="fas fa-stamp"></i>
                    </div>
                    <h3>Closing Coordination</h3>
                    <p>We manage the closing process, ensuring all documentation is properly executed and recorded.</p>
                    <ul class="service-features">
                        <li>Closing document preparation</li>
                        <li>Signing coordination</li>
                        <li>Recording and distribution</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content text-center">
                <h2>Ready to Get Started?</h2>
                <p>Contact our team today for a free consultation about your real estate needs.</p>
                <div class="cta-buttons">
                    <a href="/contact" class="btn btn-primary">Contact Us</a>
                    <a href="/schedule" class="btn btn-outline-primary">Schedule a Call</a>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-preview">
        <div class="container">
            <div class="section-header text-center">
                <h2>What Our Clients Say</h2>
                <p>Hear from satisfied clients who have used our services</p>
            </div>
            <div class="testimonial-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"The team at RealEstatePro made buying our first home so much easier than we expected. Their guidance throughout the process was invaluable."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/images/client1.jpg" alt="Client">
                        </div>
                        <div class="author-info">
                            <h4>Jennifer & David T.</h4>
                            <p>First-time Homebuyers</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Selling our investment property was hands-off and profitable thanks to the excellent marketing and negotiation services provided."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/images/client2.jpg" alt="Client">
                        </div>
                        <div class="author-info">
                            <h4>Michael R.</h4>
                            <p>Property Investor</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="/testimonials" class="btn btn-link">View All Testimonials <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
@endsection