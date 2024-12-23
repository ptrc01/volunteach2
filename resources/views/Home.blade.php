@extends('layout')

@section('content')
    <main class="flex-shrink-0">
        <section class="py-5">
            <div class="container px-5">
                <div class="card border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="row gx-0">
                            <div class="col-lg-6 col-xl-5 py-lg-5">
                                <div class="p-4 p-md-5">
                                    <div class="h2 fw-bolder">Join Us to Make a Difference!</div>
                                    <p>Become a volunteer and help educate those in need.</p>

                                    @auth

                                    @else
                                        <a href="{{ route('register') }}" class="btn btn-primary btn-sm px-4 py-2 border-2 rounded-pill">Register Here</a>
                                    @endauth

                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7">
                                <img src="{{ asset('storage/images/home/1.png') }}" alt="Featured Blog Image" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 bg-light">
            <div class="container px-5">
                <div class="h2 fw-bolder text-center mb-3">Who We Are</div>
                <p class="text-muted text-center fs-5">Empowering communities through education, one connection at a time. Our mission is to bridge passionate volunteers with meaningful teaching opportunities to inspire and uplift society.</p>
                <div class="text-center mt-4">
                    <a href="{{ route('client.aboutUs') }}" class="btn btn-primary btn-sm px-4 py-2 border-2 rounded-pill">Learn More</a>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container px-5">
                <h2 class="fw-bolder fs-5 mb-4">Featured Stories</h2>
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('storage/images/home/2.png') }}" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge rounded-pill mb-2">Denpasar, Bali</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h5 card-title mb-3">From Passion to Action: My Experience as a Volunteer Teacher</div></a>
                                <p class="card-text mb-0">This journey has sharpened my teaching skills and strengthened my commitment to making an impact.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                            <img src="{{ asset('storage/images/home/profile1.png') }}" alt="Profile Picture"
                                            style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%; margin-right: 10px;" />
                                        <div class="small">
                                            <div class="fw-bold">Carloz Sainz</div>
                                            <div class="text-muted">March 20, 2024 &middot; 6 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('storage/images/home/3.png') }}" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-gradient rounded-pill mb-2">Bandung, Jawa Barat</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h5 card-title mb-3">Changing Lives, One Lesson at a Time</div></a>
                                <p class="card-text mb-0">Each lesson I teach brings a new opportunity to inspire and empower students, making a lasting difference in their lives and my own.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/images/home/profile2.png') }}" alt="Profile Picture"
                                            style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%; margin-right: 10px;" />
                                        <div class="small">
                                            <div class="fw-bold">Tom Cruise</div>
                                            <div class="text-muted">July 23, 2024 &middot; 4 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('storage/images/home/4.png') }}" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-gradient rounded-pill mb-2">Malang, Jawa Timur</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h5 card-title mb-3">From Volunteer to Mentor: A Journey of Empowerment</div></a>
                                <p class="card-text mb-0">What started as volunteering grew into a mentor role, empowering students to reach their full potential.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/images/home/profile3.png') }}" alt="Profile Picture"
                                            style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%; margin-right: 10px;" />
                                        <div class="small">
                                            <div class="fw-bold">Theo James</div>
                                            <div class="text-muted">September 23, 2024 &middot; 10 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5" id="contact-us">
            <div class="container px-5">
                <div class="card border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="row gx-0">
                            <div class="col-lg-6 col-xl-5 py-lg-5">
                                <div class="p-4 p-md-5 align-items-center">
                                    <div class="h2 fw-bolder mb-4">Contact Us</div>

                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('storage/images/home/phone.png') }}" width="35px" height="35px" alt="Phone Icon" class="me-3">
                                        <span class="fs-5">+62 8210 4500 2345</span>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('storage/images/home/email.png') }}" width="35px" height="35px" alt="Email Icon" class="me-3">
                                        <span class="fs-5">volunteach@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7">
                                <img src="{{ asset('storage/images/home/contactUs.jpg') }}" alt="Featured Blog Image" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
@endsection
