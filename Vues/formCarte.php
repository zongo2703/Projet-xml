
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<div class="testbox"> 

<!-- ---------------------------------------------- -->
      <form action="formMenu.php" method ="POST">
        <div class="banner">
          <h1> Données de la carte </h1>
        </div>
        <br/>
        <br/>
        <div class="colums">

        <?php 
          $nombrePlats = $_POST["nombrePlats"];
          $i = 0;
          while($i < $nombrePlats) { 
        ?>
        
          <div class="item">
            <label for="name">Nom du plat<span>*</span></label>
            <input id="name" type="text" name="nomPlat<?= $i ?> " required/>
          </div>
          <div class="item">
            <label for="phone">Prix du plat<span>*</span></label>
            <input id="phone" type="number"   name="prixPlat<?= $i ?>" required/>
          </div> 
          <div class="item">
          <p>Indication du plat</p>
          <select>
            <option selected value="" disabled selected></option>
            <option value="b" >Entrée</option>
            <option value="ch">Dessert</option>
            <option value="v">Plat</option>
            <option value="n">Fromage</option>
          </select>
        </div>
          <div class="item">
            <label for="zip">Description plat</label>
            <textarea id="visit" rows="2"> </textarea>
          </div>
          
        <?php 
           $i++;
          }
        ?>
        
        <div class="btn-block">
          <button type="submit" href="/" name="ok">Submit</button>
        </div> 
      </form>
</div>
</body>
</html>