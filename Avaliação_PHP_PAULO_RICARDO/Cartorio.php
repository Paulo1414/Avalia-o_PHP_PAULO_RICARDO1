<?php

    class Cartorio
    {
        private $tipo;
        private $endereco;
        private $descricao;
        private $certidoes;


        public function __construct($tipo, $descricao, $endereco)
        {
            $this->tipo=$tipo;
            $this->endereco=$endereco;
            $this->descricao=$descricao;
        }


        public function setCertidao(Certidao $c)
        {
            $this->certidao=$c;
        }

        public function getCertidao()
        {
            return $this->certidao;
        }


        public function adicionarCertidao(Certidao $c)
        {
    
            $this->certidoes[] = array($c);
            
        }

        public function emitirTodos()
        {
            $total = 0;
    
            foreach($this->certidoes as $certidao){
                $total += $certidao[0]->emite();
            }
        }



        
            



    }