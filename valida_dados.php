<?php

function validar_dados($var) {
    return htmlspecialchars(stripslashes(trim($var)));
}