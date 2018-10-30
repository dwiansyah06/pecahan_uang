@extends('template/t_index')
@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4"><span class="fa fa-money"></span> Pecahan Uang</h1>
  <p class="lead">ini adalah aplikasi yang dibangun dengan bootstrap 4 dan Laravel 5.1, silahkan isi nominal uang yang akan di pecah maka sistem akan memberikan hasilnya secara cepat dan akurat.</p>
</div>

<div class="container">
    {!! Form::open(['url'=>'/prosesPemecahan']) !!}
        <div class="form-group row">
            <label for="uang" class="col-sm-12 col-md-2 col-form-label">Nominal Uang</label>
            <div class="col-sm-12 col-md-10">
                <input type="number" name="uang" class="form-control mb-4" id="uang" placeholder="Nominal Uang" required>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-block btn-success" name="" value="Process">
            </div>
        </div>
    {!! Form::close() !!}
    
  <?php 
    if (!Session::has('data')) {
        $uang = 0;
    } else {
        $uang = Session::get('data');
        if ($uang < 100) {
            echo "<div class='alert alert-danger' role='alert'>
                      <span class='fa fa-ban'></span> Nominal tidak boleh dibawah Rp 100
                  </div>
                  
                  <a href='' class='btn btn-primary'><span class='fa fa-refresh'></span> Retry</a>
                 ";
        } else {
            $format_uang = number_format($uang, 0, ",", ".");
            echo "<div class='alert alert-primary' role='alert'>
                  <span class='fa fa-info-circle'></span> Pecahan uang untuk nominal sebesar Rp $format_uang, adalah :
                </div>";
  ?>
    
  <div class="card-deck mb-3 text-center">

    <?php  
        if ($uang >= 100000){
            $nilai_uang = floor(($uang / 100000));
    ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rp 100.000</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?= $nilai_uang ?> <small class="text-muted">Lembar</small></h1>
        <img class="mb-4" src="<?= URL().'/assets/images/uang/uang_100rb.jpg' ?>" width="200">
        <a href="" class="btn btn-lg btn-block btn-outline-primary"><span class="fa fa-refresh"></span> Retry</a>
      </div>
    </div>
    <?php } ?>
    
    <?php  
        $uang = $uang % 100000;
        if ( $uang >= 50000 && $uang < 100000){
            $nilai_uang = floor(($uang / 50000));
    ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rp 50.000</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?= $nilai_uang ?> <small class="text-muted">Lembar</small></h1>
        <img class="mb-4" src="<?= URL().'/assets/images/uang/uang_50rb.jpg' ?>" width="200">
        <a href="" class="btn btn-lg btn-block btn-outline-primary"><span class="fa fa-refresh"></span> Retry</a>
      </div>
    </div>
    <?php } ?>
    
    <?php  
        $uang = $uang % 50000;
        if ( $uang >= 20000 && $uang < 500000){
            $nilai_uang = floor(($uang / 20000));
    ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rp 20.000</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?= $nilai_uang ?> <small class="text-muted">Lembar</small></h1>
        <img class="mb-4" src="<?= URL().'/assets/images/uang/uang_20rb.jpg' ?>" width="200">
        <a href="" class="btn btn-lg btn-block btn-outline-primary"><span class="fa fa-refresh"></span> Retry</a>
      </div>
    </div>
    <?php } ?>
    
    <?php  
        $uang = $uang % 20000;
        if ( $uang >= 10000 && $uang < 20000){
            $nilai_uang = floor(($uang / 10000));
    ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rp 10.000</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?= $nilai_uang ?> <small class="text-muted">Lembar</small></h1>
        <img class="mb-4" src="<?= URL().'/assets/images/uang/uang_10rb.jpg' ?>" width="200">
        <a href="" class="btn btn-lg btn-block btn-outline-primary"><span class="fa fa-refresh"></span> Retry</a>
      </div>
    </div>
    <?php } ?>
    
    <?php  
        $uang = $uang % 10000;
        if ( $uang >= 5000 && $uang < 10000){
            $nilai_uang = floor(($uang / 5000));
    ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rp 5.000</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?= $nilai_uang ?> <small class="text-muted">Lembar</small></h1>
        <img class="mb-4" src="<?= URL().'/assets/images/uang/uang_5rb.jpg' ?>" width="200">
        <a href="" class="btn btn-lg btn-block btn-outline-primary"><span class="fa fa-refresh"></span> Retry</a>
      </div>
    </div>
    <?php } ?>

    <?php  
        $uang = $uang % 5000;
        if ($uang >= 2000 && $uang < 5000){
            $nilai_uang = floor(($uang / 2000));
    ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rp 2.000</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?= $nilai_uang ?> <small class="text-muted">Lembar</small></h1>
        <img class="mb-4" src="<?= URL().'/assets/images/uang/uang_2rb.jpg' ?>" width="200">
        <a href="" class="btn btn-lg btn-block btn-outline-primary"><span class="fa fa-refresh"></span> Retry</a>
      </div>
    </div>
    <?php } ?>
    
    <?php  
        $uang = $uang % 2000;
        if ( $uang >= 1000 && $uang < 2000){
            $nilai_uang = floor(($uang / 1000));
    ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rp 1.000</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?= $nilai_uang ?> <small class="text-muted">Lembar</small></h1>
        <img class="mb-4" src="<?= URL().'/assets/images/uang/uang_seribu.jpg' ?>" width="200">
        <a href="" class="btn btn-lg btn-block btn-outline-primary"><span class="fa fa-refresh"></span> Retry</a>
      </div>
    </div>
    <?php } ?>
    
    <?php  
        $uang = $uang % 1000;
        if ( $uang >= 500 && $uang < 1000){
            $nilai_uang = floor(($uang / 500));
    ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rp 500</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?= $nilai_uang ?> <small class="text-muted">Koin</small></h1>
        <img class="mb-4" src="<?= URL().'/assets/images/uang/uang_500rupiah.jpg' ?>" width="90">
        <a href="" class="btn btn-lg btn-block btn-outline-primary"><span class="fa fa-refresh"></span> Retry</a>
      </div>
    </div>
    <?php } ?>
    
    <?php  
        $uang = $uang % 500;
        if ( $uang >= 200 && $uang < 5000){
            $nilai_uang = floor(($uang / 200));
    ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rp 200</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?= $nilai_uang ?> <small class="text-muted">Koin</small></h1>
        <img class="mb-4" src="<?= URL().'/assets/images/uang/uang_200rupiah.jpg' ?>" width="90">
        <a href="" class="btn btn-lg btn-block btn-outline-primary"><span class="fa fa-refresh"></span> Retry</a>
      </div>
    </div>
    <?php } ?>
    
    <?php  
        $uang = $uang % 200;
        if ( $uang >= 100 && $uang < 2000){
            $nilai_uang = floor(($uang / 100));
    ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rp 100</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?= $nilai_uang ?> <small class="text-muted">Koin</small></h1>
        <img class="mb-4" src="<?= URL().'/assets/images/uang/uang_100rupiah.jpg' ?>" width="90">
        <a href="" class="btn btn-lg btn-block btn-outline-primary"><span class="fa fa-refresh"></span> Retry</a>
      </div>
    </div>
    <?php } ?>

  </div>

    <?php  
        }
    }
    ?>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <center><small class="d-block mb-3 text-muted">&copy; Dwiansyah Rhamadon 2018</small></center>
          </div>
        </div>
    </footer>
</div>

@stop