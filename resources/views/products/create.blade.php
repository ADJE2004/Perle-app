<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

        <title>Boutique de perles </title>


        <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/templatemo-hexashop.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <!--

    TemplateMo 571 Hexashop

    https://templatemo.com/tm-571-hexashop

    -->
        </head>

<body>
    @include('layouts.header')

    <div class="container mt-4">
        <h2>Ajouter un Produit</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nom du Produit :</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Entrez le nom du produit" required>
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea name="description" class="form-control" id="description" placeholder="Entrez une description" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Prix :</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Entrez le prix" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantité :</label>
                <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Entrez la quantité" required>
            </div>
            <div class="form-group">
                <label for="image">Image du Produit :</label>
                <input type="file" name="image[]" id="image" accept="image/*" multiple required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter le Produit</button>
        </form>
    </div>
    @include('layouts.footer')
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/accordions.js')}}"></script>
    <script src="{{asset('assets/js/datepicker.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{('assets/js/imgfix.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/lightbox.js')}}"></script>
    <script src="{{asset('assets/js/isotope.js')}}"></script>

    <!-- Global Init -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>
</body>

</html>




