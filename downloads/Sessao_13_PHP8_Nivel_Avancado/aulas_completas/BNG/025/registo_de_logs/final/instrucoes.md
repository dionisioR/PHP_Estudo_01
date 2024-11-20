Vamos criar uma pequena aplicação com registo de logs.

Sempre que o visitante entre numa das páginas, vai ficar registado em logs
que essa entrada aconteceu.

Para isso vamos usar o composer e adicionar o Monolog ao nosso projeto.

------------------------------------------

1. no terminal vamos executar

composer require monolog/monolog

O sistema vai descarregar a versão mais recente e compatível com a versão
do PHP que temos no nosso sistema. O Composer tem a noção dessas condições.

2. São criados os ficheiro:
    composer.json
    composer.lock
    e a pasta vendor

3. a pasta vendor vai conter todos os scripts necessários para usar o monolog.
Se, posteriormente, adicionar mais dependências, todos os scripts serão organizados
dentro dessa pasta e os ficheiros do composer serão refeitos.

4. Sempre que Composer executa essas atualizações, é gerado um ficheiro especial
que podemos encontrar dentro da pasta vendor: o ficheiro autoload.php

5. Vamos importar esse ficheiro para o nosso index.

6. Vamos criar uma função num script à parte cuja responsabilidade é registar informações no registo de logs.

7. para a implementação da função logger, podemos
usar as instruções que existem na documentação do Monolog: 
https://github.com/Seldaek/monolog

8. Vamos incluir este script no nosso index.php

9. Vamos adicionar um registo de log por cada
página visitada (info)

10. vamos alterar o registo da página 3 para um nível de erro.

Com este mecanismo já podemos adicionar registos de logs dentro da aplicação
que vão permitir fazer um acompanhamento da utilização do sistema, bem como registar
acontecimentos nos automatismos e processos do nosso projeto.
