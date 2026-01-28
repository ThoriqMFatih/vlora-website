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

    {{-- Certificates Gallery --}}
    <section class="section">
        <div class="container">
            <h2 class="section-title reveal">Certificates & Documentation</h2>
            <p class="section-subtitle reveal">Full compliance with Indonesian export regulations</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="showcase-card reveal">
                        <div class="card-body p-0" style="overflow: hidden; border-radius: 18px;">
                            <div style="position: relative; overflow: hidden; padding-top: 75%; background: var(--bg-secondary);">
                                <img src="{{ asset('dokumentasi/WhatsApp Image 2026-01-28 at 09.17.25 (1).jpeg') }}" 
                                     class="position-absolute top-0 start-0 w-100 h-100" 
                                     alt="Certificate 1"
                                     style="object-fit: cover; transition: transform 0.4s ease;">
                                <style>
                                    .showcase-card:hover img {
                                        transform: scale(1.05);
                                    }
                                </style>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Export Certificate
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    Official export documentation
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
                                     alt="Certificate 2"
                                     style="object-fit: cover; transition: transform 0.4s ease;">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Quality Certificate
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    Laboratory testing documentation
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
                                     alt="Certificate 3"
                                     style="object-fit: cover; transition: transform 0.4s ease;">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2" style="font-size: 19px; font-weight: 600; color: var(--text-primary);">
                                    Compliance Certificate
                                </h5>
                                <p class="mb-0" style="font-size: 15px; color: var(--text-secondary);">
                                    Regulatory compliance documentation
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
