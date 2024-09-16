@extends('layouts.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>About Our Company</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/Brown Simple Spa & Beauty Salon Poster.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>About Us &amp; Our Skills</h4>

                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>
                                Bienvenue dans notre boutique de vente d'accessoires
                            </p>
                        </div>
                        <p>
                            Bienvenue chez ShadeWoumiCreation, votre destination en ligne de confiance pour des perles de
                            qualité exceptionnelle. Fondée avec une passion pour l'élégance et le savoir-faire artisanal,
                            notre boutique se spécialise dans la vente de perles rares et précieuses, soigneusement
                            sélectionnées pour leur beauté et leur unicité.

                            Notre mission est simple : offrir à nos clients des perles de haute qualité qui capturent la
                            beauté et l'élégance intemporelle de la nature. Chaque perle est méticuleusement choisie, et nos
                            collections reflètent un engagement envers l'excellence, que ce soit pour la création de bijoux
                            personnels, des cadeaux spéciaux, ou pour enrichir votre collection de perles.

                            Pourquoi choisir ShadeWoumiCreation ?

                            Qualité Supérieure : Nous travaillons avec des fournisseurs de confiance pour vous offrir des
                            perles authentiques et de la plus haute qualité.
                            Diversité des Produits : Des perles d'eau douce aux perles de culture de Tahiti, notre sélection
                            variée répond à tous les goûts et styles.
                            Service Client Dévoué : Notre équipe est à votre disposition pour vous aider à chaque étape de
                            votre achat, vous garantissant une expérience d'achat agréable et sans tracas.
                            Engagement envers la Durabilité : Nous nous engageons à respecter des pratiques durables et
                            éthiques dans le choix de nos perles, soutenant ainsi les communautés locales et la préservation
                            de l'environnement.
                            Chez ShadeWoumiCreation, nous croyons que chaque perle raconte une histoire. Que vous soyez à
                            la recherche de perles classiques ou de quelque chose de plus contemporain, nous sommes ici pour
                            vous aider à trouver la perle parfaite pour chaque moment spécial de votre vie.

                            Merci de faire partie de notre communauté. Nous sommes honorés de vous accompagner dans votre
                            voyage à travers l'univers enchanteur des perles.


                        </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->


    <!-- ***** Services Area Starts ***** -->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Services</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Synther Vaporware</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut
                            labore, et dolore quis ipsum suspend.</p>
                        <img src="assets/images/boutique1.jpg" alt="" style="width: 300px; height: 235px; object-fit: cover; display: block;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Locavore Squidward</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut
                            labore, et dolore quis ipsum suspend.</p>
                        <img src="assets/images/people.jpg" alt="" style="width: 300px; height: 235px; object-fit: cover; display: block;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Health Gothfam</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut
                            labore, et dolore quis ipsum suspend.</p>
                        <img src="assets/images/service-03.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name"
                                        required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button"><i
                                            class="fa fa-paper-plane"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                                <li>Phone:<br><span>010-020-0340</span></li>
                                <li>Office Location:<br><span>North Miami Beach</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>info@company.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a
                                            href="#">Instagram</a>, <a href="#">Behance</a>, <a
                                            href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
@endsection
