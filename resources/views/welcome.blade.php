@extends('layouts.app')

@section('content')


<!-- Page Content -->
<div class="container">

<!-- Heading Row -->
<div class="row align-items-center my-5">
    <div class="col-lg-7">
    <img class="img-fluid rounded mb-4 mb-lg-0" src="http://placehold.it/900x400" alt="">
    </div>
    <!-- /.col-lg-8 -->
    <div class="col-lg-5">
    <h1 class="font-weight-light">Business Name or Tagline</h1>
    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
    <a class="btn btn-primary" href="#">Call to Action!</a>
    </div>
    <!-- /.col-md-4 -->
</div>
<!-- /.row -->

<!-- Call to Action Well -->
<div class="card text-white bg-primary my-5 py-4 text-center">
    <div class="card-body">
    <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
    </div>
</div>

<section class="pricing py-5">
    <div class="container">
      <div class="row">
        <!-- Free Tier -->
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Gratuito</h5>
              <h6 class="card-price text-center text-success">R$0<span style="font-size: 1.5rem">/ano</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Aulas Módulo Básico</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Atividades Módulo Básico</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Aulas Módulo Intermediário</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Atividades Módulo Intermediário</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Acesso a Rede Social Exclusiva</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Aulas Módulo Avançado</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Atividades Módulo Avançado</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Certificado Exclusivo</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Suporte com tutor online</li>
              </ul>
              <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
            </div>
          </div>
        </div>
        <!-- Plus Tier -->
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
              <h6 class="card-price text-center text-success">R$30<span style="font-size: 1.5rem">/ano</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Aulas Módulo Básico</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Atividades Módulo Básico</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Aulas Módulo Intermediário</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Atividades Módulo Intermediário</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Acesso a Rede Social Exclusiva</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Aulas Módulo Avançado</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Atividades Módulo Avançado</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Certificado Exclusivo</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Suporte com tutor online</li>
              </ul>
              <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
            </div>
          </div>
        </div>
        <!-- Pro Tier -->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
              <h6 class="card-price text-center text-success">R$60<span style="font-size: 1.5rem">/ano</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Aulas Módulo Básico</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Atividades Módulo Básico</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Aulas Módulo Intermediário</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Atividades Módulo Intermediário</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Acesso a Rede Social Exclusiva</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Aulas Módulo Avançado</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Atividades Módulo Avançado</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Certificado Exclusivo</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Suporte com tutor online</li>
              </ul>
              <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<!-- /.container -->




@endsection