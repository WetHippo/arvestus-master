<header id="site-header">
  <h1>
  <?php 
      echo $site_title; 
  ?>
</h1>
  <nav class="menu-main">
    <ul class="menu">
      <?php  
       foreach ($menu_main as $nav => $item){
      echo '<li><a href="'.$item.'">'.$nav.'</a></li>';
       } 
      ?>
    </ul>
  </nav>
</header>