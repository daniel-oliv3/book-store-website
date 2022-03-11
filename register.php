<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico"/>
	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <!-- ======= Formulario ======= -->
    <div class="form-container">
        <form action="" meehod="post">
            <input type="text" name="name" placeholder="Digite o seu nome" require class="box">
            <input type="email" name="email" placeholder="Digite seu E-mail" require class="box">
            <input type="password" name="password" placeholder="Digite a sua senha" require class="box">
            <input type="password" name="cpassword" placeholder="Confirme a sua senha" require class="box">
            <select name="user_type">
                <option value="user">Usuário</option>
                <option value="admin">Administrador</option>
            </select>
        </form>
    </div>

	
	<script src="js/script.js"></script>
</body>
</html>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas
    11/03/2022
-->