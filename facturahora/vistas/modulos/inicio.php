
<?php 
$dashboard         = ControladorDashboard::ctrConsultasDashboard();

foreach ($dashboard as $key => $value)
{
  /*$dashboard[$key] = number_format($value, 2);*/
  $value;
}

?>


<style>
@media (max-width: 575.98px) { 
    #chartdiv10,#chartdiv11
    {
        height: 700px !important;
    }
 }

/*Small devices (landscape phones, less than 768px)*/
@media (max-width: 767.98px) { 
    #chartdiv10,#chartdiv11
    {
        height: 600px !important;
    }
 }

/*// Medium devices (tablets, less than 992px)*/
@media (max-width: 991.98px) { 
    #chartdiv10,#chartdiv11
    {
        height: 500px !important;
    }
 }

/* Large devices (desktops, less than 1200px)*/
@media (max-width: 1199.98px) { 
    #chartdiv10,#chartdiv11
    {
        height: 500px !important;
    }
 }
@media (max-width: 1199.98px) { 
    #chartdiv10,#chartdiv11
    {
        height: 500px !important;
    }
 }
@media (min-width: 1199.98px) { 
    #chartdiv10,#chartdiv11
    {
        height: 400px !important;
    }
 }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<!-- Main content -->
<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-sm-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3><span id="total_ventas">
            <!-- 
            <?= $dashboard["total_ventas"] ?>
            -->
            </span></h3>
          <p>Total Ventas</p>
        </div>
        <div class="icon">
          <i class="ion ion-arrow-swap"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-sm-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>
            <!--<?= $dashboard["aceptadas_ventas"] ?>-->
          </h3>

          <p>Ventas Aceptadas</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-sm-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>
             <!--<?= $dashboard["enproceso_ventas"] ?>-->
          </h3>

          <p>Ventas en Proceso</p>
        </div>
        <div class="icon">
          <i class="ion ion-close-circled"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-sm-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>
            <!--<?= $dashboard["rechazadas_ventas"] ?> -->
          </h3>

          <p>Ventas rechazadas</p>
        </div>
        <div class="icon">
          <i class="ion ion-social-usd"></i>
        </div>
      </div>
    </div>
  </div>

 </div><!--/. container-fluid -->
</section>
</div>
<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>


