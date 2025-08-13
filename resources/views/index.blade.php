@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <!-- Bannière principale -->
    <div class="main-banner header-text  " id="top">
        <div class="Modern-Slider">
            <!-- Élément -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content mb-0">
                        <!-- <h6>Nous sommes prêts à vous aider</h6> -->
                        <h4><span style="color: white">Mutuelle de santé</span><br /><span style="color: white">&amp;
                                Solidarité</span></h4>
                        <p>
                            DOUMEVI renforce l’autonomie financière des ménages à faibles revenus
                            grâce à une micro-assurance santé accessible.
                            Découvrez comment nous pouvons vous accompagner.
                        </p>
                        <a href="{{ route('contact') }}" class="filled-button">Contactez-nous</a>
                    </div>
                </div>
            </div>
            <!-- // Élément -->

            <!-- Élément -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="text-content">
                        <!--    <h6 style="color: white">À votre service au quotidien</h6> -->
                        <h4 style="color: #549440">Prévention<br />&amp; Protection</h4>
                        <p class="text-dark">
                            Accédez à des soins médicaux abordables et garantis.
                            Notre mission est de rendre la santé accessible à tous, en toute dignité.
                        </p>
                        <a href="{{ route('service') }}" class="filled-button">Nos services</a>
                    </div>
                </div>
            </div>
            <!-- // Élément -->

            <!-- Élément -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="text-content">
                        <!--     <h6 style="color: white">Une équipe engagée</h6> -->
                        <h4>Solidarité<br />&amp; Impact Social</h4>
                        <p>
                            Avec DOUMEVI, rejoignez une communauté solidaire.
                            Ensemble, construisons un avenir plus sain pour tous.
                        </p>
                        <a href="{{ route('apropos') }}" class="filled-button">En savoir plus</a>
                    </div>
                </div>
            </div>
            <!-- // Élément -->
        </div>
    </div>
    <!-- Fin de la bannière -->


    <div class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Besoin d'être rappelé rapidement ?</h4>
                    <span>
                        L’équipe de DOUMEVI est à votre écoute pour répondre à vos préoccupations de santé et vous
                        accompagner.
                    </span>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('contact') }}" class="border-button">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>


    <div class="services py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading">
                        <h2>Notre <em>Couverture Santé</em></h2>
                        <span>Des solutions solidaires et accessibles pour réduire les frais médicaux</span>
                    </div>
                </div>

                <!-- Panier de Base -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
                        <img src="{{ asset('assets/images/img30.jpg') }}" class="card-img-top" alt="Panier de Base">
                        <div class="card-body">
                            <h4 class="card-title">Panier de Base</h4>
                            <p class="card-text">
                                Couverture des soins courants à hauteur de 80% avec un plafond annuel de 350 000 FCFA.
                                Accessible dès 19 000 FCFA/an pour les adultes.
                            </p>
                            <a href="{{ route('service') }}" class="filled-button">Découvrir</a>
                        </div>
                    </div>
                </div>

                <!-- Panier Medium Amélioré -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
                        <img src="{{ asset('assets/images/img31.jpg') }}" class="card-img-top" alt="Panier Medium">
                        <div class="card-body">
                            <h4 class="card-title">Panier Médium Amélioré</h4>
                            <p class="card-text">
                                Une couverture élargie avec un plafond de 700 000 FCFA/an. Prime annuelle à partir de 65 000
                                FCFA.
                                Idéale pour une meilleure prise en charge médicale.
                            </p>
                            <a href="{{ route('service') }}" class="filled-button">Découvrir</a>
                        </div>
                    </div>
                </div>

                <!-- Panier Premium -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
                        <img src="{{ asset('assets/images/img27.jpg') }}" class="card-img-top" alt="Panier Premium">
                        <div class="card-body">
                            <h4 class="card-title">Panier Premium</h4>
                            <p class="card-text">
                                Le meilleur de la couverture santé avec un plafond annuel de 1 000 000 FCFA.
                                Une solution pour les besoins médicaux plus complexes.
                            </p>
                            <a href="{{ route('service') }}" class="filled-button">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section informative complémentaire -->

        </div>
    </div>


    <div class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-content">
                        <span>Mutuelle de santé solidaire</span>
                        <h2>Nos solutions pour <em>votre bien-être</em></h2>
                        <p>
                            DOUMEVI est une mutuelle de santé à but non lucratif, qui vise à renforcer
                            l’autonomie financière des ménages à faibles et modestes revenus grâce à une
                            meilleure maîtrise des coûts des soins médicaux, rendue possible par une
                            micro-assurance santé accessible à tous.
                            <br /><br />
                            Nous accompagnons les familles pour garantir l’accès aux soins essentiels,
                            en toute sérénité et à moindre coût.
                        </p>
                        <a href="{{ route('apropos') }}" class="filled-button">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">10000</div>
                                <div class="count-title">Adhésions actives</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">1280</div>
                                <div class="count-title">Avis positifs</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">945</div>
                                <div class="count-title">Familles accompagnées</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">5</div>
                                <div class="count-title">Partenariats établis</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left-image">
                                    <img src="{{ asset('assets/images/img3.jpg') }}" alt="Image DOUMEVI" />
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center mt-0">
                                <div class="right-content">
                                    <span>Qui sommes-nous</span>
                                    <h3 class="mb-3">Apprenez à connaître <em>notre mutuelle</em></h3>
                                    <p>
                                        Créée avec le soutien d’acteurs issus de divers secteurs — agricoles, religieux,
                                        économiques, ONG et microfinances —
                                        la mutuelle de santé <strong>DOUMEVI</strong> œuvre pour une couverture médicale
                                        accessible à tous.
                                        <br /><br />
                                        Notre mission est claire : <strong>réduire la vulnérabilité des ménages à faibles
                                            revenus</strong> face aux dépenses de santé,
                                        en proposant des solutions d’assurance adaptées à leurs besoins.
                                    </p>
                                    <a href="#" class="filled-button">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DOUMEVI – Couverture assurantielle complète -->
    <section class="py-5" style="background-color: #f1f5f9;">
        <div class="container">

            <!-- Titre global -->
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color:#013F59;">Notre offre de couverture <em
                        class="text-danger">assurantielle</em></h2>
                <p class="text-muted">Une mutuelle solidaire pour tous portée par LA CITOYENNE VIE S.A.</p>
            </div>

            <div class="row g-4">
                <!-- Bloc 1 -->
                <div class="col-12">
                    <div class="row align-items-center bg-white shadow-sm rounded p-4">
                        <!-- Texte -->
                        <div class="col-lg-6 order-2 order-lg-1">
                            <h4 class="fw-bold mb-4" style="color:#013F59;">Une couverture solidaire et accessible</h4>

                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                    Réduction des frais médicaux à la charge des familles
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                    Portée par LA CITOYENNE VIE S.A., 1ère micro-assurance vie au Togo
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                    Mutuelle ouverte à tous : agriculteurs, ONG, religieux, micro-finance, etc.
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                    <strong>But :</strong> Aider les familles à faible revenu à maîtriser leurs coûts de
                                    santé
                                </li>
                            </ul>

                            <a href="{{ route('service') }}" class="text-decoration-none fw-semibold"
                                style="color:#d81b60;">
                                → En savoir plus sur notre mission
                            </a>
                        </div>

                        <!-- Image -->
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('assets/images/img25.jpg') }}" alt="Mutuelle accessible"
                                class="img-fluid rounded" style="max-width:360px;">
                        </div>
                    </div>
                </div>

                <!-- Bloc 2 -->
                <div class="col-12">
                    <div class="row align-items-center bg-light shadow-sm rounded p-4">
                        <!-- Image -->
                        <div class="col-lg-6 text-center mb-4 mb-lg-0">
                            <img src="{{ asset('assets/images/img23.jpg') }}" alt="Formules santé"
                                class="img-fluid rounded" style="max-width:360px;">
                        </div>

                        <!-- Texte -->
                        <div class="col-lg-6">
                            <h4 class="fw-bold mb-4" style="color:#013F59;">Des formules adaptées à tous les besoins</h4>

                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                    <strong>Panier de Base</strong> – 350 000 FCFA/an • dès 16 000 FCFA
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                    <strong>Panier Médium</strong> – 700 000 FCFA/an • dès 62 000 FCFA
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                    <strong>Panier Premium</strong> – 1 000 000 FCFA/an • dès 113 000 FCFA
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                    Tiers payant à 80 % sur consultations, hospitalisations, médicaments, analyses, etc.
                                </li>
                            </ul>

                            <a href="{{ route('service') }}" class="text-decoration-none fw-semibold"
                                style="color:#d81b60;">
                                → Découvrir le détail de nos offres
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2>Ils nous font <em>confiance</em></h2>
                        <span>témoignages de nos bénéficiaires et partenaires</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="testimonial-slider d-flex" id="testimonialSlider">
                        <div class="testimonial-track d-flex">
                            <!-- Témoignages (5 répétés automatiquement) -->
                            <div class="testimonial-item-wrapper">
                                <div class="testimonial-item border rounded p-3">
                                    <div class="inner-content">
                                        <h4>Kossi A.</h4>
                                        <span>Chef de famille</span>
                                        <p>"Grâce à DOUMEVI, j’ai pu assurer les soins de santé de mes enfants sans me
                                            ruiner. Un service humain, solidaire et accessible à tous."</p>
                                    </div>
                                    <img src="http://placehold.it/60x60" alt="" />
                                </div>
                            </div>

                            <div class="testimonial-item-wrapper">
                                <div class="testimonial-item border rounded p-3">
                                    <div class="inner-content">
                                        <h4>Awa T.</h4>
                                        <span>Commerçante</span>
                                        <p>"Une mutuelle qui pense vraiment aux plus démunis. Les frais médicaux sont
                                            désormais à ma portée. Merci à toute l’équipe de DOUMEVI !"</p>
                                    </div>
                                    <img src="http://placehold.it/60x60" alt="" />
                                </div>
                            </div>

                            <div class="testimonial-item-wrapper">
                                <div class="testimonial-item border rounded p-3">
                                    <div class="inner-content">
                                        <h4>Komlan B.</h4>
                                        <span>Partenaire médical</span>
                                        <p>"Collaborer avec DOUMEVI nous permet d’offrir des soins de qualité à un public
                                            souvent négligé."</p>
                                    </div>
                                    <img src="http://placehold.it/60x60" alt="" />
                                </div>
                            </div>

                            <div class="testimonial-item-wrapper">
                                <div class="testimonial-item border rounded p-3">
                                    <div class="inner-content">
                                        <h4>Julie E.</h4>
                                        <span>Mère au foyer</span>
                                        <p>"Avant, je redoutais les visites à l’hôpital. Avec DOUMEVI, j’ai la tranquillité
                                            d’esprit pour mes proches et moi."</p>
                                    </div>
                                    <img src="http://placehold.it/60x60" alt="" />
                                </div>
                            </div>

                            <div class="testimonial-item-wrapper">
                                <div class="testimonial-item border rounded p-3">
                                    <div class="inner-content">
                                        <h4>Yawovi D.</h4>
                                        <span>Travailleur social</span>
                                        <p>"DOUMEVI est un acteur clé dans l’accès à la santé pour les plus vulnérables. Une
                                            vraie mission sociale."</p>
                                    </div>
                                    <img src="http://placehold.it/60x60" alt="" />
                                </div>
                            </div>
                            <!-- Les clones seront ajoutés par le JS -->
                        </div>
                    </div>
                    <!-- Pagination dots -->
                    <div class="testimonial-dots text-center mt-3"></div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .testimonial-slider {
            overflow: hidden;
            position: relative;
            scrollbar-width: none;
            /* Firefox */
        }

        .testimonial-slider::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari */
        }

        .testimonial-track {
            display: flex;
            transition: transform 0.5s ease;
        }

        .testimonial-item-wrapper {
            flex: 0 0 auto;
            width: 300px;
            margin-right: 20px;
        }

        .testimonial-item {
            height: 100%;
            background: #fff;
            transition: transform 0.3s;
        }

        .testimonial-item img {
            border-radius: 50%;
            margin-top: 10px;
        }

        /* Pagination dots */
        .testimonial-dots {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .testimonial-dots button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: none;
            background-color: #bbb;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .testimonial-dots button.active {
            background-color: #f7af1a;
        }

        @media (max-width: 768px) {
            .testimonial-item-wrapper {
                width: 80vw;
            }
        }
    </style>

    <script>
        const track = document.querySelector('.testimonial-track');
        const dotsContainer = document.querySelector('.testimonial-dots');

        // Nombre de témoignages "originaux" (avant duplication)
        const originalItems = Array.from(track.children);
        const originalCount = originalItems.length;

        // Duplication pour scroll infini (double le contenu)
        for (let i = 0; i < originalCount; i++) {
            const clone = originalItems[i].cloneNode(true);
            track.appendChild(clone);
        }

        // Largeur d’un item avec marge (pour calculer la translation)
        const itemWidth = originalItems[0].offsetWidth + 20; // 20px margin-right

        // Index du slide visible
        let currentIndex = 0;

        // Créer les boutons points
        for (let i = 0; i < originalCount; i++) {
            const btn = document.createElement('button');
            if (i === 0) btn.classList.add('active');
            btn.addEventListener('click', () => {
                currentIndex = i;
                moveToIndex(currentIndex);
                resetAutoScroll();
            });
            dotsContainer.appendChild(btn);
        }

        const dots = dotsContainer.querySelectorAll('button');

        // Fonction pour bouger la track au slide voulu
        function moveToIndex(index) {
            track.style.transition = 'transform 0.5s ease';
            track.style.transform = `translateX(${-itemWidth * index}px)`;
            updateDots(index);
        }

        // Met à jour la classe active sur les dots
        function updateDots(index) {
            dots.forEach(dot => dot.classList.remove('active'));
            dots[index].classList.add('active');
        }

        // Scroll automatique avec pause si on clique
        let autoScrollInterval = setInterval(() => {
            currentIndex++;
            if (currentIndex >= originalCount) {
                // reset sans animation pour loop infini
                track.style.transition = 'none';
                track.style.transform = 'translateX(0)';
                currentIndex = 0;
                setTimeout(() => {
                    moveToIndex(currentIndex);
                }, 50);
            } else {
                moveToIndex(currentIndex);
            }
        }, 4000); // Change la vitesse ici (4000ms = 4s)

        function resetAutoScroll() {
            clearInterval(autoScrollInterval);
            autoScrollInterval = setInterval(() => {
                currentIndex++;
                if (currentIndex >= originalCount) {
                    track.style.transition = 'none';
                    track.style.transform = 'translateX(0)';
                    currentIndex = 0;
                    setTimeout(() => {
                        moveToIndex(currentIndex);
                    }, 50);
                } else {
                    moveToIndex(currentIndex);
                }
            }, 4000);
        }
    </script>

    <div class="callback-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Besoin <em> d’informations ?</em></h2>
                        <span>DOUMEVI vous accompagne pour un accès facilité aux soins de santé</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Fermer"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Fermer"></button>
                            </div>
                        @endif
                        {{-- ✅ Formulaire de contact --}}
                        <form id="contact" action="{{ route('postContactPublic') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Nom complet" required value="{{ old('name') }}" />
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            placeholder="Adresse e-mail" required pattern="[^ @]*@[^ @]*"
                                            value="{{ old('email') }}" />
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="telephone" type="tel" class="form-control" id="telephone"
                                            placeholder="Numéro de téléphone" required value="{{ old('telephone') }}" />
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Votre message" required>{{ old('message') }}</textarea>
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="border-button">
                                            Envoyer le message
                                        </button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-partners owl-carousel">
                        <div class="partner-item">
                            <img src="{{ asset('assets/images/logo_lcvie.png') }}" title="1" alt="1" />
                        </div>

                        <div class="partner-item">
                            <img src="{{ asset('assets/images/partner1.png') }}" title="2" alt="2" />
                        </div>

                        <div class="partner-item">
                            <img src="{{ asset('assets/images/partner2.png') }}" title="3" alt="3" />
                        </div>

                        <div class="partner-item">
                            <img src="{{ asset('assets/images/partner3.png') }}" title="4" alt="4" />
                        </div>

                        <div class="partner-item">
                            <img src="{{ asset('assets/images/partner4.png') }}" title="5" alt="5" />
                        </div>
                    </div>
                    <style>
                        .partner-item img {
                            width: 150px;
                            height: 100px;
                            object-fit: contain;
                            display: block;
                            margin: auto;
                            /*background-color: white; */
                        }

                        /* Spécialement pour la 3e image (partner2.png) */
                        .partner-item:nth-child(3) img {
                            width: 180px;
                            height: 120px;
                        }
                    </style>


                </div>
            </div>
        </div>
    </div>


@endsection
