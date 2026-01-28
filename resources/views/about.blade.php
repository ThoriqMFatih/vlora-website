@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h1 class="hero-title">Our Story</h1>
                    <p class="hero-subtitle mx-auto text-center">
                        Independent Export Broker
                    </p>
                    <p class="hero-description mx-auto text-center">
                        Specializing in premium Indonesian agro-maritime commodities, 
                        bridging local producers with international markets.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Background Section --}}
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 reveal">
                    <h2 class="section-title text-start" style="font-size: clamp(36px, 4vw, 56px); margin-bottom: 24px;">
                        Our Background
                    </h2>
                    <p class="hero-description text-start mb-4">
                        Vlora Nusantara functions as an independent <strong>Export Broker</strong> 
                        specializing in Indonesian agro-maritime commodities.
                    </p>
                    <p class="hero-description text-start">
                        The name "Vlora" is inspired by <strong>flora & fauna</strong>, reflecting 
                        our initial vision to create <strong>good impact for the environment</strong> 
                        in the middle of a polluted city.
                    </p>
                </div>
                <div class="col-lg-6 reveal">
                    @if(file_exists(public_path('dokumentasi/LOGO VLORA.png')))
                        <div class="text-center">
                            <img src="{{ asset('dokumentasi/LOGO VLORA.png') }}" 
                                 alt="Vlora Nusantara Logo" 
                                 class="img-fluid"
                                 style="max-width: 400px; height: auto;">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- Vision Section --}}
    <section class="section section-alt">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center reveal">
                    <h2 class="section-title">Our Vision</h2>
                    <p class="section-subtitle">
                        We act as a <strong>bridge</strong> between local producers and buyers/importers 
                        in international markets.
                    </p>
                    <p class="hero-description">
                        Our main role is to <strong>facilitate and secure</strong> export transactions — 
                        from price quotations and contract negotiations to logistics coordination and 
                        customs documentation fulfillment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Workflow Section - Timeline Style --}}
    <section class="section">
        <div class="container">
            <h2 class="section-title reveal">Our Workflow</h2>
            <p class="section-subtitle reveal">Seamless process from start to finish</p>
            
            <div class="row g-5">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item reveal">
                        <div class="mb-4">
                            <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" 
                                 style="width: 64px; height: 64px; background-color: var(--bg-secondary) !important;">
                                <span style="font-size: 28px; font-weight: 700; color: var(--primary);">1</span>
                            </div>
                        </div>
                        <h4 class="feature-title">Quality Preparation</h4>
                        <p class="feature-description">
                            Products are prepared with <strong>high-quality standards</strong> and completed 
                            with official export documents to ensure a <strong>smooth</strong> shipping process.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item reveal">
                        <div class="mb-4">
                            <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" 
                                 style="width: 64px; height: 64px; background-color: var(--bg-secondary) !important;">
                                <span style="font-size: 28px; font-weight: 700; color: var(--primary);">2</span>
                            </div>
                        </div>
                        <h4 class="feature-title">Logistics Management</h4>
                        <p class="feature-description">
                            We manage logistics and customs procedures <strong>efficiently</strong>, ensuring 
                            <strong>safe and on-time</strong> delivery to the destination country.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item reveal">
                        <div class="mb-4">
                            <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" 
                                 style="width: 64px; height: 64px; background-color: var(--bg-secondary) !important;">
                                <span style="font-size: 28px; font-weight: 700; color: var(--primary);">3</span>
                            </div>
                        </div>
                        <h4 class="feature-title">Delivery & Support</h4>
                        <p class="feature-description">
                            Goods are delivered in <strong>accordance</strong> with the agreed shipping terms 
                            (Incoterms), with support from our team until the receipt process is <strong>completed</strong>.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item reveal">
                        <div class="mb-4">
                            <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" 
                                 style="width: 64px; height: 64px; background-color: var(--bg-secondary) !important;">
                                <span style="font-size: 28px; font-weight: 700; color: var(--primary);">4</span>
                            </div>
                        </div>
                        <h4 class="feature-title">Secure Payment</h4>
                        <p class="feature-description">
                            Secure and transparent payment process via <strong>international standard methods</strong> 
                            (T/T or Irrevocable L/C).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Company Details Card --}}
    <section class="section section-alt">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="showcase-card reveal">
                        <div class="showcase-card-body">
                            <h3 class="showcase-title text-center mb-5">Company Details</h3>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <h5 style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 8px;">
                                            Company Name
                                        </h5>
                                        <p style="font-size: 19px; font-weight: 500; color: var(--text-primary); margin: 0;">
                                            CV. Vlora Nusantara
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <h5 style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 8px;">
                                            Role
                                        </h5>
                                        <p style="font-size: 19px; font-weight: 500; color: var(--text-primary); margin: 0;">
                                            Export Broker
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <h5 style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 8px;">
                                            Focus
                                        </h5>
                                        <p style="font-size: 19px; font-weight: 500; color: var(--text-primary); margin: 0;">
                                            Indonesian Agro-Maritime Commodities
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <h5 style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 8px;">
                                            Location
                                        </h5>
                                        <p style="font-size: 19px; font-weight: 500; color: var(--text-primary); margin: 0;">
                                            South Tangerang, Banten - Indonesia
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
