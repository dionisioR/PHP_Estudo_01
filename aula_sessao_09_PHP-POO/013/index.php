<?php
/*
COMO USAR NAMESPACE E QUAL A SUA UTILIDADE

O conceito de Namespace é muito importante na programação oreintada a objetos.
Permitem resolver dois problemas:
- Organizar melhor as classes permitindo agrupá-las num 'espaço'.
- Evitar conflitos de nomes entre classes.
- Permitem que existam dentro do mesmo projeto classes com o mesmo nome, mas em namespaces diferentes.

Por exemplo, podes ter uma classe que definiste no teu código e juntar ao teu projeto outra classe criada por outro programandor.
Verifica que ao final ambas as classes tem o mesmo nome.
Não necessita alterar o nome das classes. Basta que estejam em Namespaces diferentes e tens o problema resolvido.

Usar namespaces dentro dos projetos de média e larga escala é uma forma de manter o código mais bem organizado.

A expressão NAMESPACE deve ser sempre a primeira declaração no topo do script
*/

namespace classe_principal;
// vamos criar uma classe dentro deste namespace
class Matematica{
    public function adicionar($a, $b) {
        return $a + $b;
    }

    public function subtrair($a, $b) {
        return $a - $b;
    }
}