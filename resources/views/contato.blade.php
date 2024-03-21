@extends('layouts.main')

@section('title', 'Contato')

@section('content')

<div class="container">
 
<?php
    $horarioFuncionamento = "09:00 - 21:00";
    $naoFuncionando = "Fechado";
    ?>


<div class="card card-container">
  <ul class="list-group list-group-flush">
    <li class="list-group-item card-header">
      <h1 class="text-center">
        Em caso de dúvidas, pode entrar em contato através
      </h1>
    </li>
    <li class="list-group-item">
      <h2 class="card-title">Horários de funcionamento</h2>
      <ul class="card-text" style="list-style-type: none; padding: 0;">
        <li>Domingo: <?php echo $naoFuncionando ?></li>
        <li>Seguna à Sexta: <?php echo $horarioFuncionamento ?></li>
        <li>Sábado:  <?php echo $naoFuncionando ?></li>
      </ul>
    </li>
    <li class="list-group-item">
      <h2 class="card-title">Endereço</h2>
      <p class="card-text">
        Endereço: Av. Águia de Haia, 2633 - Cidade Antônio Estêvão de Carvalho, São Paulo - SP, 03694-000
      </p>
    </li>
  </ul>
  <div class="card-footer">
    <p class="card-footer-text">
      (11) 2045-4000
    </p>
  </div>

</div>

<br><br>

<div class="card card-container">


<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Email
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p>
       <a href="e211dir@cps.sp.gov.br">e211dir@cps.sp.gov.br</a> / <a href="e211acad@cps.sp.gov.br">e211acad@cps.sp.gov.br</a>
       </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Telefones
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>
        (11) 2045-4016 / (11) 2045-4011
        </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        CEP
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>
         03685-000
         </p> 
      </div>
    </div>
  </div>
</div>


</div>  

</div>

@endsection