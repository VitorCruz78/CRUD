<?php 
    // Aspas duplas são interpoladas (como se fosse template string);
    // Aspas simples não são interpoladas;

    const CURSO = "PHP";
    $nome = "Vitor";
    $sobrenome = "Luiz \u{1F596}";
    echo "$nome $sobrenome";
    echo "Estou fazendo o curso de". CURSO;
    echo "Estamos no ano de ". date('Y');

    // $nome = "Gustavo";
    // $sobrenome = "Guanabara";
    // $apelido = "Gafanhoto";
    // echo "$nome \"$apelido\" $sobrenome";
  
?>