@php
function rupiah($angka){
    $hasil_rupiah = "Rp" . number_format($angka,0,',','.');
    return $hasil_rupiah;
}
@endphp
<!DOCTYPE html>
<html lang="en">

    <head>
        @include('home.css')
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        @include('home.navbar')
        <!-- Navbar End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Hero Start -->
        @include('home.banner')
        <!-- Hero End -->

        <!-- Featurs Section Start -->
        @include('home.featurs')
        <!-- Featurs Section End -->

        <!-- Fruits Shop Start-->
        @include('home.products')
        <!-- Fruits Shop End-->
        
        <!-- Tastimonial Start -->
        @include('home.testimonial')
        <!-- Tastimonial End -->

        <!-- Footer Start -->
        @include('home.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/fe/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/fe/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/fe/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('assets/fe/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/fe/js/main.js') }}"></script>
    </body>
</html>
