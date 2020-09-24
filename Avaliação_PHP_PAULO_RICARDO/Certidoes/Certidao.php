<?php

    abstract Class Certidao
    {
        private $numRegistroCertidao;
        private $nomePessoas;
        private $nomeDeclarantes;
        private $tipoCertidao;
        private $dataEmissao;
        private $nomeTabeliao;
        private $nomeCartorio;
   
   
   
        abstract public function getNumRegistroCertidao();
        abstract public function setNumRegistroCertidao($setNumRegistroCertidao);

        abstract public function getNomePessoas();
        abstract public function setNomePessoas($setNomePessoas);

        abstract public function getNomeDeclarantes();
        abstract public function setNomeDeclarantes($setNomeDeclarantes);

        abstract public function getTipoCertidao();
        abstract public function setTipoCertidao($setTipoCertidão);

        abstract public function getDataEmissao();
        abstract public function setDataEmissao($setDataEmissão);

        abstract public function getNomeTabeliao();
        abstract public function setNomeTabeliao($setNomeTabelião);

        abstract public function getNomeCartorio();
        abstract public function setNomeCartorio($setNomeCartório);

     
     
    }

