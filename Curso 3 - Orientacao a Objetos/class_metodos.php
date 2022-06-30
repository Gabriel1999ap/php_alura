<?php
class Conta

{

  public $cpfTitular;

  public $nomeTitular;

  public $saldo = 0;



  public function sacar($valorASacar)
  {

    if ($valorASacar > $this->saldo) {

      echo "Valor indisponivel";
    } else {

      $this->saldo -= $valorASacar;
    }
  }



  public function depositar($valorADepositar)
  {

    if ($valorADepositar < 0) {

      echo "Deposito invalido";
    } else {

      $this->saldo += $valorADepositar;
    }
  }



  public function transferir($valorATransferir, Conta $ContaDestino)

  {

    if ($valorATransferir > $this->saldo) {

      echo "Saldo indisponivel";
    } else {

      $this->sacar($valorATransferir);

      $ContaDestino->depositar($valorATransferir);
    }
  }
};



//INICIANDO UMA CONTA #1 SALDO 0

echo "Iniciando conta #1 com o saldo zerado <br>";

$primeiraConta = new Conta();

$primeiraConta->cpfTitular = "122.266.145-41";

$primeiraConta->nomeTitular = "Gabriel Aparecido de Almeida";

var_dump($primeiraConta);



//DEPOSITO

echo "Depositando 1110.78 reais <br>";

$primeiraConta->depositar(1110.78);

var_dump($primeiraConta);





//SAQUE

echo "Sacando 110.78 reais <br>";

$primeiraConta->sacar(110.78);

var_dump($primeiraConta);



//INICIANDO UMA CONTA #2 SALDO 0

echo "Iniciando conta #2 com o saldo zerado <br>";

$segundaConta = new Conta();

$segundaConta->cpfTitular = "123.555.129-50";

$segundaConta->nomeTitular = "Joao Jose Teste";

var_dump($segundaConta);



//TRANSFERINDO R$500 DA CONTA #1 PARA A CONTA #2

echo "Transferindo 300.99 Reais da Conta #1 (Gabriel) para a conta #2 (Joao) <br>";

$primeiraConta->transferir(300.99, $segundaConta);

var_dump($primeiraConta);

var_dump($segundaConta);





//TRANSFERINDO R$123.50 DA CONTA #2 PARA A CONTA #1

echo "Transferindo 123.50 Reais da Conta #2 (Joao) para a conta #1 (Gabriel) <br>";

$segundaConta->transferir(123.50, $primeiraConta);

var_dump($primeiraConta);

var_dump($segundaConta);
