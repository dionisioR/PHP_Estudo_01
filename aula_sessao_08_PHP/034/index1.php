<?php
// $_SERVER
// É uma super global que contém informações sobre cabeçalhos, caminhos e locais de script.
// O índice é criado pelo servidor web.
// Todos os índices deste array são strings.
// Informações sobre o servidor e o ambiente de execução

// Alguns dos índices mais comuns são:
// $_SERVER['PHP_SELF'] - Retorna o nome do arquivo do script que está sendo executado.
// $_SERVER['SERVER_NAME'] - Retorna o nome do host do servidor onde o script está sendo executado.
// $_SERVER['HTTP_USER_AGENT'] - Retorna o cabeçalho do agente do usuário do navegador em uso.
// $_SERVER['SCRIPT_NAME'] - Retorna o caminho do script atual.
// $_SERVER['SERVER_ADDR'] - Retorna o endereço IP do host do servidor.
// $_SERVER['REMOTE_ADDR'] - Retorna o endereço IP do usuário.
// $_SERVER['REQUEST_METHOD'] - Retorna o método de solicitação usado para acessar a página.
// $_SERVER['QUERY_STRING'] - Retorna a string de consulta se houver alguma.
// $_SERVER['HTTP_REFERER'] - Retorna o URL do site de onde o usuário veio.
// $_SERVER['HTTP_HOST'] - Retorna o cabeçalho do host do usuário.
// $_SERVER['SERVER_SOFTWARE'] - Retorna o nome e a versão do software do servidor.
// $_SERVER['HTTP_ACCEPT_LANGUAGE'] - Retorna uma lista separada por vírgulas de idiomas que o usuário aceita.
// $_SERVER['REQUEST_TIME'] - Retorna o tempo em que a solicitação foi recebida.
// $_SERVER['HTTP_COOKIE'] - Retorna o cabeçalho do cookie.
// $_SERVER['HTTP_CONNECTION'] - Retorna o cabeçalho de conexão.
// $_SERVER['HTTP_ACCEPT'] - Retorna o cabeçalho de aceitação do navegador.
// $_SERVER['HTTP_ACCEPT_ENCODING'] - Retorna o cabeçalho de codificação de aceitação do navegador.
// $_SERVER['HTTP_ACCEPT_CHARSET'] - Retorna o cabeçalho de conjunto de caracteres de aceitação do navegador.
// $_SERVER['HTTP_ACCEPT_DATETIME'] - Retorna o cabeçalho de aceitação de data e hora do navegador.
// $_SERVER['HTTP_ACCEPT_FEATURES'] - Retorna o cabeçalho de aceitação de recursos do navegador.
// $_SERVER['HTTP_ACCEPT_RANGES'] - Retorna o cabeçalho de aceitação de intervalos do navegador.
// $_SERVER['HTTP_CACHE_CONTROL'] - Retorna o cabeçalho de controle de cache do navegador.
// $_SERVER['HTTP_CONTENT_LENGTH'] - Retorna o cabeçalho de comprimento do conteúdo do navegador.
// $_SERVER['HTTP_CONTENT_TYPE'] - Retorna o cabeçalho de tipo de conteúdo do navegador.
// $_SERVER['HTTP_DATE'] - Retorna o cabeçalho de data do navegador.
// $_SERVER['HTTP_EXPECT'] - Retorna o cabeçalho de expectativa do navegador.
// $_SERVER['HTTP_FORWARDED'] - Retorna o cabeçalho de encaminhamento do navegador.
// $_SERVER['HTTP_FROM'] - Retorna o cabeçalho de origem do navegador.
// $_SERVER['HTTP_IF_MATCH'] - Retorna o cabeçalho de correspondência do navegador.
// $_SERVER['HTTP_IF_MODIFIED_SINCE'] - Retorna o cabeçalho de se modificado desde o navegador.

// Exemplos:
//--------------------------------
// nome do script atualmente em execução
echo $_SERVER['PHP_SELF'].'<br>';

// endereço IP do servidor
echo $_SERVER['SERVER_ADDR'].'<br>';

// nome do host do servidor
echo $_SERVER['SERVER_NAME'].'<br>';

// endereço IP do usuário
echo $_SERVER['REMOTE_ADDR'].'<br>';

// informações sobre o sistema do servidor
echo $_SERVER['SERVER_SOFTWARE'].'<br>';

// informações sobre o protocolo usado
echo $_SERVER['SERVER_PROTOCOL'].'<br>';

// informações sobre o método de solicitação
echo $_SERVER['REQUEST_METHOD'].'<br>';

// Pasta raiz da aplicação
echo $_SERVER['DOCUMENT_ROOT'].'<br>';

