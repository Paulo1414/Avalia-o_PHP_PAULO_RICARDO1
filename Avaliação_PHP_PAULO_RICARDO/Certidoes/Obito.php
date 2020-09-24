<?php

    class CertidaoObito extends Certidao
    {

        
        private $nomeFalecidos;

        public function __construct($numRegistroCertidao,$nomeFalecidos,$nomeDeclarantes,$tipoCertidao, $dataEmissao)
        {

                    $this->numRegistroCertidao=$numRegistroCertidao;
                    $this->nomeFalecidos=$nomeFalecidos;
                    $this->nomeDeclarantes=$nomeDeclarantes;
                    $this->tipoCertidão=$tipoCertidao;
                    $this->dataEmissão=$dataEmissao;



        }

   
        public function getNumRegistroCertidao()
        {
            return $this->numRegistroCertidao;
        }

             public function setNumRegistroCertidao($numRegistroCertidao)
        {
            $this->numRegistroCertidao=$numRegistroCertidao;
        }


         public function getNomePessoas()
         {
             return $this->nomeFalecidos;
         }
         public function setNomePessoas($nomeCasados)
         {
             $this->nomeFalecidos=$nomeFalecidos;
         }



         public function getNomeDeclarantes()
         {
            return $this->nomeDeclarantes;
         }
        public function setNomeDeclarantes($nomeDeclarantes)
{
    $this->nomeDeclarantes=$nomeDeclarantes;
}

         public function getTipoCertidao()
         {
            return $this->tipoCertidao;
         }
        public function setTipoCertidao($tipoCertidao)
        {
            $this->tipoCertidao=$tipoCertidao;
        }


         public function getDataEmissao()
         {
            return $this->dataEmissao;
         }
        public function setDataEmissao($dataEmissão)
        {
            $this->dataEmissão=$dataEmissao;
        }


         public function getNomeTabeliao()
         {
            return $this->nomeTabeliao;
         }
         public function setNomeTabeliao($nomeTabeliao)
         {
            $this->nomeTabelião=$nomeTabeliao;
         }


         public function getNomeCartorio()
         {
            return $this->nomeCartorio;
         }
         public function setNomeCartorio($nomeCartorio)
         {
            $this->nomeCartorio=$nomeCartorio;
         }
    }
