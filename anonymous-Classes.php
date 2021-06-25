<?php


//Quando você precisar de objetos descartaveis você pode criar classes anônimas
$classAnonymous = new class{

  public function log($message){
      return $message;
  }

};

class BankAccount{

  public function withdraw($value, $classAnonymous){
      return $classAnonymous->log('carregando withdraw...');
  }

}

$bkAccount = new BankAccount();
print $bkAccount->withdraw(17, $classAnonymous);

