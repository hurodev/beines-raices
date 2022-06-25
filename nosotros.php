<?php 

require '../../www/bienesraices/includes/funciones.php';


 incluirTemplate('header');

?>

<main class="contenedor seccion">


<h2>Conoce Sobre Nosotros</h2>

<div class="contenido-nosotros">

    <div clas="imagen-nosotros">
        <picture>
            <source srcset="../bienesraices/build/img/nosotros.webp" alt="nosotros-webp">
            <source srcset="../bienesraices/build/img/nosotros.jpg" alt="nosotrosjpg">
            <img loading="lazy"    src="../bienesraices/build/img/nosotros.jpg" alt="Sobre nosotros">
        </picture>
    </div>


    <div class="texto-nosotros">

    <blockquote>
    25 años de experiencia
    </blockquote>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic odit vitae 
       quibusdam quidem at tempore maiores ut, inventore perferendis quia, harum dicta nostrum iste illo 
       ea ipsum magni doloremque aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Labore inventore ipsa incidunt eius eaque rem ad praesentium distinctio iste necessitatibus. 
       Laboriosam quae voluptas nihil perferendis consequuntur voluptatibus temporibus alias itaque?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic odit vitae 
       quibusdam quidem at tempore maiores ut, inventore perferendis quia, harum dicta nostrum iste illo 
       ea ipsum magni doloremque aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Labore inventore ipsa incidunt eius eaque rem ad praesentium distinctio iste necessitatibus. 
       Laboriosam quae voluptas nihil perferendis consequuntur voluptatibus temporibus alias itaque?</p>

    </div>

</div>




<section class="contenedor seccion">
    <h1>Mas sobre nosotros</h1>
    <div class="iconos-nosotros">
        
        <div class="icono">
            <img src="build/img/icono1.svg" alt="icono de seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate aspernatur hic enim ad soluta officia neque, non dignissimos officiis illum iusto aliquid eos est sint tenetur ipsam vel accusamus at.</p>
        </div>

        
        <div class="icono">
            <img src="build/img/icono2.svg" alt="icono de precio" loading="lazy">
            <h3>precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate aspernatur hic enim ad soluta officia neque, non dignissimos officiis illum iusto aliquid eos est sint tenetur ipsam vel accusamus at.</p>
        </div>
        
        
        <div class="icono">
            <img src="build/img/icono3.svg" alt="icono de tiempo" loading="lazy">
            <h3>A tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate aspernatur hic enim ad soluta officia neque, non dignissimos officiis illum iusto aliquid eos est sint tenetur ipsam vel accusamus at.</p>
        </div>
        
    </div>

</section>

</main>













<?php 


 incluirTemplate('footer');

?>