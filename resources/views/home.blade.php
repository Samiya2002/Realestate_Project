<!-- home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <h1 class="animate-fadeIn">Your Journey to Dream Property Starts Here</h1>
            <p class="animate-fadeIn-delay">We simplify the real estate process with technology and expertise.</p>
            <div class="hero-buttons animate-fadeIn-delay-2">
                <a href="/services" class="btn btn-primary">Our Services</a>
                <a href="/contact" class="btn btn-outline">Contact Us</a>
            </div>
        </div>
        <div class="hero-overlay"></div>
    </section>

    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose RealEstatePro</h2>
                <p>We make property transactions simple, secure, and stress-free</p>
            </div>
            <div class="features-grid">
                <div class="feature-card animate-fadeUp">
                    <div class="feature-icon">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <h3>Streamlined Documentation</h3>
                    <p>We handle all paperwork and legal formalities with efficiency and precision.</p>
                </div>
                <div class="feature-card animate-fadeUp-delay-1">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure Transactions</h3>
                    <p>Your financial and personal information is protected with enterprise-grade security.</p>
                </div>
                <div class="feature-card animate-fadeUp-delay-2">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Time-Saving Process</h3>
                    <p>Our technology reduces closing time by up to 60% compared to traditional methods.</p>
                </div>
                <div class="feature-card animate-fadeUp-delay-3">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Expert Support</h3>
                    <p>Access to dedicated specialists throughout your real estate journey.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="how-it-works">
        <div class="container">
            <div class="section-header">
                <h2>How It Works</h2>
                <p>Our simple 4-step process to facilitate your real estate transactions</p>
            </div>
            <div class="process-steps">
                <div class="step animate-slide-right">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Consultation</h3>
                        <p>Schedule a free consultation to discuss your real estate needs and goals.</p>
                    </div>
                </div>
                <div class="step animate-slide-left">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Documentation</h3>
                        <p>We prepare and process all necessary paperwork accurately and efficiently.</p>
                    </div>
                </div>
                <div class="step animate-slide-right">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Verification</h3>
                        <p>Our experts verify all aspects of the transaction to ensure compliance and security.</p>
                    </div>
                </div>
                <div class="step animate-slide-left">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Closing</h3>
                        <p>We facilitate a smooth closing process, finalizing your transaction with ease.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>What Our Clients Say</h2>
                <p>Real stories from satisfied customers</p>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"RealEstatePro made buying my first home so much easier than I expected. Their team guided me through every step, and the process was incredibly smooth."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('images/testimonial-1.jpg') }}" alt="Sarah J." onerror="this.src='{{ asset('images/default-avatar.jpg') }}'">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Sarah Johnson</h4>
                            <p>First-time Homebuyer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"As someone who's sold multiple properties, I can confidently say that RealEstatePro offers the most efficient and hassle-free service I've experienced."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('images/testimonial-2.jpg') }}" alt="Michael T." onerror="this.src='{{ asset('images/default-avatar.jpg') }}'">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Michael Thompson</h4>
                            <p>Property Investor</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"The legal expertise provided by RealEstatePro saved us from potential issues we hadn't even considered. Their attention to detail is remarkable."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('images/testimonial-3.jpg') }}" alt="Elena R." onerror="this.src='{{ asset('images/default-avatar.jpg') }}'">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Elena Rodriguez</h4>
                            <p>Commercial Property Owner</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <button class="prev-btn" aria-label="Previous testimonial"><i class="fas fa-chevron-left"></i></button>
                <div class="slider-dots">
                    <button class="dot active" aria-label="Go to slide 1"></button>
                    <button class="dot" aria-label="Go to slide 2"></button>
                    <button class="dot" aria-label="Go to slide 3"></button>
                </div>
                <button class="next-btn" aria-label="Next testimonial"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Start Your Real Estate Journey?</h2>
                <p>Our team of experts is here to guide you through every step of the process.</p>
                <a href="/contact" class="btn btn-primary btn-large">Get Started Today</a>
            </div>
        </div>
    </section>
@endsection