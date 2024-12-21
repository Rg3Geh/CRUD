<?php
include './conexao.php';
$operacao = $_POST["operacao"];
if($operacao == "excluir"){
$idTurma = $_POST["idturma"];
$sql = "DELETE FROM turma WHERE idturma = '$idTurma'";
if(mysqli_query($conexao, $sql)){
echo "<script>"
."alert('Registro removido com sucesso!');"
."window.location='consultarturma.php'"
."</script>";
}
}


else if($operacao == "alterar"){
$idTurma = $_POST["idturma"];
$turma = $_POST["txtTurma"];
$periodo = $_POST["txtPeriodo"];
$sql = "UPDATE turma SET turma='$turma', periodo='$periodo' WHERE idTurma = '$idTurma'";
if(mysqli_query($conexao, $sql)){
echo "<script>"
."alert('Alterado com sucesso!');"
. "window.location='consultarturma.php'"
.'</script>';
}
}
?>