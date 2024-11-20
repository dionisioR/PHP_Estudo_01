<?php

/* 
Entre as várias preocupações que temos com o desenvolvimetno das aplicações,
uma delas é garantir que existe um registo de logs que regista os principais
acontecimentos dentro da aplicação.

Pode servir para registar acontecimentos automáticos, mas também os
eventos que acontecem quando os utilizadores interagem com a nossa aplicação.

Para este projeto vamos usar o Monolog, o package mais usado para essa finalidade.
Vamos aproveitar para entender melhor o Composer.
*/

/* 
COMPOSER

    - É um gestor de dependências dos nossos projetos.
    - Uma dependência é um pacote de softare (package) do qual a nossa aplicação
    depende para determinada funcionalidade.
    - Esta é a principal função do Composer, mas existem mais.


    Quando usamos o Composer, é criado o ficheiro composer.json que contém
    todas as informações sobre as dependências do nosso projeto.

    Quando executamos instruções para o download ou atualização dessas dependências,
    é gerado o ficheiro Composer.lock que contém um vasto conjunto de informação
    sobre os packages associados à nossa aplicação.

    https://getcomposer.org/

    Para entender o Composer, não temos como escapar ao conhecimento de outro site:
    https://packagist.org/

    O Packagist é o repositório padrão dos packages disponíveis para instalar com
    o Composer. Podes entendê-lo como o local onde vais procurar soluções/pacotes
    de código pronto a ser usado para facilitar o desenvolvimento da tua aplicação.

    Necessitas de código para criar logs? Código para gerar PDFs? Código para criar
    e ler ficheiros XLSX? O packagist é o local onde vais encontrar tudo isso.

    Vamos olhar para o site e entender como funciona. É muito simples.

    Depois vamos criar um pequeno projeto para exemplificar como funciona o Monolog
*/