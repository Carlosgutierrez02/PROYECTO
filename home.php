 <!-- <div class="list-group">
             <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
          Bienvenido : <?php  echo $_SESSION["user"] ?>
        </a> -->
       
<?php 
          if ($_SESSION["user"] =='marcela@gmail') {
            echo '<body style="background-color:blue">';
        ?>
            <a href="#" class="list-group-item list-group-item-action">Usuarios</a>
            
        <?php 
          }
        ?>
        <?php 
          if ($_SESSION["user"] =='ibeth') {
            echo '<body style="background-color:pink">';
        ?>
            
        <?php 
          }
        ?>
        
      
        
