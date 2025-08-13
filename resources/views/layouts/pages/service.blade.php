@extends('layouts.master')

@section('content')

       <!-- Page Content -->
   <div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Nos Services</h1>
        <span>Une mutuelle de santé engagée pour le bien-être des familles</span>
      </div>
    </div>
  </div>
</div>

<section class="py-5 bg-light">
  <div class="container">
    <div class="text-start mb-5">
      <h2>Nos offres de couverture <em>assurantielle</em></h2>
      <p class="text-muted">Mutuelle de Santé DOUMEVI - Votre bien-être, notre mission</p>
    </div>

    <div class="row g-4 align-items-stretch">

      <!-- Panier de Base -->
      <div class="col-12 col-md-4">
        <div class="card text-center shadow-sm border-0 h-100">
          <div class="card-header bg-success text-white fw-bold">PANIER DE BASE</div>
          <div class="card-body">
            <p class="fw-bold">Plafond annuel :<br><strong>350 000 FCFA</strong></p>
            <img src="https://img.icons8.com/ios-filled/50/4CAF50/hospital-room.png" alt="Base" />
            <p class="mt-3 text-success fw-semibold">Prime : 19 000 FCFA (Adulte)<br/>16 000 FCFA (Enfant)</p>
            <ul class="text-start small">
              <li>Consultations</li>
              <li>Hospitalisations</li>
              <li>Médicaments</li>
              <li>Analyses médicales</li>
              <li>Accouchements</li>
              <li>Imagerie</li>
              <li>Chirurgie</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Panier Medium -->
      <div class="col-12 col-md-4">
        <div class="card text-center shadow-sm border-0 h-100">
          <div class="card-header bg-warning text-dark fw-bold">PANIER MÉDIUM</div>
          <div class="card-body">
            <p class="fw-bold">Plafond annuel :<br><strong>700 000 FCFA</strong></p>
            <img src="https://img.icons8.com/ios-filled/50/F9A825/hospital-room.png" alt="Medium" />
            <p class="mt-3 text-warning fw-semibold">Prime : 65 000 FCFA (Adulte)<br/>62 000 FCFA (Enfant)</p>
            <ul class="text-start small">
              <li>Consultations</li>
              <li>Hospitalisations</li>
              <li>Médicaments</li>
              <li>Analyses médicales</li>
              <li>Accouchements</li>
              <li>Imagerie</li>
              <li>Chirurgie</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Panier Premium -->
      <div class="col-12 col-md-4">
        <div class="card text-center shadow-sm border-0 h-100">
          <div class="card-header bg-danger text-white fw-bold">PANIER PREMIUM</div>
          <div class="card-body">
            <p class="fw-bold">Plafond annuel :<br><strong>1 000 000 FCFA</strong></p>
            <img src="https://img.icons8.com/ios-filled/50/E91E63/hospital-room.png" alt="Premium" />
            <p class="mt-3 text-danger fw-semibold">Prime : 113 000 FCFA</p>
            <ul class="text-start small">
              <li>Consultations</li>
              <li>Hospitalisations</li>
              <li>Médicaments</li>
              <li>Analyses médicales</li>
              <li>Accouchements</li>
              <li>Imagerie</li>
              <li>Chirurgie</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Adhésion -->
      <div class="col-12 col-md-4 mt-5">
        <div class="card text-center shadow-sm border-0 h-100">
          <div class="card-header bg-primary text-white fw-bold">ADHÉSION</div>
          <div class="card-body">
            <p class="fw-bold">Droit d’adhésion :<br><strong>1 000 FCFA</strong></p>
            <img src="https://img.icons8.com/ios-filled/50/2196F3/add-user-group-man-man.png" alt="Adhésion" />
            <ul class="text-start small">
              <li>Formulaire d’adhésion obligatoire</li>
              <li>Respect du règlement intérieur</li>
              <li>Ouvert à toute personne physique</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Mission -->
      <div class="col-12 col-md-4 mt-5">
        <div class="card text-center shadow-sm border-0 h-100">
          <div class="card-header bg-dark text-white fw-bold">MISSION</div>
          <div class="card-body">
            <p class="fw-bold">Réduire les coûts<br>des soins de santé</p>
            <i class="bi bi-bullseye" style="font-size: 2rem; color: black;"></i>
            <ul class="text-start small mt-2">
              <li>80% des frais couverts</li>
              <li>Accessible aux plus démunis</li>
              <li>Accès à des soins de qualité</li>
              <li>Mutuelle solidaire</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Vision -->
      <div class="col-12 col-md-4 mt-5">
        <div class="card text-center shadow-sm border-0 h-100">
          <div class="card-header bg-secondary text-white fw-bold">VISION</div>
          <div class="card-body">
            <p class="fw-bold">Une couverture maladie<br>pour tous</p>
            <i class="bi bi-eye" style="font-size: 2rem; color: #7a7174;"></i>
            <ul class="text-start small mt-2">
              <li>Réduction de la vulnérabilité</li>
              <li>Soutien aux faibles revenus</li>
              <li>Micro-assurance innovante</li>
              <li>Couverture universelle (CMU)</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


 <div class="col-md-12 text-center" style="margin-top: 50px">
        <div class="section-heading">
          <h2>Découvrez nos <em>services</em>  utiles au quotidien</h2>
          <span>Des solutions solidaires et accessibles pour réduire les frais médicaux</span>
        </div>
      </div>
