<?php
$turma = $_POST["txtTurma"];
$periodo = $_POST["txtPeriodo"];
include './conexao.php';
$sql = "INSERT INTO turma VALUES(null, '$turma', '$periodo')"; mysqli_query($conexao, $sql);