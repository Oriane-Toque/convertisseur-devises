<?php 

/* FONCTION CONVERSION EURO => DOLLAR */

function getAmountInDollars ($amount)
{
  $tx_conversion = 1.14;

  $amountInDollars = $amount * $tx_conversion;

  return $amountInDollars;
}

include '../inc/header.php';
?>

  <!-- CONVERSION EURO => DOLLAR -->
  <form action="" method="get">
    <fieldset>
      <legend>EURO => USD</legend>
      <label for="montant">Conversion EURO => USD</label>
      <input type="number" name="montant_euro" id="montant" value="1">
      <button type="submit">convertir</button>
    </fieldset>
  </form>
  
  <?php
    if (count($_GET) > 0 && $_GET['montant_euro'] > 0):
      $numberToConvert = $_GET['montant_euro'];

      $dollar = getAmountInDollars(intval($numberToConvert));
  ?>
      <h2>Résultat de la conversion</h2>
      <p><?= $numberToConvert; ?> EURO = <strong><?= $dollar; ?> USD</strong></p>
  <?php
    else:
  ?>
      <h2>Attention</h2>
      <p>Veuillez indiquer un montant supérieur à 0</p>
  <?php
    endif; 
  ?>

</body>
</html>