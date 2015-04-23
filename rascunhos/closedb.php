<?php 

	//TÍTULO: closedb.php
	//FINALIDADE: fechar banco de dados a partir do recebimento do index de conexão ($conn)

	closedb($conn);

	function closedb($conn){

		mysqli_close($conn);

	}


?>