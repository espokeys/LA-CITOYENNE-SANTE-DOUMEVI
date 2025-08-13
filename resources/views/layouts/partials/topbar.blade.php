<div class="sub-header bg-white border-bottom">
    <div class="container-fluid">
        <div class="row align-items-center py-2">

            <!-- Logo -->
            <div class="col-6 col-md-3 d-flex align-items-center">
                <a href="/" class="logo-sub-header">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo DOUMEVI" class="img-fluid"
                        style="max-height: 60px;" />
                </a>
            </div>

            <!-- Navigation -->
            <div class="col-6 col-md-9">
                <nav class="navbar navbar-expand-lg d-flex align-items-center justify-content-end p-0 w-100">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="/">Acceuil</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('apropos') }}">À propos</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Nos services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