<div class="single-services">
  
  <div class="container">
    <div class="row" id="tabs">

     <div class="col-md-4">
 <ul id="menu-tabs">
  <li class="menu-item">
    <div class="menu-link ">
      Adhésion & Couverture 
      <i class="fa fa-angle-down arrow-icon"></i>
    </div>
    <div class="desc-content">
      Formules accessibles à tous, couverture santé étendue.
    </div>
  </li>
  <li class="menu-item">
    <div class="menu-link">
      Prise en charge médicale 
      <i class="fa fa-angle-down arrow-icon"></i>
    </div>
    <div class="desc-content">
      Accès facilité aux soins dans des centres partenaires.
    </div>
  </li>
  <li class="menu-item">
    <div class="menu-link">
      Prévention & Sensibilisation 
      <i class="fa fa-angle-down arrow-icon"></i>
    </div>
    <div class="desc-content">
      Campagnes de prévention et d'information sanitaires.
    </div>
  </li>
  <li class="menu-item">
    <div class="menu-link">
      Accompagnement personnalisé 
      <i class="fa fa-angle-down arrow-icon"></i>
    </div>
    <div class="desc-content">
      Suivi et accompagnement individuel pour chaque adhérent.
    </div>
  </li>
</ul>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.menu-item');
    const articles = document.querySelectorAll('.tabs-content article');

    items.forEach((item, index) => {
      const link = item.querySelector('.menu-link');

      link.addEventListener('click', function () {
        const isAlreadyOpen = item.classList.contains('open');

        // Fermer tous les autres items + masquer tous les articles
        items.forEach(el => el.classList.remove('open'));
        articles.forEach(a => a.classList.remove('active'));

        // Si ce n’était pas déjà ouvert, on l’ouvre + affiche l'article
        if (!isAlreadyOpen) {
          item.classList.add('open');
          if (articles[index]) {
            articles[index].classList.add('active');
          }
        } else {
          // Si déjà ouvert, on laisse l'article affiché (on le remet)
          item.classList.add('open');
          if (articles[index]) {
            articles[index].classList.add('active');
          }
        }
      });
    });

    // Ouvrir le premier service par défaut
    if (items[0]) items[0].classList.add('open');
    if (articles[0]) articles[0].classList.add('active');
  });
</script>


<style>
/* Style général de la liste des services */
#menu-tabs {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.menu-item {
  background-color: #4CAF50;
  margin-bottom: 10px;
  border-radius: 4px;
  overflow: hidden;
  transition: all 0.3s ease;
  width: 100%;
  max-width: 400px;
}

