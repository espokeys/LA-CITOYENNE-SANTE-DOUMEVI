@extends('layouts.master')

@section('content')

<!-- Contenu de la page -->
<div class="page-heading_apropos header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>À propos de nous</h1>
        <span>Mutuelle de santé pour l'autonomie des ménages à faibles revenus</span>
      </div>
    </div>
  </div>
</div>


<section class="py-5 bg-white mt-3">
  <div class="container">
    <div class="row align-items-center">
      <!-- Texte à gauche -->
      <div class="col-md-6 mb-4">
        <h2 class="fw-bold" style="color: #f7af1a;">
          Dites-nous <span style="color: #549440;">qui vous êtes...</span>
        </h2>
        <p class="text-muted">
  Que vous soyez un particulier, un salarié, un professionnel indépendant ou une entreprise, vous appartenez à l’une des catégories éligibles aux offres de la Mutuelle DOUMEVI et pouvez ainsi bénéficier de ses services de couverture santé adaptés.        </p>
      </div>

      <!-- Cartes à droite -->
      <div class="col-md-6">
        <div class="row g-3">
          <div class="col-6">
            <div class="border rounded text-center p-3 shadow-sm" style="cursor: pointer;">
              <img src="{{ asset('assets/images/apropos_icon1.svg') }}" alt="Particulier" style="width: 50px;">
              <p class="mt-2 mb-0 fw-semibold text-dark">Particulier</p>
            </div>
          </div>
          <div class="col-6">
            <div class="border rounded text-center p-3 shadow-sm" style="cursor: pointer;">
              <img src="{{ asset('assets/images/apropos_icon2.svg') }}" alt="Salarié" style="width: 50px;">
              <p class="mt-2 mb-0 fw-semibold text-dark">Salarié</p>
            </div>
          </div>
          <div class="col-6">
            <div class="border rounded text-center p-3 shadow-sm" style="cursor: pointer;">
              <img src="{{ asset('assets/images/apropos_icon3.svg') }}" alt="Professionnel" style="width: 50px;">
              <p class="mt-2 mb-0 fw-semibold text-dark">Indépendant</p>
            </div>
          </div>
          <div class="col-6">
            <div class="border rounded text-center p-3 shadow-sm" style="cursor: pointer;">
              <img src="{{ asset('assets/images/apropos_icon4.svg') }}" alt="Entreprise" style="width: 50px;">
              <p class="mt-2 mb-0 fw-semibold text-dark">Entreprise</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="more-info about-info mt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Notre engagement pour la solidarité en santé</span>
                <h2>En savoir plus sur <em>DOUMEVI</em></h2>
                <p>
                  DOUMEVI est une mutuelle de santé qui vise à renforcer l’autonomie financière des familles à revenus faibles ou modestes, 
                  en facilitant l’accès à des soins de qualité grâce à une micro-assurance santé solidaire. 
                  <br><br>
                  Nous mettons l’accent sur la prévention, la prise en charge collective et la maîtrise des coûts médicaux pour assurer à chacun une couverture digne et durable.
                </p>
              
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-image">
                <img src="{{asset('assets/images/img2.jpg')}}" alt="À propos de DOUMEVI">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="faq-section py-5 mt-5" style="background:#fff">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 style="font-weight: bold;">FAQ : les réponses à vos questions</h2>
        <p style="color: #555;">Vos remboursements, la gestion de votre contrat, votre espace adhérent... Retrouvez vos demandes les plus fréquentes dans notre FAQ.</p>
        <img src="{{ asset('assets/images/faq1.png') }}" style="max-width: 350px; margin-top: 20px;">
      </div>

      <div class="col-md-6">
        <div class="faq-item border-top py-3">
          <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#faq1" style="cursor:pointer;">
            <strong>Quelles sont les offres de couverture proposées par DOUMEVI ?</strong>
            <span class="fs-4">+</span>
          </div>
          <div id="faq1" class="collapse mt-2">
            <p>DOUMEVI propose trois paniers : base, medium et premium avec des plafonds allant de 350 000 à 1 000 000 FCFA. La cotisation varie de 19 000 à 113 000 FCFA selon le panier.</p>
          </div>
        </div>

        <div class="faq-item border-top py-3">
          <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#faq2" style="cursor:pointer;">
            <strong>Quels soins sont pris en charge ?</strong>
            <span class="fs-4">+</span>
          </div>
          <div id="faq2" class="collapse mt-2">
            <p>Consultations, hospitalisations, accouchements, imagerie, médicaments, analyses, chirurgie selon le panier choisi.</p>
          </div>
        </div>

        <div class="faq-item border-top py-3">
          <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#faq3" style="cursor:pointer;">
            <strong>Comment fonctionne le système de tiers payant ?</strong>
            <span class="fs-4">+</span>
          </div>
          <div id="faq3" class="collapse mt-2">
            <p>DOUMEVI prend en charge 80% des frais, le patient ne paie que 20% au moment des soins dans les centres agréés.</p>
          </div>
        </div>

        <div class="faq-item border-top py-3">
          <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#faq4" style="cursor:pointer;">
            <strong>Comment adhérer à la mutuelle DOUMEVI ?</strong>
            <span class="fs-4">+</span>
          </div>
          <div id="faq4" class="collapse mt-2">
            <p>Remplir le formulaire d’adhésion, accepter le règlement et s'acquitter du droit d’adhésion de 1 000 FCFA.</p>
          </div>
        </div>

        <div class="faq-item border-top border-bottom py-3">
          <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#faq5" style="cursor:pointer;">
            <strong>Quelles structures sanitaires sont accessibles ?</strong>
            <span class="fs-4">+</span>
          </div>
          <div id="faq5" class="collapse mt-2">
            <p>Accès à toutes les structures publiques (CMS, CHR/CHU) et à des centres privés conventionnés.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--
