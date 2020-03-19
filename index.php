<?php
//Demarer la session

session_start();

//on se connecte à my sql
		 $user="root";
		 $pass="";
		 $server="localhost";
		 $bd="ecole";
		 $con= mysqli_connect($server,$user,$pass,$bd);
		 
//on se connecte à la page
	if(!empty($_GET['page'])&& is_file('controleur/'.$_GET['page'].'.php'))
			{
				include'controleur/'.$_GET['page'].'.php';
			}
	else
			{
				include('vue/gesco.php');
			}

//on ferme my sql
mysqli_close($con);












?>