.menu-link {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 14px 16px;
  color: white;
  font-weight: bold;
  cursor: pointer;
}

.arrow-icon {
  transition: transform 0.3s ease;
}

.menu-item.open .arrow-icon {
  transform: rotate(180deg);
}

.desc-content {
  max-height: 0;
  overflow: hidden;
  padding: 0 16px;
  background-color: #f8f8f8;
  color: #333;
  font-size: 14px;
  line-height: 1.5;
  transition: max-height 0.4s ease, padding 0.3s ease;
}

.menu-item.open .desc-content {
  max-height: 100px;
  padding: 10px 16px 16px;
}

/* Cache tous les articles sauf celui actif */
.tabs-content article {
  display: none;
  animation: fadeIn 0.4s ease-in-out;
}

.tabs-content article.active {
  display: block;
}

/* Animation douce lors du changement */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

</style>



  <div id="short-desc" class="description-courte mt-3" style="color: #444; font-size: 14px;"></div>
</div>

      <div class="col-md-8">
        <section class='tabs-content'>
          <article id='tabs-1'>
            <img src="{{asset('assets/images/img18.jpg')}}" alt="">
            <h4>Adhésion & Couverture</h4>
            <p>Nous proposons des formules flexibles d’adhésion accessibles aux familles à faibles revenus, avec une couverture médicale étendue incluant consultations, soins et médicaments essentiels. Nos offres s’adaptent à vos besoins pour garantir un accès équitable à la santé.</p>
          </article>
          <article id='tabs-2'>
            <img src="{{asset('assets/images/img21.jpg')}}" alt="">
            <h4>Prise en charge médicale</h4>
            <p>DOUMEVI facilite l’accès aux soins en collaborant avec un réseau de centres de santé agréés. Grâce à notre micro-assurance, les bénéficiaires peuvent recevoir les traitements nécessaires tout en réduisant considérablement leurs dépenses médicales.</p>
          </article>
          <article id='tabs-3'>
            <img src="{{asset('assets/images/img23.jpg')}}" alt="">
            <h4>Prévention & Sensibilisation</h4>
            <p>Nous organisons régulièrement des campagnes d’information, de dépistage et de sensibilisation sur les bonnes pratiques sanitaires, la nutrition, et la gestion des maladies chroniques, dans le but de prévenir plutôt que de guérir.</p>
          </article>
          <article id='tabs-4'>
            <img src="{{asset('assets/images/img35.webp')}}" alt="">
            <h4>Accompagnement personnalisé</h4>
            <p>Nos équipes accompagnent chaque adhérent dans la compréhension de ses droits et démarches administratives, avec un suivi adapté à chaque situation. Nous croyons en une approche humaine et de proximité pour mieux servir notre communauté.</p>
          </article>
        </section>
      </div>
    </div>
  </div>
</div>

