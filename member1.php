<?php
function CheckIfPositiveNegative($n) {
  if ($n > 0)
    {$message = "<h1>The number <ins>{$n}</ins> is a Positive Number</h1><br>";}
  if ($n == 0)
    {$message = "Zero";}
  if ($n < 0)
    {$message = "<h1>and the number <ins>{$n}</ins> is a Negative Number</h1>";}
  echo $message."\n";
}

CheckIfPositiveNegative(100);
CheckIfPositiveNegative(-100);
?>