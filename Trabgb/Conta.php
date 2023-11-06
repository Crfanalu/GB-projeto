<?php
class Conta{
    private $numero;
    private $nome;
    private $saldo;
    private $pessoa;


    function construct__($numero, $nome, $saldo){
        $this->definirNumero($numero);
        $this->definirNome($nome);
        $this->definirSaldo($saldo);
    }

    public function definirNumero($vlr){$this->numero = $vlr;}
    public function retornarNumero(){return $this->numero;}
    public function definirNome($vlr){$this->nome = $vlr;}
    public function retornarNome(){return $this->nome;}
    public function definirSaldo($vlr){$this->saldo = $vlr;}
    public function retornatSaldo(){return 'R$' .$this->saldo;}
    public function definirPessoa($vlr){$this->pessoa = $vlr;}
    public function retornarPessoa(){return $this->pessoa;}

    public function retornarConta(){
        $this->retornarNumero();
        $this->retornarNome();
        $this->retornarSaldo();
    }
}
?>

<?php
include "./classe/Conta.php";

$conta1 = New Conta(001, "Anderson", 100);
$conta1->retornarConta();
?>