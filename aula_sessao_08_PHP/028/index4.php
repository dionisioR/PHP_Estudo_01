<?php
// Podemos criar pasta de forma recursiva [uma pasta dentro de outra]

if(file_exists(__DIR__ . '/alfa/beta')){
    echo "Pasta existe";
}else{
    mkdir(__DIR__ . '/alfa/beta', recursive: true);
}
