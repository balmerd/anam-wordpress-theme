<div id="memorial-nav">
  <?php
    $memorialLinkTemplate = '<a href="memorials/?tag=%1$s">%1$s</a>';

    $memorialArray = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
          
    foreach($memorialArray as $letter) {
      echo sprintf($memorialLinkTemplate, $letter);
    }
  ?>
</div>
