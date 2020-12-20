<?php
    session_start();
	
	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)) //dzieki temu od razu jest wyswietlany LOR a nie formularz logowania
	{
		header('Location: lor.php');
		exit(); // powoduje ze caly kod na dole sie nie wykonuje i dzieki temu nie obciaza serwera
	}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>LOR</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href=".css" type="text/css" />
</head>
<body>

  <h1> LOR </h1>
  <a href="rejestracja.php">Rejestracja</a>
  <br /><br />
  
  
  <form action="zaloguj.php" method="post">
  
    Login: <br /> <input type="text" name="login" /> <br />
    Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
    <input type="submit" value="Zaloguj się" />
	
  </form>

<?php
    if(isset($_SESSION['blad'])) echo $_SESSION['blad']; //blad o niepoprawnym loginie lub hasle
?>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>