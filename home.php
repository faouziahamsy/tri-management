<?php include('db_connect.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ACCUEIL</h1>
          </div>
        </div>
            <hr class="border-danger">
    </div>
</div>
<!-- /.content-header -->

<!-- Info boxes -->
 <div class="col-12">
          <div class="card">
            <div class="card-body">
              Bienvenue <?php echo $_SESSION['login_name'] ?> !

            <div class="row">
        <div class="col-12">
          <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-building"></i>
              </div>
              <div class="mr-5">Cellules</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="index.php?page=pfalist">
              <span class="float-left">Voir les cellules</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fas fa-calendar-alt"></i>
              </div>
              <div class="mr-5">Emploi du temps</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="index.php?page=emploi">
              <span class="float-left">Voir l'emploi du temps </span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fas fa-calendar-alt"></i>
              </div>
              <div class="mr-5">Emploi des évaluations</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="index.php?page=evaluation">
              <span class="float-left">Voir l'emploi des évaluations</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-file"></i>
              </div>
              <div class="mr-5" >Programme ISIC</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="index.php?page=s1list">
              <span class="float-left">Voir le programme</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-secondary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-file"></i>
              </div>
              <div class="mr-5" >Programme IITE</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="index.php?page=S1">
              <span class="float-left">Voir le programme</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <?php if($_SESSION['login_type'] != 3 ): ?>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-file"></i>
              </div>
              <div class="mr-5">Membres du départements</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="index.php?page=user_list">
              <span class="float-left">Voir les membres du département</span>
              <span class="float-right">
              <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <?php endif; ?>
      </div>
            </div>
          </div>
  </div>
