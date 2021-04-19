<?php

function getConvertedAmount ($amount, $devise)
{
  $amountInDevise = $amount * $devise;

  return $amountInDevise;
}

include '../inc/header.php';
?>
  
  <form action="" method="get">
    <fieldset class="bonus1_fieldset">
      <legend class="bonus1_legend-bg">EURO => DEVISE</legend>
      <label class="bonus1_label" for="montant2">Montant à convertir</label>
      <input type="number" name="montant_euro" id="montant2">
      <label class="bonus1_label" for="devise">Sélectionner la devise que vous désirez</label>
      <select name="devise" id="devise">
        <option>USD</option>
        <option>JPY</option>
        <option>ARS</option>
      </select>
      <button class="bonus1_button" type="submit">convertir</button>
    </fieldset>
  </form>

  <?php
    if (!empty($_GET) && !empty($_GET['montant_euro']) && !empty($_GET['devise'])) :
        
        switch ($_GET['devise']) :
          case 'USD': 
            $devise = 1.14;
            break;
          case 'JPY':
            $devise = 126;
            break;
          case 'ARS':
            $devise = 33.18;
            break;
        endswitch;

        $numberToConvert = $_GET['montant_euro'];
      
        $conversion = getConvertedAmount(intval($numberToConvert), $devise);   
  ?>
      <h2 class="bonus1_title">Résultat de la conversion</h2>
      <p class="bonus1_paragraphe"><?= $numberToConvert; ?> EURO = <strong><?= $conversion; ?> <?= $_GET['devise'] ?></strong></p>
  <?php
    else:
  ?>
      <h2 class="bonus1_title">Attention</h2>
      <p class="bonus1_paragraphe">Veuillez indiquer un montant supérieur à 0 ainsi que votre devise pour la conversion</p>
  <?php
    endif;
  ?>
  </body>
</html>