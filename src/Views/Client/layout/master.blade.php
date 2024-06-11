<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    @include{'layout.partials.head'}

</head>

<body>
    <!-- Topbar Start -->
    @include{'layout.partials.topbar'}
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include{'layout.partials.navbar'}
    <!-- Navbar End -->


    <!-- Featured Start -->
    @include{'layout.partials.featured'}
    <!-- Featured End -->


    <!-- Categories Start -->
    @include{'layout.partials.categories'}
    <!-- Categories End -->



    <!-- Offer Start -->
    @include{'layout.partials.offer'}
    <!-- Offer End -->


    <!-- Products Start -->
    <!-- @include{'layout.partials.products'} -->
    @yield('content')
    <!-- Products End -->



    <!-- Subscribe Start -->
    @include{'layout.partials.subscribe'}
    <!-- Subscribe End -->


    <!-- Products Start -->
    @include{'layout.partials.productstart'}
    <!-- Products End -->


    <!-- Vendor Start -->
    @include{'layout.partials.vendor'}
    <!-- Vendor End -->


    <!-- Footer Start -->
    @include{'layout.partials.footer'}
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include{'layout.partials.script'}
</body>

</html>