<?php
 abstract class Cliente{
    private $nome;
    private $cpf;
    private $endereco;
    private $cep;

    function construct__($nome, $cpf, $endereco, $cep)
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setEndereco($endereco);
        $this->setCep($cep);
    }

        public function getNome()
        {
            return $this->nome;
        }

        public function getCpf()
        {
            return $this->cpf;
        }

        public function getEndereco()
        {
            return $this->endereco;
        }

        public function getCep()
        {
            return $this->cep;
        }

        public function setNome($nome)
        {
        $this->nome = $nome;
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }

        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
        }

        public function setCep($cep)
        {
            $this->cep = $cep;
        }






        


    
}
