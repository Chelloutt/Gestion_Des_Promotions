<?php

require_once "../data-access/promotionDAL.php";
    
    $promotionDAL = new promotionDAl();

if(!empty($_POST)){
	$promotion = new promotion();
	$promotion->setName($_POST['name']);
	$promotionDAL->addPromotion($promotion);

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Ajouter promotion</title>
</head>
<body>
	<header>
		<h1>Ajouter promotion</h1>
	</header>
<form action="" method="POST">
Nom de promotion: <input type="text" name="name" Autocomplete ='off' >                                                         
   
<button type="submit">Envoyer</button> 
<input type="search" name="search" id ="search" placeholder ="search">

</form> <br><br><br>

<table id="myTable">
  <tr>
    <th>Number</th>
    <th>promotion</th>
    <th>actions</th>
  </tr>
  <?php
  $data =$promotionDAL->affichage();
  $Number = 1;
  foreach($data as $value){
   ?>
  <tr>
   <td> <?php echo $Number++;  ?></td>
   <td id="item"> <?php echo $value ['names']; ?></td>
   <td>
        <a href="modifier.php?editid=<?php echo $value['id'];?>" id= "supprimer">modifier</a>
        <a href="delete.php?deleteid=<?php echo $value['id'];?>" onclick ="return confirm('are you sure you wante delete this promotion')" id= "modifier">supprimer</a>
   </td>
  </tr>
<?php
};
?> 
</table>



<script src="main.js"></script>
</body>
</html>
