<?php

  /* FONCTION CONVERSION EURO => YENS */
  function getAmountInYens ($amount)
  {
    $tx_conversion = 126;

    $amountInYens = $amount * $tx_conversion;

    return $amountInYens;
  }

  include '../inc/header.php';
?>
  <!-- CONVERSION EURO => YENS -->
  <form action="" method="get">
    <fieldset class="yens_fieldset">
      <legend class="yens_legend-bg">EURO => JPY</legend>
      <label class="yens_label" for="montant1">Conversion EURO => JPY</label>
      <input type="number" name="montant1_euro" id="montant1" value="1">
      <button class="yens_button" type="submit">convertir</button>
    </fieldset>
  </form>

  <?php
    if (count($_GET) > 0 && $_GET['montant1_euro'] > 0):
      $numberToConvert1 = $_GET['montant1_euro'];

      $yen = getAmountInYens(intval($numberToConvert1));
  ?>
      <h2 class="yens_title">Résultat de la conversion</h2>
      <p class="yens_paragraphe"><?= $numberToConvert1; ?> EURO = <strong><?= $yen; ?> USD</strong></p>
  <?php
    else:
  ?>
      <h2 class="yens_title">Attention</h2>
      <p class="yens_paragraphe">Veuillez indiquer un montant supérieur à 0</p>
  <?php
    endif; 
  ?>

  </body>
</html>