<?php 

require '../../www/bienesraices/includes/funciones.php';


 incluirTemplate('header');

?>


<main class="contenedor seccion contenido-centrado ">
    <h1>Casa de lujo en el lago</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de casa">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>

        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p>4</p>
            </li>

        </ul>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit 
            itaque sequi laborum adipisci autem ea. Voluptate reprehenderit 
            iste Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercit
            ationem voluptatem laborum, natus quo harum voluptas mollitia nulla r
            atione dolor reiciendis est doloribus voluptate
             impedit nihil error iure totam, explicabo optio.
            eius unde! Est distinctio nesciunt veniam, 
            iure eligendi minima deleniti! Distinctio, tempore?</p>





    </div>


</main>





<?php 


 incluirTemplate('footer');

?>
