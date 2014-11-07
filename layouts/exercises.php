<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>
<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>
    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
        <!--  Sisesta siia kood -->
          <?php
            echo rand(100, 200);
          ?>
      </br>
          <?php
            $randnumber = rand(100, 200);
            if ($randnumber>150){
              echo "Juhuslik number ($randnumber) on suurem kui 150";
            }
              elseif ($randnumber<150){
                echo "Juhuslik number ($randnumber) on väiksem kui 150";
              }
          ?>
        <h2>Juhuslik pilt</h2>
        <!--  Sisesta siia kood -->
        <h2>Kõikide piltide väljastamine</h2>
        <!--  Sisesta siia kood -->
      </section>
    </main>
    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>