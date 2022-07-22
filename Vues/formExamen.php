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
      <form action="/" method ="">
        <div class="banner">
          <h1>Données de l'examen</h1>
        </div>
        <br/>
        <br/>
        <div class="colums">
          <div class="item">
            <label for="name">Titre<span>*</span></label>
            <input id="name" type="text" name="titre" required/>
          </div>
          <div class="item">
            <label for="street">Date<span>*</span></label>
            <input id="street" type="month"   name="date" required/>
        </div>
          <div class="item">
            <label for="zip">Description<span>*</span></label>
            <textarea id="visit" rows="2"> </textarea>
          </div>
        </div>
        <label for="zip">Liste questions<span>*</span></label>

       <?php 
         $i = 1;
         while($i <= 11) {
       ?>
           <div class="item">
                <label for="name">Question <?= $i ?> <span>*</span></label>
                <input id="name" type="text" name="question" required/>
           </div>

        <?php $i++; } ?>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
</div>
</body>
</html>