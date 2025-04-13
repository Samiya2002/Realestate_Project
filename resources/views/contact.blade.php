@extends('layouts.app')

@section('title', 'Contact Us - Real Estate Facilitator')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with our real estate experts today</p>
    </div>
</div>

<section class="contact-section">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info">
                <h2>Let's Connect</h2>
                <p>We're here to answer any questions you have about our real estate services. Reach out to us and we'll respond as soon as we can.</p>
                
                <div class="contact-details">
                    <div class="contact-detail-item">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="content">
                            <h3>Our Office</h3>
                            <p>123 Real Estate Avenue, Suite 101<br>New York, NY 10001</p>
                        </div>
                    </div>
                    
                    <div class="contact-detail-item">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="content">
                            <h3>Phone</h3>
                            <p>(555) 123-4567</p>
                        </div>
                    </div>
                    
                    <div class="contact-detail-item">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h3>Email</h3>
                            <p>info@realestatefacilitator.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-detail-item">
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="content">
                            <h3>Business Hours</h3>
                            <p>Monday - Friday: 9AM - 6PM<br>Saturday: 10AM - 4PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                
                <div class="social-connect">
                    <h3>Connect With Us</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-container">
                <h2>Send Us a Message</h2>
                <form action="{{ url('/contact') }}" method="POST" class="contact-form">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="checkbox-container">
                            <input type="checkbox" name="agree" required>
                            <span class="checkmark"></span>
                            I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="container">
        <h2 class="section-title">Find Us</h2>
        <div class="map-container">
            <!-- Replace this with your actual map embed code -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215712672698!2d-73.97881502358236!3d40.75801657138358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b30eac9f%3A0x772e947e2314c1c3!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1616401254086!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What services do you offer?</h3>
                    <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-answer">
                    <p>We offer a comprehensive range of real estate services including property listings, document management, negotiation support, market analysis, property inspection, and closing assistance. Our goal is to simplify your real estate journey from beginning to end.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How much do your services cost?</h3>
                    <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Our service costs vary depending on the specific needs of each client. We offer customized packages and transparent pricing. Please contact us directly for a personalized quote based on your requirements.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How long does the real estate process typically take?</h3>
                    <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-answer">
                    <p>The timeline varies depending on various factors including market conditions, property type, and financing options. On average, a complete transaction can take anywhere from 30 to 90 days. We work efficiently to ensure the process moves as quickly as possible while maintaining thoroughness.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you work with first-time home buyers?</h3>
                    <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we specialize in helping first-time home buyers navigate the complex real estate process. We provide additional guidance and support to ensure you understand each step and make informed decisions throughout your home buying journey.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What areas do you serve?</h3>
                    <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-answer">
                    <p>We primarily serve the greater New York metropolitan area, including all five boroughs and surrounding suburbs. For inquiries about services in other locations, please contact us directly.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('page-scripts')
<script>
    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const faqItem = question.parentElement;
            const isActive = faqItem.classList.contains('active');
            
            // Close all other FAQs
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
                item.querySelector('.faq-toggle i').className = 'fas fa-plus';
            });
            
            // Toggle current FAQ
            if (!isActive) {
                faqItem.classList.add('active');
                question.querySelector('.faq-toggle i').className = 'fas fa-minus';
            }
        });
    });
    
    // Form validation
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            const emailInput = document.getElementById('email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!emailRegex.test(emailInput.value)) {
                event.preventDefault();
                alert('Please enter a valid email address');
                emailInput.focus();
            }
        });
    }
</script>
@endsection