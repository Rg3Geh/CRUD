<?php
include './conexao.php';
if(isset($_POST["txtConsulta"])){
$consulta = $_POST["txtConsulta"];
}else{
$consulta = "";
}
$sql = "SELECT * FROM turma WHERE turma LIKE '%$consulta%' ";
$result = mysqli_query($conexao, $sql); 
$linhas = mysqli_num_rows($result);
if($linhas > 0){
echo "<table border='1'>"
."<tr>"
."<td>Id</td>"
."<td>Turma</td>"
."<td>Periodo</td>"
."<td colspan='2'>Operacoes</td>"
."</tr>";
while($dados = mysqli_fetch_array($result)){
$idTurma = $dados["idturma"];
$turma = $dados["turma"];
$periodo = $dados["periodo"];
echo
"<tr>"
."<td>$idTurma</td>"
."<td>$turma</td>"
."<td>$periodo</td>"
."<td>"
."<form method='post' action='alterarturma.php'>"
."<input type='hidden' name='idturma' value='$idTurma'>"
."<input type='submit' value='Alterar'>"
."</form>". "</td>"
."<td>"
."<form method='post' action='operacoes.php'>"
."<input type='hidden' name='idturma' value='$idTurma'>" 
."<input type='hidden' name='operacao' value='excluir'>"
."<input type='submit' value='Excluir'>"
."</form>"
."</td>"
."</tr>";
}
echo "</table>";
}else{
echo "<p>Nenhuma turma encontrada. </p>";
}
?>
