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
          <h1>Données du programme</h1>
        </div>
        <br/>
        <br/>
        <div class="colums">
          <div class="item">
            <label for="name">Titre du film<span>*</span></label>
            <input id="name" type="text" name="titre" required/>
          </div>
          <div class="item">
            <label for="eaddress">Genre<span>*</span></label>
            <input id="eaddress" type="text"   name="genre" required/>
          </div>
          <div class="item">
            <label for="phone">Durée<span>*</span></label>
            <input id="phone" type="tel"   name="duree" required/>
          </div>
          <div class="item">
            <label for="street">Réalisateur<span>*</span></label>
            <input id="street" type="text"   name="realisateur" required/>
          </div>
          <div class="item">
            <label for="city">Langue diffusion<span>*</span></label>
            <input id="city" type="text"   name="langue" required/>
          </div>
          <div class="item">
            <label for="state">Année production<span>*</span></label>
            <input id="state" type="month"   name="annee" required/>
          </div>
          <div class="item">
            <label for="zip">Description<span>*</span></label>
            <textarea id="visit" rows="2"> </textarea>
          </div>
        </div>
        <div class="item">
            <label for="state">Note</label> </br>
            Spectateur <input id="state" type="number"   name="annee" />
            Presse <input id="state" type="number"   name="annee"/>
          </div>
        
        <div class="week">
          <div class="question">
          <label for="state">Horaires<span>*</span></label> </br>
            <label> Jours </label>
            <div class="question-answer">
              <div>
                <input type="radio" value="none" id="radio_3" name="day"/>
                <label for="radio_3" class="radio"><span>Lundi</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_4" name="day"/>
                <label for="radio_4" class="radio"><span>Mardi</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_5" name="day"/>
                <label for="radio_5" class="radio"><span>Mercredi</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_6" name="day"/>
                <label for="radio_6" class="radio"><span>Jeudi</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_7" name="day"/>
                <label for="radio_7" class="radio"><span>Vendredi</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_8" name="day"/>
                <label for="radio_8" class="radio"><span>Samedi</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_9" name="day"/>
                <label for="radio_9" class="radio"><span>Dimanche</span></label>
              </div>
            </div>
          </div>
          <div class="question">
          <div class="item">
            <label for="state">Mois<span>*</span></label>
            <input id="state" type="month"   name="mois" required/>
          </div>
          </div>
        </div>
        <div class="item">
          <label for="visit"> Acteurs </label>
          <textarea id="visit" rows="3"></textarea>
        </div>
       
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>

      </form>
</div>
</body>
</html>