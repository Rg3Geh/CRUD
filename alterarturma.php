<!DOCTYPE html>
<html>
<head>
<title>TODO supply a title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include './conexao.php';
$idTurma = $_POST["idturma"];
$sql = "SELECT * FROM turma WHERE idTurma = '$idTurma'";
$result = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($result);
if ($linhas > 0) {
while ($dados = mysqli_fetch_array($result)) {
$idTurma = $dados["idturma"];
$turma = $dados["turma"];
$periodo = $dados["periodo"];
}
}
?>
<h1>Cadastro de Turma</h1>
<form method="post" action="operacoes.php">
<label>Turma</label>
<input type="text" name="txtTurma" value="<?php echo $turma;?>">
<br>
<label>Período</label>
<select name="txtPeriodo">
<?php echo "<option value='$periodo'>$periodo</option>"; ?>
<option value="Manha">Manhã</option>
<option value="Tarde">Tarde</option>
<option value="Noite">Noite</option>
<option value="Integral">Integral </option>
</select>
<input type="hidden" name="idturma" value="<?php echo $idTurma;?>">
<input type="hidden" name="operacao" value="alterar">
<input type="submit" value="ALTERAR">
</form>
<hr><br><br>
<form method="post" action="consultarturma.php">
<label>Consultar</label>
<input type="text" name="txtConsulta">
<input type="submit" value="Consultar">
</form>
</body>
</html>