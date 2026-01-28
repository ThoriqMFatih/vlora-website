@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="hero-title">Get In Touch</h1>
                    <p class="hero-subtitle">
                        Let's start a conversation
                    </p>
                    <p class="hero-description">
                        For export inquiries, product specifications, or collaboration opportunities, 
                        feel free to reach out to us.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Form & Info Section --}}
    <section class="section">
        <div class="container">
            <div class="row g-5">
                {{-- Contact Form --}}
                <div class="col-lg-7">
                    <div class="showcase-card reveal">
                        <div class="showcase-card-body">
                            <h3 class="showcase-title mb-4">Send us a message</h3>
                            
                            {{-- Success Message --}}
                            @if(session('success'))
                                <div class="alert alert-success mb-4" style="border-radius: 12px; border: none; background-color: #d4edda; color: #155724; padding: 16px;">
                                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                                </div>
                            @endif

                            {{-- Error Message --}}
                            @if(session('error'))
                                <div class="alert alert-danger mb-4" style="border-radius: 12px; border: none; background-color: #f8d7da; color: #721c24; padding: 16px;">
                                    <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="form-label" style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 8px;">
                                        Name
                                    </label>
                                    <input type="text" 
                                           class="form-control @error('name') is-invalid @enderror" 
                                           id="name" 
                                           name="name"
                                           value="{{ old('name') }}"
                                           placeholder="Your name"
                                           required
                                           style="border-radius: 12px; border: 1.5px solid rgba(0,0,0,0.1); padding: 14px 18px; font-size: 17px; transition: all 0.3s ease;">
                                    @error('name')
                                        <div class="text-danger mt-2" style="font-size: 14px;">{{ $message }}</div>
                                    @enderror
                                    <style>
                                        .form-control:focus {
                                            border-color: var(--primary);
                                            box-shadow: 0 0 0 3px rgba(128, 0, 0, 0.1);
                                            outline: none;
                                        }
                                    </style>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label" style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 8px;">
                                        Email
                                    </label>
                                    <input type="email" 
                                           class="form-control @error('email') is-invalid @enderror" 
                                           id="email" 
                                           name="email"
                                           value="{{ old('email') }}"
                                           placeholder="you@example.com"
                                           required
                                           style="border-radius: 12px; border: 1.5px solid rgba(0,0,0,0.1); padding: 14px 18px; font-size: 17px; transition: all 0.3s ease;">
                                    @error('email')
                                        <div class="text-danger mt-2" style="font-size: 14px;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label" style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 8px;">
                                        Message
                                    </label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" 
                                              id="message" 
                                              name="message"
                                              rows="6" 
                                              placeholder="Tell us briefly about your needs"
                                              required
                                              style="border-radius: 12px; border: 1.5px solid rgba(0,0,0,0.1); padding: 14px 18px; font-size: 17px; resize: vertical; transition: all 0.3s ease;">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="text-danger mt-2" style="font-size: 14px;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Contact Information --}}
                <div class="col-lg-5">
                    <div class="showcase-card reveal">
                        <div class="showcase-card-body">
                            <h3 class="showcase-title mb-5">Contact Information</h3>
                            
                            <div class="mb-5">
                                <div class="d-flex align-items-start mb-4">
                                    <div class="feature-icon me-4" style="margin-top: 4px;">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div>
                                        <h5 style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 8px;">
                                            Company
                                        </h5>
                                        <p style="font-size: 19px; font-weight: 500; color: var(--text-primary); margin: 0;">
                                            CV. Vlora Nusantara
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start mb-4">
                                    <div class="feature-icon me-4" style="margin-top: 4px;">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div>
                                        <h5 style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 8px;">
                                            Phone
                                        </h5>
                                        <p style="font-size: 19px; font-weight: 500; color: var(--text-primary); margin: 0;">
                                            <a href="tel:+6288214259009" style="color: var(--text-primary); text-decoration: none;">
                                                +62 882-1425-9009
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start mb-4">
                                    <div class="feature-icon me-4" style="margin-top: 4px;">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div>
                                        <h5 style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 8px;">
                                            Email
                                        </h5>
                                        <p style="font-size: 19px; font-weight: 500; color: var(--text-primary); margin: 0;">
                                            <a href="mailto:cv.vloranusantara@gmail.com" style="color: var(--text-primary); text-decoration: none;">
                                                cv.vloranusantara@gmail.com
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start">
                                    <div class="feature-icon me-4" style="margin-top: 4px;">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div>
                                        <h5 style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 8px;">
                                            Address
                                        </h5>
                                        <p style="font-size: 19px; font-weight: 500; color: var(--text-primary); margin: 0;">
                                            South Tangerang, Banten<br>Indonesia
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 pt-4" style="border-top: 1px solid rgba(0,0,0,0.1);">
                                <h5 style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 16px;">
                                    Business Hours
                                </h5>
                                <p style="font-size: 17px; color: var(--text-secondary); margin: 0;">
                                    Monday - Friday: 9:00 AM - 5:00 PM<br>
                                    Saturday: 9:00 AM - 1:00 PM<br>
                                    Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
