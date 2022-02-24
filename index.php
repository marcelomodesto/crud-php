<?php

use App\Model\Pessoa;
use App\Model\PessoaDao;

require_once 'vendor/autoload.php';


$pessoa = new Pessoa();
$pessoa->setNome("Zuleika Abranches Soares");
$pessoa->setCodpes(99300303);
$pessoa->setUrlalu("");
$pessoa->setUrlort("http://www.uol.com.br");
$pessoa->setCodpub("9944000X222sA");


$pessoaDao = new PessoaDao();


// cria pessoa
//$pessoaDao->create($pessoa);


// busca pessoas

foreach ($pessoaDao->read() as $pessoa) {
    echo PHP_EOL . $pessoa['codpes'] . '  ' .  $pessoa['nome']  . '  ' . $pessoa['codpub'] . '  ' . $pessoa['urlalu'] .  '  ' . $pessoa['urlort'] ;
}

// update
//$pessoaDao->update($pessoa);


// delete
//$pessoaDao->delete(99300303);

echo PHP_EOL . "Concluído";