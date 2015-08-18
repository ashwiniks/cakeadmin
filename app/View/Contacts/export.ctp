<?php

$line= $contacts[0]['Contact'];
$this->CSV->addRow(array_keys($line));
 foreach ($contacts as $contacts)
 {
   $line= $contacts['Contact']; 
   $this->CSV->addRow($line);
 }
 $filename='contacts';
 echo  $this->CSV->render($filename);
?>