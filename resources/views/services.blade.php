@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="hero-title">Products &<br>Trading Terms</h1>
                    <p class="hero-subtitle mx-auto text-center">
                        Premium Indonesian agro-maritime commodities
                    </p>
                    <p class="hero-description mx-auto text-center">
                        Full export compliance and transparent trading terms for seamless 
                        international business transactions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Products Detail Section --}}
    <section class="section">
        <div class="container">
            <h2 class="section-title reveal">Our Premium Products</h2>
            <p class="section-subtitle reveal">Sourced with excellence, exported with care</p>
            
            <div class="row g-5 mb-5">
                <div class="col-lg-6">
                    <div class="showcase-card reveal">
                        <div class="showcase-card-body">
                            <div class="showcase-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3 class="showcase-title">White Tea</h3>
                            <p class="showcase-description">
                                Premium White Tea varieties including Silver Needle & Peony, sourced from 
                                trusted tea plantations in West Java with rigorous quality control and 
                                laboratory testing.
                            </p>
                            <div class="mt-4">
                                <h5 class="mb-3" style="font-size: 17px; font-weight: 600; color: var(--text-primary);">Varieties:</h5>
                                <ul style="list-style: none; padding: 0;">
                                    <li class="mb-2" style="font-size: 17px; color: var(--text-secondary);">
                                        <i class="fas fa-check text-success me-2"></i> Silver Needle
                                    </li>
                                    <li class="mb-2" style="font-size: 17px; color: var(--text-secondary);">
                                        <i class="fas fa-check text-success me-2"></i> Peony
                                    </li>
                                    <li class="mb-2" style="font-size: 17px; color: var(--text-secondary);">
                                        <i class="fas fa-check text-success me-2"></i> Laboratory Tested
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="showcase-card reveal">
                        <div class="showcase-card-body">
                            <div class="showcase-icon">
                                <i class="fas fa-coffee"></i>
                            </div>
                            <h3 class="showcase-title">Green Coffee Beans</h3>
                            <p class="showcase-description">
                                High-quality Green Coffee Beans with full export compliance, meeting 
                                international quality standards and specifications agreed upon by buyers.
                            </p>
                            <div class="mt-4">
                                <h5 class="mb-3" style="font-size: 17px; font-weight: 600; color: var(--text-primary);">Features:</h5>
                                <ul style="list-style: none; padding: 0;">
                                    <li class="mb-2" style="font-size: 17px; color: var(--text-secondary);">
                                        <i class="fas fa-check text-success me-2"></i> Premium Quality
                                    </li>
                                    <li class="mb-2" style="font-size: 17px; color: var(--text-secondary);">
                                        <i class="fas fa-check text-success me-2"></i> Export Ready
                                    </li>
                                    <li class="mb-2" style="font-size: 17px; color: var(--text-secondary);">
                                        <i class="fas fa-check text-success me-2"></i> Fully Certified
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Trading Terms - Specs Style --}}
    <section class="section section-alt">
        <div class="container">
            <h2 class="section-title reveal">Trading Terms</h2>
            <p class="section-subtitle reveal">Transparent and secure business processes</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="showcase-card reveal">
                        <div class="showcase-card-body text-center">
                            <div class="mb-4">
                                <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" 
                                     style="width: 64px; height: 64px; background-color: var(--bg-secondary) !important;">
                                    <span style="font-size: 28px; font-weight: 700; color: var(--primary);">1</span>
                                </div>
                            </div>
                            <h4 class="showcase-title" style="font-size: 22px;">Sourcing & Vetting</h4>
                            <p class="showcase-description" style="font-size: 15px;">
                                Direct partnerships with trusted tea plantations in West Java. 
                                Quality verification through rigorous sorting and laboratory testing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="showcase-card reveal">
                        <div class="showcase-card-body text-center">
                            <div class="mb-4">
                                <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" 
                                     style="width: 64px; height: 64px; background-color: var(--bg-secondary) !important;">
                                    <span style="font-size: 28px; font-weight: 700; color: var(--primary);">2</span>
                                </div>
                            </div>
                            <h4 class="showcase-title" style="font-size: 22px;">Quotation & Pricing</h4>
                            <p class="showcase-description" style="font-size: 15px;">
                                Transparent FOB quotations based on harvest seasons and global market trends. 
                                Pricing reflects current production availability.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="showcase-card reveal">
                        <div class="showcase-card-body text-center">
                            <div class="mb-4">
                                <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" 
                                     style="width: 64px; height: 64px; background-color: var(--bg-secondary) !important;">
                                    <span style="font-size: 28px; font-weight: 700; color: var(--primary);">3</span>
                                </div>
                            </div>
                            <h4 class="showcase-title" style="font-size: 22px;">Compliance & Documentation</h4>
                            <p class="showcase-description" style="font-size: 15px;">
                                Full compliance with Indonesian Export Regulations: Phytosanitary Certificates, 
                                Certificate of Origin, and Certificate of Analysis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="showcase-card reveal">
                        <div class="showcase-card-body text-center">
                            <div class="mb-4">
                                <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" 
                                     style="width: 64px; height: 64px; background-color: var(--bg-secondary) !important;">
                                    <span style="font-size: 28px; font-weight: 700; color: var(--primary);">4</span>
                                </div>
                            </div>
                            <h4 class="showcase-title" style="font-size: 22px;">Payment Terms</h4>
                            <p class="showcase-description" style="font-size: 15px;">
                                Standard: 50% Down Payment upon contract signing, 50% Balance Payment 
                                against copy of B/L via secure Telegraphic Transfer (T/T).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="showcase-card reveal" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); border: none;">
                        <div class="showcase-card-body text-center text-white" style="padding: 80px 40px;">
                            <h2 class="section-title text-white mb-3" style="font-size: 48px;">Ready to Start Your Export Journey?</h2>
                            <p class="section-subtitle text-white mb-5" style="font-size: 21px; opacity: 0.9;">
                                Contact us today for transparent quotations and professional export services.
                            </p>
                            <a href="{{ route('contact') }}" class="btn btn-light btn-lg" style="background: #fff; color: var(--primary); border: none; padding: 14px 32px; font-size: 17px;">
                                Contact Us Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
