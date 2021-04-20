<?php
function getConvertedDevise ($amount, $choice_devise = 'Dollar')
{
  switch ($choice_devise) :
    case 'Dollar': 
      $amount *= 1.14;
      break;
    case 'Yen':
      $amount *= 126;
      break;
    case 'Peso':
      $amount *= 33.18;
      break;
  endswitch;

  return $amount;
}

echo getConvertedDevise(100).'<br>';
echo getConvertedDevise(100, 'Yen').'<br>';
echo getConvertedDevise(100, 'Peso').'<br>';

function getConvertedDevise2 ($amount, $isYen = false)
{
  if ($isYen == true) :
    
    return $amount * 126;

  else :

    return $amount * 1.14;

  endif;

}

echo getConvertedDevise2(100).'<br>';
echo getConvertedDevise2(100, true);

?>