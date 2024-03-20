@extends('layouts.main')

@section('title', 'Contato')

@section('content')

<div class="container" style="background-color: whitesmoke; margin-top: 5px; border-radius: 10px;">
  <div class="row">
    <div class="col-9">
        <h1 class="text-center">
            Em caso de dúvidas pode entrar em contato através
        </h1>
        
    </div>

    <?php
    $horarioFuncionamento = "09:00 - 21:00";
    $naoFuncionando = "Fechado";
    ?>

    <div class="col-5 fundoStyle">
    <h2 class="fundo text-center">Horários de funcionamento</h2>  
    <br>
   <p>
    <ul>
      <li class="liFechado">
        Domingo: <?php echo $naoFuncionando ?>
      </li>
      <li>
        Segunda: <?php echo $horarioFuncionamento ?>
      </li>
      <li>
        Terça: <?php echo $horarioFuncionamento ?>
      </li>
      <li>
        Quarta: <?php echo $horarioFuncionamento ?>
      </li>
      <li>
        Quinta: <?php echo $horarioFuncionamento ?>
      </li>
      <li>
        Sexta: <?php echo $horarioFuncionamento ?>
      </li>
      <li class="liFechado">
        Sábado: <?php echo $naoFuncionando ?>
      </li>
    </ul>
   </p>
  </div>

  <div class="col-5 text-center" style="margin-top: 10px;">
      <h2 class="liFechado">Endereço</h2>
    <br>
      <p>
      Endereço: Av. Águia de Haia, 2633 - 
      Cidade Antônio Estêvão de Carvalho, 
      São Paulo - SP, 03694-000
     
      </p>

      <p style="font-size: 20px;">
        (11) 2045-4000
        </p>
      </div>
  </div>
  <div class="col-5 text-center">
     
    </div>

  <div class="row">
    <div class="col-8 text-center">
    
    </div>
    <div class="col-5 text-center"> 
      <p>
      A ETEC Zona Leste é uma instituição de ensino técnico 
      localizada na região leste da cidade. Sua missão é oferecer 
      educação de qualidade e formar profissionais capacitados para 
      o mercado de trabalho. A escola oferece uma variedade de cursos 
      técnicos em áreas como informática, administração, eletrônica, 
      mecânica, entre outros. Além disso, a ETEC Zona Leste busca promover 
      o desenvolvimento pessoal e profissional de seus alunos, oferecendo 
      uma combinação de ensino teórico e prático, além de atividades 
      extracurriculares e oportunidades de estágio. Com uma equipe dedicada 
      de professores e funcionários, a ETEC Zona Leste visa preparar seus 
      alunos para os desafios do 
      mundo contemporâneo e contribuir para o progresso da comunidade local.
      </p>
    </div>
  </div>

</div>

@endsection