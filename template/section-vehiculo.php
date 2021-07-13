<?php
    $marcas = get_terms( array(
        'taxonomy' => 'marca',
        'hide_empty' => false,
    ) );

?>
<ul class="nav nav-tabs justify-content-between border-0" id="tipoVehiculo" role="tablist">
  <li class="nav-item col-md-5 col-lg-5 col-12" role="presentation">
    <button class="nav-link active m-0 pt-4 pb-4 padding-tab" id="coche-tab" data-bs-toggle="tab" data-bs-target="#coche" type="button" role="tab" aria-controls="coche" aria-selected="true">
      <img width='48' height='48' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/coche.svg'; ?>" alt="">
      <p class='mb-0 ml-3 mr-3' >Coche</p>
    </button>
  </li>
  <li class="nav-item col-md-5 col-lg-5 col-12" role="presentation">
    <button class="nav-link m-0 pt-4 pb-4" id="moto-tab" data-bs-toggle="tab" data-bs-target="#moto" type="button" role="tab" aria-controls="moto" aria-selected="false">
        <img width='48' height='48' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/moto.svg'; ?>" alt="">
        <p class='mb-0 ml-3 mr-3'>Moto o coche sin carnet </p>    
      </button>
  </li>
  <!--<li class="nav-item " role="presentation">-->
  <!--  <button class="nav-link" id="caravana-tab" data-bs-toggle="tab" data-bs-target="#caravana" type="button" role="tab" aria-controls="caravana" aria-selected="false">-->
  <!--    <img width='48' height='48' src="<?php //echo plugin_dir_url( __DIR__ ).'assets/img/van.png'; ?>" alt="">-->
  <!--    <p class='mb-0'>Caravana / remolque</p>-->
  <!--  </button>-->
  <!--</li>-->
</ul>
<div class="tab-content text-left" id="marca-tab">
     <!-- coche -->
    <div class="tab-pane fade show active text-left p-0" id="coche" role="tabpanel" aria-labelledby="coche-tab">
      <div class='row justify-content-between' style="margin:0;">
        <?php include('coche-template.php'); ?>
      </div>
       
    </div>
    <!-- moto -->
    <div class="tab-pane fade text-left p-3" id="moto" role="tabpanel" aria-labelledby="moto-tab">
        <?php include('moto-template.php'); ?>
    </div>
    <!-- caravana -->
    <!--<div class="tab-pane fade text-left p-3" id="caravana" role="tabpanel" aria-labelledby="caravana-tab">-->
        <?php //include('caravana-template.php'); ?>
    <!--</div>-->
</div>