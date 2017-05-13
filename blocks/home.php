<style media="screen">

/*General style*/

body {
  background-image: url(images/backgrounds/background.png);
  background-size: cover;
}

div.row {
  margin-bottom: 0;
}

img.qvic {
  width: 180px;
  height: auto;
  position: fixed;
  bottom: 0;
  right: 4.5%;
}

/*Catalogo*/

div.grid-img {
  margin: 20px 10px;
  padding: 15px 0;
  background-color:rgba(0, 0, 0,0.8);
  border-radius: 10px;
}

div.grid-img img.materialboxed.initialized {
  height: 160px;
  width: 160px;
  display: inline-block;
}

div.material-placeholder {
  display: inline-block;
}

#materialbox-overlay {
  background-color: rgba(41, 41, 41,0.8);
}


/*Formulario*/

div.formulario {
  width: 40%;
  background-color: rgba(0, 0, 0,0.8);
  border-radius: 10px;
  position: fixed;
  margin-top: 2%;
  right: 5%;
}

div.formulario h2 {
  font-size: 1.5rem;
  padding: 15px;
}

.input-field input[type=text]:focus {
  border-bottom: 1px solid #fdc92a;
  box-shadow: 0 1px 0 0 #fdc92a;
}

.input-field input[type=email]:focus {
  border-bottom: 1px solid #fdc92a;
  box-shadow: 0 1px 0 0 #fdc92a;
}

.input-field input[type=tel]:focus {
  border-bottom: 1px solid #fdc92a;
  box-shadow: 0 1px 0 0 #fdc92a;
}

 label {
  color: white;
}

.input-field .prefix.active {
  color: white;
}

button.btn {
  background-color: #fdc92a;
  color: black;
  margin: 20px 0 30px 0;
}

button.btn:hover {
  background-color: rgba(252, 201, 42,0.8);
}

@media and screen (max-width:480px;){

}

</style>


<div class="row main-section">
  <div class="col l6 s12">
      <div class="center grid-img">
        <img class="materialboxed" src="images/products/motivation_inneradductor.jpg" alt="">
        <img class="materialboxed" src="images/products/Motivation_LatPullDown.jpg" alt="">
        <img class="materialboxed" src="images/products/Motivation_LegExtension.jpg" alt="">
        <img class="materialboxed" src="images/products/Rough_ChestPress.jpg" alt="">
        <img class="materialboxed" src="images/products/rough_leg.jpg" alt="">
        <img class="materialboxed" src="images/products/Rough_StandingLegExtension.jpg" alt="">
        <img class="materialboxed" src="images/products/Surpass_ChestPress.jpg" alt="">
        <img class="materialboxed" src="images/products/Surpass_LegPress.jpg" alt="">
        <img class="materialboxed" src="images/products/Surpass_Pecfly.jpg" alt="">
      </div>
  </div>

  <div class="col l6 s12">
    <div class="formulario fixed">
      <h2 class="center white-text">¡Déjanos tus datos y un asesor se pondrá en contacto contigo!</h2>
      <div class="row">
        <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="first_name" type="text" class="validate">
          <label class="active" for="first_name">¿Cúal es tu nombre?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label class="active" for="email">¿Cúal es tu email?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="tel" type="tel" class="validate">
          <label class="active" for="tel">¡Pásanos tu telefono!</label>
        </div>
      </div>
      <div class="row center">
        <button class="btn waves-effect waves-light" type="submit" name="action">¡Comienza tu gimnasio ahora!
          <i class="material-icons right">send</i>
        </button>
      </div>
      </form>
    </div>
    </div>

  </div>

  <img src="images/brand/byqvic.png" class="qvic hide-on-small-only"alt="">
</div>




<script type="text/javascript">

$("html").dblclick(function(){
    location.reload(true);
});

$(document).ready(function(){
  $('.materialboxed').materialbox();
});


</script>
