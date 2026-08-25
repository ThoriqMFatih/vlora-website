@extends('layouts.app')

@section('content')
    {{-- Hero Section - Apple style --}}
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="hero-title">Vlora<br>Nusantara</h1>
                    <p class="hero-subtitle">
                        Independent Export Broker
                    </p>
                    <p class="hero-description">
                        Specializing in premium Indonesian agro-maritime commodities. 
                        We bridge local producers with international markets through seamless 
                        export facilitation.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ route('about') }}" class="btn btn-primary">Our Story</a>
                        <a href="{{ route('services') }}" class="btn btn-outline-primary">Our Products</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="{{ asset('dokumentasi/WhatsApp Image 2026-01-28 at 09.17.25 (1).jpeg') }}" 
                             alt="Vlora Nusantara">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Products Showcase Section --}}
    <section class="section">
        <div class="container">
            <h2 class="section-title reveal">Our Premium Products</h2>
            <p class="section-subtitle reveal">Sourced with care, exported with excellence</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="showcase-card">
                        <div class="showcase-card-body">
                            <div class="showcase-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3 class="showcase-title">White Tea</h3>
                            <p class="showcase-description">
                                Premium White Tea varieties including Silver Needle & Peony, 
                                sourced from trusted plantations in West Java with rigorous quality control.
                            </p>
                            <a href="{{ route('services') }}" class="btn btn-outline-primary">Learn More →</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="showcase-card">
                        <div class="showcase-card-body">
                            <div class="showcase-icon">
                                <i class="fas fa-coffee"></i>
                            </div>
                            <h3 class="showcase-title">Green Coffee Beans</h3>
                            <p class="showcase-description">
                                High-quality Green Coffee Beans with full export compliance, 
                                meeting international quality standards and specifications.
                            </p>
                            <a href="{{ route('services') }}" class="btn btn-outline-primary">Learn More →</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="showcase-card">
                        <div class="showcase-card-body">
                            <div class="showcase-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <h3 class="showcase-title">Export Services</h3>
                            <p class="showcase-description">
                                Complete export facilitation from documentation to logistics coordination, 
                                ensuring smooth international trade.
                            </p>
                            <a href="{{ route('services') }}" class="btn btn-outline-primary">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose Us - Specs style --}}
    <section class="section section-alt">
        <div class="container">
            <h2 class="section-title reveal">Why Choose Us</h2>
            <p class="section-subtitle reveal">Excellence in every transaction</p>
            
            <div class="row g-5">
                <div class="col-md-4">
                    <div class="feature-item reveal">
                        <div class="feature-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4 class="feature-title">Quality Assurance</h4>
                        <p class="feature-description">
                            Rigorous quality control and laboratory testing to ensure 
                            premium standards in every shipment.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item reveal">
                        <div class="feature-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4 class="feature-title">Full Compliance</h4>
                        <p class="feature-description">
                            Complete export documentation including phytosanitary certificates, 
                            Certificate of Origin, and lab reports.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item reveal">
                        <div class="feature-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h4 class="feature-title">Efficient Logistics</h4>
                        <p class="feature-description">
                            Safe and on-time delivery with complete logistics and customs 
                            management expertise.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact CTA Section --}}
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title reveal">Ready to Start?</h2>
                    <p class="section-subtitle reveal">
                        Get in touch with us for transparent quotations and professional export services.
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap mt-4 reveal">
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Contact Us</a>
                        <a href="{{ route('services') }}" class="btn btn-outline-primary btn-lg">View Services</a>
                    </div>
                    <div class="row g-4 mt-5 reveal">
                        <div class="col-md-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <h4 class="feature-title">Phone</h4>
                                <p class="feature-description">+62 882-1425-9009</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h4 class="feature-title">Email</h4>
                                <p class="feature-description">cv.vloranusantara@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h4 class="feature-title">Location</h4>
                                <p class="feature-description">South Tangerang, Banten</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
