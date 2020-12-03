<!DOCTYPE html>
<html>
<!-- No olvides guardar cambios -->
<head>
   <meta charset="utf-8"> <!--Ese comando me convierte visible los acentos para todo sistema operativo-->
   <!--Elaborado por Joelvi Martinez CI: 26490183 -->
<title> Video Juegos </title>
</head>

<h1>Ventajas y desventajas de los videojuegos</h1>
<body bgcolor="BDE798">
  <?php require 'partials/header.php' ?>
  <?php
  echo "Hola: " . $_SESSION["usuario"] . "<br><br>";

   ?>
  <?php
session_start();

if(!isset($_SESSION["usuario"])){

header("Location:index.php");

}
   ?>
<section>
	<img src="Imagenes/Imagen1.png" width="600" height="440" >

<h3>Tu hijo tiene videojuegos? Este tipo de tecnolog&iacutea es muy común en tu casa y en la mayor&iacutea de los hogares.<br />

Pero ¿te has preguntado alguna vez qu&eacute aportes positivos y negativos le dan a tu hijo? .</h2>

<h2> <mark> Desventajas de los videojuegos </mark> </h2>
<p>Existen m&uacute;ltiples beneficios que tiene el uso de los videojuegos pero
también existen desventajas. Mostrando como resultado
la necesidad de un equilibrio en el manejo de este tipo de tecnología. </p>

<h2>Disminuci&oacuten de activad f&iacutesica </h3>
<p> Una de las principales cr&iacuteticas que existe es que, por el uso constante de las
tecnolog&iacuteas y principalmente de los videojuegos,se ha disminuido la actividad f&iacutesica de las personas. <br />Los autores Leyva-Fr&oacutemeta et al. (2018)
indican que se ha creado una insuficiencia en la realización de actividades de ocio que se hagan de manera activa</p>

</section>

<h4>Algunos de los contras de esta actividad son: </h4>
<p>
<ul>
<li>Violencia desmedida, lenguaje vulgar y personajes hipersexuales.</li>
<li>Ansiedad y estr&eacutes.</li>
<li>Sobrepeso.</li>
<li>Riesgos en internet.</li>
</ul>
 </p>

<h2> <mark> Ventajas de los video juegos</mark> </h2>

<p>El uso de videojuegos también posee gran utilidad en el aprendizaje.<br ->
 Entre las ventajas que pueden presentar en este aspecto, Martín y Vílchez (2017)</p>

<p> Con respecto a los aspectos positivos se pueden citar: </p>

<ul>
	<li>Concentración.</li>
<li>Destreza visual.</li>
<li>Ganar socialización.</li>
<li>Hay juegos que implican actividad física.</li>
<li>Coordinación ojos y manos</li>
</ul>
</p>

<aside>
<p>Asimismo, se ha encontrado que pueden ser utilizados para la rehabilitación neuropsicológica de la atención en niños.<br ->
Igualmente,colaboran en la mejora del funcionamiento cognitivo de los adultos mayores con o sin alguna enfermedad psíquica.<br ->
Mientras tanto, Ray en 2017  encontraron que el entrenamiento en videojuegos en adultos mayores ayuda en el mantenimiento y mejora de la cognición.<br ->
 Sobre todo, cuando se realizaron entrenamientos en juegos de estrategia,<strong> teniendo un mayor progreso en el funcionamiento cognitivo de los adultos mayores.</strong> </p>
 </aside>

<h2> Conclusión </h2>

<p>Por lo tanto, es importante decir que el avance de la tecnología ha creado una nueva manera de desarrollar los ámbitos de la vida de las personas.<br ->
 En esta perspectiva están incluidos los videojuegos, que <strong> han llegado a cambiar tanto<br ->
 las actividades de entretenimiento, como la enseñanza y la rehabilitación.</strong> </p>


<footer>Todo esto fue realizado con el fin del cumplimiento de una actividad de la mataeria <i>Programación no númerica II</i><br ->
Instituto Universitario politécnico Santiago Mariño <br ->
Realizado por Joelvi Martinez <br ->
JoelviMartinez59@gmail.com

</footer>

</body>

</html>
