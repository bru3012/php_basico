<?php 
    //arrays pode ter misto de dados
    //arrays = variaveis em diversas chaves
    $nome = array('bruno','gui','rafa');
    //acessar o indice: echo $nome[2];
    //declarar de outro modo so que antigo aqui vai pulando em indice em indice
    $Nome[] = 'joão';
    $nome[] ='felipe';

    //outro modo
    $nome[0] ='bruno';
    $nome[100] = 'rafa';

    //forma da nova versão
    $variaveis = ['bruno','joão','fernando' ];
    

    //
    $informacão['nome'] = 'guilherme';
    $informacão['idade'] = 23;
    $informacão['cidade'] = 'leme';
    echo $informacão['nome'];
    echo '<br /> ';
    echo $informacão['idade'];
    echo '<br /> ';
    echo $informacão['cidade'];
?>