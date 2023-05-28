<?php

class Ator {
    private $mysql;

    public function __construct($mysql)
    {
        $this->mysql = $mysql;
    }

    public function get_atores(): array {
        $sql_select_cmd = "SELECT id, nome, insta, img, wiki, imdb FROM elenco";

        $resultado = $this->mysql->query($sql_select_cmd);
        $lista_atores = $resultado->fetch_all(MYSQLI_ASSOC);
        return $lista_atores;
    }

    public function get_ator_by_id($id): array {
        $sql_select_cmd = "SELECT nome, insta, img, wiki, imdb FROM elenco WHERE id='$id'";
        $resposta = $this->mysql->query($sql_select_cmd);

        $ator = $resposta->fetch_all(MYSQLI_ASSOC);

        return $ator[0];
    }

    public function insert_ator($nome, $insta, $img, $wiki, $imdb) {
        $sql_insert_cmd = "INSERT INTO elenco (`nome`, `insta`, `img`, `wiki`, `imdb`) VALUES ('$nome','$insta','$img','$wiki','$imdb')";
        // echo $sql_insert_cmd;
        
        $this->mysql->query($sql_insert_cmd);

    }

    public function update_ator($target_id, $nome, $insta, $img, $wiki, $imdb) {
        $sql_update_cmd = "UPDATE elenco SET nome = '$nome', insta = '$insta', img = '$img', wiki = '$wiki', imdb = '$imdb' WHERE id = $target_id";
        $this->mysql->query($sql_update_cmd);
    }

}
