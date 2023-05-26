<?php

class Ator {
    private $mysql;

    public function __construct($mysql)
    {
        $this->mysql = $mysql;
    }

    public function get_atores(): array {
        $sql_select_cmd = "SELECT nome, insta, img, wiki, imdb FROM elenco";

        $resultado = $this->mysql->query($sql_select_cmd);
        $lista_atores = $resultado->fetch_all(MYSQLI_ASSOC);
        return $lista_atores;
    }

    public function insert_ator($nome, $insta, $img, $wiki, $imdb) {
        $sql_insert_cmd = "INSERT INTO elenco (`nome`, `insta`, `img`, `wiki`, `imdb`) VALUES ('$nome','$insta','$img','$wiki','$imdb')";
        // echo $sql_insert_cmd;
        
        $this->mysql->query($sql_insert_cmd);

    }
}
