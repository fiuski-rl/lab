<?php
	require_once ("conexao.php");
	require_once ("classes/PacienteDB.class.php");
	$pacienteList = PacienteDB::listar($conexao);
	
	foreach ($pacienteList as $value) {

				echo "<table margin='auto' border='1px'>";
				echo "<tr><td>"	. $value->getNome() . "</td>";
				echo "<td>" . $value->getRG() . "</td>";
				echo "<td>" . $value->getCPF() . "</td>";
				echo "<td>". $value->getEmail() . "</td>";
				echo "<td>" . $value->getFone() . "</td>";
				echo "<td>" . $value->getEndereco() . "</td>";
				echo "<td>" . $value->getCep() . "</td>";
				echo "<td>" . $value->getCidade() . "</td>";
				echo "<td>" . $value->getConvenio() . "</td>";
				echo "<td><a href='edit.php?id=". $value->getIdPaciente()."'><button type='button'>Edit</button></a>";
				echo "<a href='delete.php?id=". $value->getIdPaciente()."'><button type='button'>Delete</button></a></td></tr>";
				echo "</table>";
				echo "<tbody>";
				
				}
				echo "</tbody>";
				echo "</table> ";
?>
<html>
	<head>

	</head>
	<body>
		<a class="logout" href="logout.php">Sign Out</a>
	</body>
</html>