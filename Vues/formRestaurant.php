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
      <form action="formCarte.php" method ="POST">
        <div class="banner">
          <h1>Données du Restaurant</h1>
        </div>
        <br/>
        <br/>
        <div class="colums">
          <div class="item">
            <label for="name">Nom du restaurant<span>*</span></label>
            <input id="name" type="text" name="nomRestaurant" required/>
          </div>
          <div class="item">
            <label for="eaddress">Adresse<span>*</span></label>
            <input id="eaddress" type="text"   name="adresse" required/>
          </div>
          <div class="item">
            <label for="phone">Nom restaurateur<span>*</span></label>
            <input id="phone" type="tel"   name="nomRestaurateur" required/>
          </div> <hr>
          <div class="item">
            <label for="zip">Description restaurant</label>
            <textarea id="visit" rows="2"> </textarea>
            <input id="visit" type="file" name ="descriptionRestaurant" /> 
          </div>
          <div class="item">
            <label for="zip">Carte<span>*</span></label> <br>
           Nombre de plats <input id="phone" type="number"   name="nombrePlats" required/>
          </div>
        </div>
        <div class="btn-block">
          <button type="submit" href="/" name="ok">Submit</button>
        </div> 
      </form>
</div>
</body>
</html>