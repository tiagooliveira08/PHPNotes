
<?php

require_once("config.php");


if(isset($_SESSION["nome"])) //verificando se a variavel foi iniciada;
	echo $_SESSION["nome"];

echo "<br />".session_id(); // id unico da sessão;

session_regenerate_id(); // gera novamente um id de sessão;

session_destroy(); // session_destroy ele limpa as variáveis e retira o usuario diferente do unset que apenas limpa a variável;

session_unset(); // caso passe por parametro uma variavel ele apenas apaga aquela variavel, caso deixe sem parametros ele apaga TODAS as variáveis;



?>