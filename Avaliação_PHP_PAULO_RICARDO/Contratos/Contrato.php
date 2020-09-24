<?php

abstract class Contrato
    {


        private $NumeroRegistroContrato;
         private $NomePartesEnvolvidas;
         private $NomesdasTestemunhas;
         private $ObjetoDoContrato;
         private $DatadeEmissao;
         private $DatadeRegistro;
         private $NomedoTabeliao;
         private $NomedoCartorio;



       abstract public function getNumeroRegistroContrato();
       abstract  public function setNumeroRegistroContrato();

       abstract public function getNomePartesEnvolvidas();
       abstract public function setNomePartesEnvolvidas();

       abstract   public function getNomeDasTestemunhas();
       abstract   public function setNomeDasTestemunhas();

       abstract   public function getObjetoDoContrato();
       abstract   public function setObjetoDoContrato();

       abstract   public function getDatadeEmissao();
       abstract   public function setDatadeEmissao();

       abstract   public function getDatadeRegistro();
       abstract   public function setDatadeRegistro();

       abstract    public function getNomedoTabeliao();
       abstract  public function setNomedoTabeliao();

       abstract   public function getNomedoCartorio();
       abstract    public function setNomedoCartorio();




    }