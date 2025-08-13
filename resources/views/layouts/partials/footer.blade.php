<!-- Footer Starts Here -->
<footer>
    <div class="container">
        <div class="row">
            <!-- À propos de DOUMEVI -->
            <div class="col-md-4 footer-item">
                <div class="mb-3">
                    <a href="/" class="d-inline-block">
                        <img src="{{ asset('assets/images/logo3.png') }}" alt="logo DOUMEVI"
                            style="max-width: 200px; height: auto;" />
                    </a>
                </div>
                <p>
                    DOUMEVI est une mutuelle de santé qui vise à renforcer l’autonomie
                    financière des ménages à faibles revenus grâce à une micro assurance
                    santé couvrant les frais médicaux essentiels.
                </p>
                <ul class="social-icons">
                    <li>
                        <a href="https://www.facebook.com/MutuelleSanteDoumevi" target="_blank"><i
                                class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="mailto:mutuellesantedoumevi@gmail.com"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>


            <!-- Liens utiles -->
            <div class="col-md-4 footer-item">
                <h4>Liens utiles</h4>
                <ul class="menu-list">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="{{ route('apropos') }}">À propos</a></li>
                    <li><a href="{{ route('service') }}">Nos services</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <!--   <li><a href="#">Politique de confidentialité </a></li> -->
                </ul>
            </div>

            <!-- Formulaire de contact  -->
            <div class="col-md-4 footer-item last-item">
                <h4>Contactez-nous</h4>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('seccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                @endif
                <div class="contact-form">
                    <form id="contact footer-contact" action="{{ route('postContactPublic') }}" method="POST">
                        @csrf
                        <input type="hidden" name="form" value="footer">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Nom complet" required value="{{ old('name') }}" />
                                </fieldset>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        placeholder="Adresse email" required pattern="[^ @]*@[^ @]*"
                                        value="{{ old('email') }}" />
                                </fieldset>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
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
                                    <button type="submit" id="form-submit" class="filled-button">
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
</footer>