<div class="services py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-4">
        <div class="section-heading_service">
          <h2 class="text-start">Nos dernières <em>actualités</em></h2>
          <!-- <span>Des solutions solidaires et accessibles pour réduire les frais médicaux</span> -->
        </div>
      </div>

    

      <!-- Actualité 2 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
          <img src="{{ asset('assets/images/actu1.jpg') }}" class="card-img-top" alt="Présentation des offres">
          <div class="card-body">
            <h4 class="card-title">Présentation des offres de couverture</h4>
            <p class="card-text">
              Découvrez les différentes formules proposées par la Mutuelle, adaptées aux besoins variés des familles et individus, avec un accent sur la solidarité et la qualité des soins.
            </p>
          
          </div>
        </div>
      </div>

      <!-- Actualité 3 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
          <img src="{{ asset('assets/images/actu2.jpg') }}" class="card-img-top" alt="Intervention des membres">
          <div class="card-body">
            <h4 class="card-title">Interventions des membres</h4>
            <p class="card-text">
              Des échanges riches et constructifs lors des interventions des membres, mettant en lumière les attentes et propositions pour une mutuelle toujours plus performante et inclusive.
            </p>
          
          </div>
        </div>
      </div>

      <!-- Actualité 4 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
          <img src="{{ asset('assets/images/actu3.jpg') }}" class="card-img-top" alt="Engagement solidaire">
          <div class="card-body">
            <h4 class="card-title">Engagement solidaire</h4>
            <p class="card-text">
              La Mutuelle DOUMEVI réaffirme son engagement pour une solidarité active, garantissant une meilleure prise en charge des soins de santé pour tous ses adhérents.
            </p>
          
          </div>
        </div>
      </div>

      <!-- Actualité 5 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
          <img src="{{ asset('assets/images/actu4.jpg') }}" class="card-img-top" alt="Signature de partenariats">
          <div class="card-body">
            <h4 class="card-title">Signature de partenariats stratégiques</h4>
            <p class="card-text">
              Des partenariats avec des acteurs clés du secteur médical ont été officialisés, afin d’assurer des services de qualité et accessibles à nos adhérents.
            </p>
          
          </div>
        </div>
      </div>

      <!-- Actualité 6 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
          <img src="{{ asset('assets/images/actu5.jpg') }}" class="card-img-top" alt="Sensibilisation santé">
          <div class="card-body">
            <h4 class="card-title">Campagne de sensibilisation santé</h4>
            <p class="card-text">
              Lancement d’une campagne d’information pour encourager les bonnes pratiques de santé et promouvoir l’adhésion à la mutuelle dans les communautés locales.
            </p>
          
          </div>
        </div>
      </div>

      <!-- Actualité 7 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
          <img src="{{ asset('assets/images/actu6.jpg') }}" class="card-img-top" alt="Équipe DOUMEVI">
          <div class="card-body">
            <h4 class="card-title">Présentation de l’équipe DOUMEVI</h4>
            <p class="card-text">
              Rencontre avec les membres du conseil d’administration et les équipes opérationnelles, engagées pour un service efficace et proche des adhérents.
            </p>
          
          </div>
        </div>
      </div>

      <!-- Actualité 8 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
          <img src="{{ asset('assets/images/actu7.jpg') }}" class="card-img-top" alt="Ateliers formation">
          <div class="card-body">
            <h4 class="card-title">Ateliers de formation et d’information</h4>
            <p class="card-text">
              Des sessions dédiées à la formation des adhérents et agents pour mieux comprendre les droits, services et démarches au sein de la mutuelle.
            </p>
          
          </div>
        </div>
      </div>

      <!-- Actualité 9 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
          <img src="{{ asset('assets/images/actu8.jpg') }}" class="card-img-top" alt="Cérémonie de clôture">
          <div class="card-body">
            <h4 class="card-title">Cérémonie de clôture</h4>
            <p class="card-text">
              La clôture de l’assemblée générale marquée par un message fort d’unité et d’espoir pour un avenir meilleur dans la santé solidaire.
            </p>
          
          </div>
        </div>
      </div>
  <!-- Actualité 1 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm service-card" style="min-height: 550px;">
          <img src="{{ asset('assets/images/actu4.jpg') }}" class="card-img-top" alt="Assemblée Générale">
          <div class="card-body">
            <h4 class="card-title">Assemblée Générale inaugurale</h4>
            <p class="card-text">
              La Mutuelle de Santé DOUMEVI a organisé son assemblée générale de lancement, rassemblant ses membres fondateurs autour de la vision commune d'une couverture santé accessible à tous.
            </p>
          
          </div>
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
                <img src="{{asset('assets/images/logo_lcvie.png')}}" title="1" alt="1" />
              </div>

              <div class="partner-item">
                <img src="{{asset('assets/images/partner1.png')}}" title="2" alt="2" />
              </div>

              <div class="partner-item">
                <img src="{{asset('assets/images/partner2.png')}}" title="3" alt="3" />
              </div>

              <div class="partner-item">
                <img src="{{asset('assets/images/partner3.png')}}" title="4" alt="4" />
              </div>

              <div class="partner-item">
                <img src="{{asset('assets/images/partner4.png')}}" title="5" alt="5" />
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
