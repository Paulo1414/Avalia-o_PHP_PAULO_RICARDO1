<?php
    require_once('Certidoes/Emitir.php');
    
    require_once('Cartorio.php');
    require_once('Certidoes/Certidao.php');
    require_once('Certidoes/CertidaoCasamento.php');
    require_once('Certidoes/CertidaodePropriedade.php');


    $cartorio = new Cartorio('privado','instituicao limpa', 'rua laranja natal');

    $certidaoC = new CertidaoCasamento('23','Ana e Julio','Ana e Julio','123', '10/10/2020');

    $certidaoP = new CertidaodePropriedade('23','Ana e Julio','Ana e Julio','123', '10/10/2020');
    
    $cartorio->setCertidao($certidaoC);

    echo $cartorio->getCertidao()->getNomePessoas(); 
    echo '<br>';
    echo $cartorio->getCertidao()->getNomeDeclarantes();
    echo '<br>';

    $cartorio->adicionarCertidao($certidaoP);
    $cartorio->adicionarCertidao($certidaoP);
    $cartorio->adicionarCertidao($certidaoP);
    $cartorio->adicionarCertidao($certidaoP);
    $cartorio->adicionarCertidao($certidaoC);
    $cartorio->adicionarCertidao($certidaoC);
    $cartorio->adicionarCertidao($certidaoC);
    $cartorio->adicionarCertidao($certidaoC);
    $cartorio->adicionarCertidao($certidaoC);
    $cartorio->adicionarCertidao($certidaoC);
    $cartorio->adicionarCertidao($certidaoC);
    $cartorio->adicionarCertidao($certidaoC);
    $cartorio->adicionarCertidao($certidaoC);
    $cartorio->adicionarCertidao($certidaoC);
    $cartorio->adicionarCertidao($certidaoC);
    $cartorio->adicionarCertidao($certidaoC);

print_r($cartorio);

$cartorio->emitirTodos();