@extends('layouts.master')

@section('content')

    <!-- Contenu de la page -->
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Contactez-nous</h1>
   <!--     <span>
          DOUMEVI est une mutuelle de santé basée à la
          Préfecture d'Agoé Nyivé, Lomé - Togo. N'hésitez pas à nous envoyer
          un message pour toute question ou information.
        </span>
        -->
      </div>
    </div>
  </div>
</div>

<div class="contact-information">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-phone"></i>
          <h4>Téléphone</h4>
          <p>Pour toute information ou assistance, contactez-nous par téléphone.</p>
          <a href="tel:+22898084343">98 08 43 43</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-envelope"></i>
          <h4>Email</h4>
          <p>Envoyez-nous un email pour toute demande ou question.</p>
          <a href="mailto:mutuellesantedoumevi@gmail.com">mutuellesantedoumevi@gmail.com</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-map-marker"></i>
          <h4>Localisation</h4>
          <p>Préfecture d'Agoé Nyivé<br>Lomé, Togo</p>
          <a href="https://www.google.com/maps/place/Préfecture+d'Agoé+Nyivé,+Lomé,+Togo" target="_blank">Voir sur Google Maps</a>
        </div>
      </div>
    </div>
  </div>
</div>


  <div class="callback-form contact-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Envoyez-nous un <em>message</em></h2>
          <span>N'hésitez pas à nous contacter pour toute demande ou information.</span>
        </div>
      </div>
      <div class="col-md-12">

        @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
    </div>
@endif
        <div class="contact-form">
          <form id="contact" action="{{ route('postContactPublic') }}" method="POST">
             @csrf
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Nom complet" required="">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Adresse e-mail" required="">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input
                     name="telephone"
                     type="tel"
                     class="form-control"
                     id="telephone"
                     placeholder="Numéro de téléphone"
                     required=""
                  />
               </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Votre message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Envoyer le message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


   <div id="map">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.49134462649!2d1.1857899737276225!3d6.1987213268549075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159d8620abdc7%3A0x85412708fa86e7ab!2sLA%20CITOYENNE%20VIE!5e0!3m2!1sfr!2stg!4v1749725548818!5m2!1sfr!2stg" 
    width="100%" 
    height="500px" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>


    
@endsection
