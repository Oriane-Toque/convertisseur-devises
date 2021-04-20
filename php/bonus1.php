<?php

function getConvertedAmount ($amount, $devise)
{
  switch ($devise) :
    case 'Dollar': 
      return $amount *= 1.14;
      break;
    case 'Yen':
      return $amount *= 126;
      break;
    case 'Peso':
      return $amount *= 33.18;
      break;
  endswitch;

}

function isEven ($number)
{
  $numberIsEven = $number%2;

  if ($numberIsEven == 0) :
?>  <p class="bonus1_paragraphe">Le montant converti est un nombre <strong>pair</strong></p>
<?php
  else :
?>  <p class="bonus1_paragraphe">Le montant converti est un nombre <strong>impair</strong></p>
<?php
  endif;
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
        <option>Dollar</option>
        <option>Yen</option>
        <option>Peso</option>
      </select>
      <button class="bonus1_button" type="submit">convertir</button>
    </fieldset>
  </form>

  <?php
    if (!empty($_GET) && !empty($_GET['montant_euro']) && !empty($_GET['devise'])) :

        $numberToConvert = $_GET['montant_euro'];
        $choice_devise = $_GET['devise'];
      
        $conversion = getConvertedAmount(intval($numberToConvert), $choice_devise);   
  ?>
        <h2 class="bonus1_title">Résultat de la conversion</h2>
        <p class="bonus1_paragraphe"><?= $numberToConvert; ?> EURO = <strong><?= $conversion; ?> <?= $choice_devise ?></strong></p>
  <?php
        $isEven = isEven($conversion);
    else:
  ?>
        <h2 class="bonus1_title">Attention</h2>
        <p class="bonus1_paragraphe">Veuillez indiquer un montant supérieur à 0 ainsi que votre devise pour la conversion</p>
  <?php
    endif;
  ?>
  </body>
</html>