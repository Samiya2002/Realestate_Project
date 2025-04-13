<!-- about.blade.php -->
@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1>About RealEstatePro</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="about-intro">
        <div class="container">
            <div class="about-grid">
                <div class="about-image animate-fadeIn">
                    <img src="{{ asset('images/about-main.jpg') }}" alt="RealEstatePro Team" onerror="this.src='{{ asset('images/default-about.jpg') }}'">
                </div>
                <div class="about-content animate-fadeIn-delay">
                    <h2>Our Story</h2>
                    <p>Founded in 2015, RealEstatePro began with a simple mission: to simplify the complex world of real estate transactions. Our founders, experienced real estate professionals, witnessed firsthand the stress and confusion that many clients faced during property buying and selling processes.</p>
                    <p>They envisioned a service that would combine industry expertise with modern technology to create a more transparent, efficient, and stress-free experience for everyone involved in real estate deals.</p>
                    <p>Today, RealEstatePro has facilitated over 5,000 successful transactions, helping individuals and businesses navigate the real estate market with confidence and ease.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-vision">
        <div class="container">
            <div class="mission-vision-grid">
                <div class="mission-box animate-slide-up">
                    <div class="content-box">
                        <h3>Our Mission</h3>
                        <p>To streamline real estate transactions through innovative technology and personalized service, ensuring a seamless experience for all parties involved.</p>
                        <div class="icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                    </div>
                </div>
                <div class="vision-box animate-slide-up-delay">
                    <div class="content-box">
                        <h3>Our Vision</h3>
                        <p>To revolutionize the real estate industry by creating the most efficient, transparent, and client-focused transaction process in the market.</p>
                        <div class="icon">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="values">
        <div class="container">
            <div class="section-header">
                <h2>Our Core Values</h2>
                <p>The principles that guide our work and relationships</p>
            </div>
            <div class="values-grid">
                <div class="value-card animate-fade-in-stagger-1">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>We maintain the highest ethical standards in all our dealings, prioritizing honesty and transparency.</p>
                </div>
                <div class="value-card animate-fade-in-stagger-2">
                    <div class="value-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3>Client Focus</h3>
                    <p>Your needs and goals are at the center of everything we do, guiding our approach and solutions.</p>
                </div>
                <div class="value-card animate-fade-in-stagger-3">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We continuously improve our processes and technology to deliver better outcomes for our clients.</p>
                </div>
                <div class="value-card animate-fade-in-stagger-4">
                    <div class="value-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>We strive for perfection in every transaction, paying meticulous attention to every detail.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="section-header">
                <h2>Meet Our Leadership Team</h2>
                <p>Experienced professionals dedicated to your success</p>
            </div>
            <div class="team-grid">
                <div class="team-member animate-pop-in">
                    <div class="member-image">
                        <img src="{{ asset('images/team-1.jpg') }}" alt="David Chen" onerror="this.src='{{ asset('images/default-avatar.jpg') }}'">
                    </div>
                    <div class="member-info">
                        <h3>David Chen</h3>
                        <p class="member-position">CEO & Co-Founder</p>
                        <p class="member-bio">With over 20 years in real estate and technology, David leads our vision of simplified property transactions.</p>
                        <div class="member-social">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member animate-pop-in-delay-1">
                    <div class="member-image">
                        <img src="{{ asset('images/team-2.jpg') }}" alt="Sophia Martinez" onerror="this.src='{{ asset('images/default-avatar.jpg') }}'">
                    </div>
                    <div class="member-info">
                        <h3>Sophia Martinez</h3>
                        <p class="member-position">COO & Co-Founder</p>
                        <p class="member-bio">Sophia's background in real estate law and operations ensures our processes are both efficient and compliant.</p>
                        <div class="member-social">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member animate-pop-in-delay-2">
                    <div class="member-image">
                        <img src="{{ asset('images/team-3.jpg') }}" alt="Marcus Johnson" onerror="this.src='{{ asset('images/default-avatar.jpg') }}'">
                    </div>
                    <div class="member-info">
                        <h3>Marcus Johnson</h3>
                        <p class="member-position">CTO</p>
                        <p class="member-bio">Marcus drives our technological innovation, creating the secure digital platforms that power our services.</p>
                        <div class="member-social">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member animate-pop-in-delay-3">
                    <div class="member-image">
                        <img src="{{ asset('images/team-4.jpg') }}" alt="Aisha Patel" onerror="this.src='{{ asset('images/default-avatar.jpg') }}'">
                    </div>
                    <div class="member-info">
                        <h3>Aisha Patel</h3>
                        <p class="member-position">Director of Client Services</p>
                        <p class="member-bio">Aisha ensures every client receives personalized support throughout their real estate journey.</p>
                        <div class="member-social">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item animate-count-up">
                    <div class="stat-number" data-target="5000">75</div>
                    <div class="stat-label">Transactions Completed</div>
                </div>
                <div class="stat-item animate-count-up-delay-1">
                    <div class="stat-number" data-target="98">85</div>
                    <div class="stat-label">Client Satisfaction %</div>
                </div>
                <div class="stat-item animate-count-up-delay-2">
                    <div class="stat-number" data-target="12">20</div>
                    <div class="stat-label">Years of Experience</div>
                </div>
                <div class="stat-item animate-count-up-delay-3">
                    <div class="stat-number" data-target="50">20</div>
                    <div class="stat-label">Expert Team Members</div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Join Our Growing Community of Satisfied Clients</h2>
                <p>Experience the RealEstatePro difference for your next property transaction.</p>
                <div class="cta-buttons">
                    <a href="/services" class="btn btn-primary">Explore Our Services</a>
                    <a href="/contact" class="btn btn-outline">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
@endsection