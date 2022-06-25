<?php 

require '../../www/bienesraices/includes/funciones.php';


 incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Contacto</h1>

    <picture>
        <source srcset="build/img/destacada3.webp" type="imege/webp">
        <source srcset="build/img/destacada3.jpg" type="imege/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="iamgen-contacto">
    </picture>

    <h2>Llene el formulario de contacto</h2>

    <form class="formulario">
        <fieldset>
            <legend>Informacion personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu Nombre" id="nombre">

            <label for="email">Email</label>
            <input type="email" placeholder="Tu Email" id="email">


            <label for="telefono">Telefono</label>
            <input type="tel" placeholder="Tu Numero de telefono" id="telefono">

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" placeholder="escribe tu mensaje" cols="30" rows="10"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion sobre la propiedad</legend>

            <label for="opciones">Vende o Compra</label>
            <select name="" id="opciones">
                <option value="" disibled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" placeholder="Tu Precio o Presupuesto"  id="presupuesto">

        </fieldset>

            <fieldset> 
            <legend>Informacion sobre la propiedad</legend>
            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input class="boton-radio"  name="contacto" type="radio" value="telefono" id="contactar-telefono">

                <label for="contactar-email">Email</label>
                <input class="boton-radio"  name="contacto" type="radio" value="email" id="contactar-email">
            </div>

            <p>Si elegio telefono, elija fecha y hora para ser contactado</p>

            <label for="date">Fecha</label>
            <input type="date"  id="date">


            <label for="hora">Hora</label>
            <input type="time"   id="hora" min="09:00" max="19:00">

        


        
            
        </fieldset>


        <input type="submit" value="Enviar" class="boton-verde">




    </form>

</main>


<form action=""></form>













<?php 


 incluirTemplate('footer');

?>