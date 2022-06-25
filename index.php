<?php 

declare(strict_types = 1);

require '../../www/bienesraices/includes/funciones.php';


 incluirTemplate('header',$inicio=true);

?>


<main class="contenedor seccion">
    <h1>Ventas de Casas y Departamentos</h1>
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



</main>

<section class="seccion contenedor">

    <h2>Casas y departamentos en ventas</h2>

    <div class="contenedor-anuncios">

        <div class="anuncio"><!-- anuncio 1 -->
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img loading = "lazy" src="build/img/anuncio1.jpg" alt="anuncio" >
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa de lujo en el lago</h3>
                <p>Casa de lujo en el lago con excelente vista , decansa de la ciudad</p>
                <p class="precio">$3,000,000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono"  loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
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


                <div class="boton-amarillo">
                    <a href="/index.php">VER PROPIEDAD</a>
                </div>

            </div>
        </div>




        <div class="anuncio"><!-- anuncio 2 -->
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img loading = "lazy" src="build/img/anuncio1.jpg" alt="anuncio" >
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa moderna de lujo</h3>
                <p>Casa de lujo en el lago con excelente vista , decansa de la ciudad</p>
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


                <div class="boton-amarillo">
                    <a href="/index.php">VER PROPIEDAD</a>
                </div>

            </div>
        </div>



        <div class="anuncio"><!-- anuncio 3 -->
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img loading = "lazy" src="build/img/anuncio1.jpg" alt="anuncio" >
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa con alberca </h3>
                <p>Casa de lujo en el lago con excelente vista , decansa de la ciudad</p>
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


                <div class="boton-amarillo">
                    <a href="/index.php">VER PROPIEDAD</a>
                </div>

            </div>
        </div>



    </div><!-- contenedor anuncios -->

    <div class="boton-ala-derecha">
        <a href="anuncios.php" class="boton-verde">Ver todas</a>
    </div>

</section>


<section class="imagen-contactar">

    <h2>encuentra la casa de tus sueños</h2>
    <p>Llena nuestro formulario de contacto, y un asesor te llamara para mas informacion</p>
    <a href="contacto.php" class=" boton-amarillo">CONTACTANOS</a>


</section>

<div class="contenedor seccion seccion-inferior">
    <section>
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog"> <!-- blog 1 -->
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type= "imagen/webp">
                    <source srcset="build/img/blog1.jpg" type= "imagen/jpeg">
                    <img  loading= "lazy"src="build/img/blog1.jpg" alt="entrada blog">
                    
                </picture>

            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito: <span>20/10/2021</span>por: <span>Admin</span></p>
                    
                    <p>
                        Consejos para construir una terraza en el techo de tu casa
                    </p>
               
                </a>

            </div>

        </article>



        <article class="entrada-blog"> <!-- blog 2 -->
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type= "imagen/webp">
                    <source srcset="build/img/blog2.jpg" type= "imagen/jpeg">
                    <img  loading= "lazy"src="build/img/blog2.jpg" alt="entrada blog 2">
                    
                </picture>

            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito:<span>20/10/2021</span>por:<span>Admin</span></p>
                    
                    <p>
                        Maximiza los espacion de tu cosa con decoracion moderna
                    </p>
               
                </a>

            </div>

        </article>
    </section>



<section class="testimoniales">

    <h3>Testimoniales</h3>

    <div class="testimonial">
        <blockquote>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ad necessitatibus iure fugiat in 
            quasi culpa doloremque saepe repellat molestias. 
            
        </blockquote>
        <p>Hugo Romero</p>

    </div>





</section>


</div>




<?php 


 incluirTemplate('footer');

?>