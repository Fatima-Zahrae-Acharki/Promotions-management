<?php
require_once "../data-access/promotionDAL.php";

$promotionDAL = new PromotionDAL();
if(!empty ($POST)){
    $promotion = new promotion();
    $promotion->setName($POST('name'));
    $promotionDal->addPromotion($promotion);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
	<title>Ajouter promotion</title>
</head>
<body>
	<header>
		<h1>ADD PROMOTION</h1>
	</header>
<form action="" method="POST">
Name of the promotion: <input type="text" name="name" >                                                          
   
<button type="submit">SUBMIT</button>
</form>
</body>
</html>
