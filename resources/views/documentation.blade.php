@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="hero-title">Documentation</h1>
                    <p class="hero-subtitle">
                        Official certificates and documentation
                    </p>
                    <p class="hero-description">
                        Complete documentation and certificates for CV. Vlora Nusantara, 
                        ensuring full compliance and transparency in all our operations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Certificates Section (Updated) --}}
    <section class="section">
        <div class="container">
            <h2 class="section-title reveal">Legal Certificates & Documentation</h2>
            <p class="section-subtitle reveal">Official company registrations and compliance documents</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="showcase-card reveal">
                        <div class="card-body p-0" style="overflow: hidden; border-radius: 18px;">
                            <div style="position: relative; overflow: hidden; padding-top: 75%; background: var(--bg-secondary);">
                                <img src="{{ asset('dokumentasi/Business Identification Number.png') }}" 
                                     class="position-absolute top-0 start-0 w-100 h-100" 
                                     alt="Business Identification Number (NIB)"
                                     style="object-fit: cover; transition: transform 0.4s ease;">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Business Identification Number
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    Official NIB for CV Vlora Nusantara
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="showcase-card reveal">
                        <div class="card-body p-0" style="overflow: hidden; border-radius: 18px;">
                            <div style="position: relative; overflow: hidden; padding-top: 75%; background: var(--bg-secondary);">
                                <img src="{{ asset('dokumentasi/Certificate of Registration.png') }}" 
                                     class="position-absolute top-0 start-0 w-100 h-100" 
                                     alt="Tax Registration Certificate (NPWP)"
                                     style="object-fit: cover; transition: transform 0.4s ease;">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Tax Registration Certificate
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    NPWP registration for CV Vlora Nusantara
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="showcase-card reveal">
                        <div class="card-body p-0" style="overflow: hidden; border-radius: 18px;">
                            <div style="position: relative; overflow: hidden; padding-top: 75%; background: var(--bg-secondary);">
                                <img src="{{ asset('dokumentasi/Certificate of Corporate Registration.png') }}" 
                                     class="position-absolute top-0 start-0 w-100 h-100" 
                                     alt="Corporate Registration Certificate (AHU)"
                                     style="object-fit: cover; transition: transform 0.4s ease;">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Corporate Registration
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    Ministry of Law & Human Rights registration
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="showcase-card reveal">
                        <div class="card-body p-0" style="overflow: hidden; border-radius: 18px;">
                            <div style="position: relative; overflow: hidden; padding-top: 75%; background: var(--bg-secondary);">
                                <img src="{{ asset('dokumentasi/Health Safety Environment.png') }}" 
                                     class="position-absolute top-0 start-0 w-100 h-100" 
                                     alt="Health, Safety & Environmental Statement (K3L)"
                                     style="object-fit: cover; transition: transform 0.4s ease;">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Health, Safety & Environment
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    K3L commitment and compliance statement
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Certificates Photo Gallery (Previous Photos) --}}
    <section class="section section-alt">
        <div class="container">
            <h2 class="section-title reveal">Gallery</h2>
            <p class="section-subtitle reveal">Gallery and supporting photos</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="showcase-card reveal">
                        <div class="card-body p-0" style="overflow: hidden; border-radius: 18px;">
                            <div style="position: relative; overflow: hidden; padding-top: 75%; background: var(--bg-secondary);">
                                <img src="{{ asset('dokumentasi/WhatsApp Image 2026-01-28 at 09.17.25 (1).jpeg') }}" 
                                     class="position-absolute top-0 start-0 w-100 h-100" 
                                     alt="gallery photo 1"
                                     style="object-fit: cover; transition: transform 0.4s ease;">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Supplier Visit
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    Additional perspective of export documentation
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="showcase-card reveal">
                        <div class="card-body p-0" style="overflow: hidden; border-radius: 18px;">
                            <div style="position: relative; overflow: hidden; padding-top: 75%; background: var(--bg-secondary);">
                                <img src="{{ asset('dokumentasi/WhatsApp Image 2026-01-28 at 09.17.25.jpeg') }}" 
                                     class="position-absolute top-0 start-0 w-100 h-100" 
                                     alt="gallery photo 2"
                                     style="object-fit: cover; transition: transform 0.4s ease;">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Supplier Documentation
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    Supporting documentation
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="showcase-card reveal">
                        <div class="card-body p-0" style="overflow: hidden; border-radius: 18px;">
                            <div style="position: relative; overflow: hidden; padding-top: 75%; background: var(--bg-secondary);">
                                <img src="{{ asset('dokumentasi/WhatsApp Image 2026-01-28 at 09.17.30.jpeg') }}" 
                                     class="position-absolute top-0 start-0 w-100 h-100" 
                                     alt="gallery photo 3"
                                     style="object-fit: cover; transition: transform 0.4s ease;">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Identity
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    Our Logo
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Video Documentation Section --}}
    <section class="section section-alt">
        <div class="container">
            <h2 class="section-title reveal">Video Documentation</h2>
            <p class="section-subtitle reveal">See our processes in action</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="showcase-card reveal">
                        <div class="card-body p-0" style="overflow: hidden; border-radius: 18px;">
                            <div style="position: relative; padding-top: 56.25%; background: #000;">
                                <video class="position-absolute top-0 start-0 w-100 h-100" 
                                       controls 
                                       style="object-fit: cover;">
                                    <source src="{{ asset('dokumentasi/WhatsApp Video 2026-01-28 at 09.17.26.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Process Overview
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    Our export workflow
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="showcase-card reveal">
                        <div class="card-body p-0" style="overflow: hidden; border-radius: 18px;">
                            <div style="position: relative; padding-top: 56.25%; background: #000;">
                                <video class="position-absolute top-0 start-0 w-100 h-100" 
                                       controls 
                                       style="object-fit: cover;">
                                    <source src="{{ asset('dokumentasi/WhatsApp Video 2026-01-28 at 09.17.26 (1).mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Quality Control
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    Quality assurance process
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="showcase-card reveal">
                        <div class="card-body p-0" style="overflow: hidden; border-radius: 18px;">
                            <div style="position: relative; padding-top: 56.25%; background: #000;">
                                <video class="position-absolute top-0 start-0 w-100 h-100" 
                                       controls 
                                       style="object-fit: cover;">
                                    <source src="{{ asset('dokumentasi/WhatsApp Video 2026-01-28 at 09.17.26 (2).mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Logistics & Shipping
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    Shipping and logistics operations
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Compliance Info Section --}}
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="showcase-card reveal">
                        <div class="showcase-card-body">
                            <h3 class="showcase-title text-center mb-5">Compliance & Certifications</h3>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <h5 style="font-size: 19px; font-weight: 600; color: var(--text-primary); margin-bottom: 12px;">
                                            <i class="fas fa-certificate me-2" style="color: var(--primary);"></i>
                                            Export Compliance
                                        </h5>
                                        <p style="font-size: 17px; color: var(--text-secondary); margin: 0;">
                                            Full compliance with Indonesian Export Regulations including 
                                            Phytosanitary Certificates, Certificate of Origin, and 
                                            Certificate of Analysis.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <h5 style="font-size: 19px; font-weight: 600; color: var(--text-primary); margin-bottom: 12px;">
                                            <i class="fas fa-shield-alt me-2" style="color: var(--primary);"></i>
                                            Quality Assurance
                                        </h5>
                                        <p style="font-size: 17px; color: var(--text-secondary); margin: 0;">
                                            Rigorous quality control processes and laboratory testing 
                                            to ensure all products meet international standards and 
                                            buyer specifications.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