<div class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Les membres de <em>notre équipe</em></h2>
          <span>Une équipe engagée au service de la santé communautaire</span>
        </div>
      </div>

      <div class="col-md-4">
        <div class="team-item">
          <img src="{{asset('assets/images/team_01.jpg')}}" alt="Membre de l'équipe DOUMEVI">
          <div class="down-content">
            <h4>Koffi Akomedje</h4>
            <span>Président de la mutuelle</span>
            <p>Engagé pour une couverture santé inclusive, il coordonne les actions stratégiques de DOUMEVI en faveur des populations à faibles revenus.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="team-item">
          <img src="{{asset('assets/images/team_02.jpg')}}" alt="Membre de l'équipe DOUMEVI">
          <div class="down-content">
            <h4>Akouvi Lawson</h4>
            <span>Responsable communication</span>
            <p>Elle s’occupe de la sensibilisation des populations et veille à la transparence de l’information au sein de la mutuelle.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="team-item">
          <img src="{{asset('assets/images/team_03.jpg')}}" alt="Membre de l'équipe DOUMEVI">
          <div class="down-content">
            <h4>Kossi Mensah</h4>
            <span>Chargé des adhésions</span>
            <p>Il accompagne les nouveaux membres dans le processus d’adhésion et veille à la bonne gestion des dossiers d’adhésion.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="fun-facts " style="margin-bottom: 100px" >
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="left-content">
          <span>Mutuelle de santé solidaire</span>
          <h2>Nos solutions pour <em>le bien-être des familles</em></h2>
          <p>DOUMEVI œuvre pour renforcer l’autonomie financière des ménages à faibles revenus en facilitant leur accès aux soins médicaux grâce à une micro-assurance santé abordable.
          <br><br>Nous accompagnons nos adhérents au quotidien avec des services fiables, solidaires et adaptés aux réalités locales.</p>
          <a href="#" class="filled-button">En savoir plus</a>
        </div>
      </div>
      <div class="col-md-6 align-self-center">
        <div class="row">
         
          <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit">1280</div>
              <div class="count-title">Avis positifs</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit">578</div>
              <div class="count-title">Adhésions actives</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit">26</div>
              <div class="count-title">Partenaires engagés</div>
            </div>
          </div>
           <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit">945</div>
              <div class="count-title">Familles accompagnées</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
-->
<!-- Contenu de la page 
    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>George Walker</h4>
                  <span>Chief Financial Analyst</span>
                  <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>John Smith</h4>
                  <span>Market Specialist</span>
                  <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>David Wood</h4>
                  <span>Chief Accountant</span>
                  <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Andrew Boom</h4>
                  <span>Marketing Head</span>
                  <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
-->
@endsection
