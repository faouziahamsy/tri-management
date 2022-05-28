<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <div class="dropdown">
   	<a href="./" class="brand-link">
        <?php if($_SESSION['login_type'] == 1): ?>
        <h5 class="text-center p-0 m-0"><b> Chef de département</b></h5>
        <?php elseif($_SESSION['login_type'] == 4) :?>
        <h5 class="text-center p-0 m-0"><b> Coordonnateur de filière </b></h5>
        <?php elseif($_SESSION['login_type'] == 5) :?>
        <h5 class="text-center p-0 m-0"><b> Responsable  de cellule </b></h5>
        <?php else :?>
        <h3 class="text-center p-0 m-0"><b> Intervenant</b></h3>
        <?php endif; ?>
    </a>
    </div>
    <div class="sidebar pb-4 mb-4">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a href="./" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>  

          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_project nav-view_project">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Cellules
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
         
              <li class="nav-item">
                <a href="./index.php?page=pfalist" class="nav-link nav-pfalist tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>PFA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=pfelist" class="nav-link nav-pfelist tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>PFE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=stagelist" class="nav-link nav-stagelist tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>STAGE</p>
                </a>
              </li>
            </ul>
          </li>       
    <li class="nav-item">
        <a href="./index.php?page=emploi" class="nav-link nav-emploi">
          <i class="nav-icon fas fa-calendar-alt"></i>
           <p>Emploi du temps</p>
           <i class="right fas fa-angle-left"></i>
         </a>
         <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="./index.php?page=emploi" class="nav-link nav-emploi tree-item">  
              <i class="fas fa-angle-right nav-icon"></i>  
              <p>Emploi du temps ISIC</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="./index.php?page=emploi2" class="nav-link nav-emploi2 tree-item">
              <i class="fas fa-angle-right nav-icon"></i>
                  <p>Emploi du temps IITE</p>
                </a>
              </li>
        </ul>
   </li>
   <li class="nav-item">
        <a href="./index.php?page=evaluation" class="nav-link nav-evaluation">
          <i class="nav-icon fas fa-calendar-alt"></i>
           <p>Emploi des evaluations</p>
           <i class="right fas fa-angle-left"></i>
         </a>
         <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="./index.php?page=evaluation" class="nav-link nav-evaluation tree-item">  
              <i class="fas fa-angle-right nav-icon"></i>  
              <p>Evaluations ISIC</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="./index.php?page=evaluation1" class="nav-link nav-evaluation1 tree-item">
              <i class="fas fa-angle-right nav-icon"></i>
                  <p>Evaluations IITE</p>
                </a>
              </li>
        </ul>
   </li>
          <?php if($_SESSION['login_type'] != 3): ?>

           <li class="nav-item">
                <a href="./index.php?page=reports" class="nav-link nav-reports">
                  <i class="fas fa-th-list nav-icon"></i>
                  <p>Programme ISIC
                  <i class="right fas fa-angle-left"></i>
                  </p>
                  </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=s1list" class="nav-link nav-s1list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>s1</p>
                </a>
              </li>
            <?php endif; ?>
              <li class="nav-item">
                <a href="./index.php?page=s2list" class="nav-link nav-s2list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>s2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=s3list" class="nav-link nav-s3list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>s3</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="./index.php?page=s4list" class="nav-link nav-s4list tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>s4</p>
                  </a>
              </li>
                 
              <li class="nav-item">
                  <a href="./index.php?page=s5list" class="nav-link nav-s5list tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>s5</p>
                  </a>
              </li>
    
            </ul>
          </li>
          <?php if($_SESSION['login_type'] != 3): ?>

<li class="nav-item">
     <a href="./index.php?page=reports" class="nav-link nav-reports">
       <i class="fas fa-th-list nav-icon"></i>
       <p>Programme IITE
       <i class="right fas fa-angle-left"></i>
       </p>
       </a>
 <ul class="nav nav-treeview">
   <li class="nav-item">
     <a href="./index.php?page=S1" class="nav-link nav-S1 tree-item">
       <i class="fas fa-angle-right nav-icon"></i>
       <p>s1</p>
     </a>
   </li>
 <?php endif; ?>
   <li class="nav-item">
     <a href="./index.php?page=S2" class="nav-link nav-S2 tree-item">
       <i class="fas fa-angle-right nav-icon"></i>
       <p>s2</p>
     </a>
   </li>
   <li class="nav-item">
     <a href="./index.php?page=S3" class="nav-link nav-S3 tree-item">
       <i class="fas fa-angle-right nav-icon"></i>
       <p>s3</p>
     </a>
   </li>
   <li class="nav-item">
       <a href="./index.php?page=S4" class="nav-link nav-S4 tree-item">
         <i class="fas fa-angle-right nav-icon"></i>
         <p>s4</p>
       </a>
   </li>
      
   <li class="nav-item">
       <a href="./index.php?page=S5" class="nav-link nav-S5 tree-item">
         <i class="fas fa-angle-right nav-icon"></i>
         <p>s5</p>
       </a>
   </li>          
 </ul>
</li>
     
          <?php if($_SESSION['login_type'] != 3): ?>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Membres
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=user_list" class="nav-link nav-user_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Enseignants</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=cellule_list" class="nav-link nav-cellule_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Responsables des cellules</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=filiere_list" class="nav-link nav-filiere_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Coordonnateurs des filières</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=college_list" class="nav-link nav-college_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Membres de collège</p>
                </a>
              </li>
            </ul>
          </li>
        <?php endif; ?>
        </ul>
      </nav>
    </div>
  </aside>
  <script>
  	$(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if(s!='')
        page = page+'_'+s;
  		if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}
     
  	})
  </script>