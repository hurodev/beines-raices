<?php 

require '../../includes/config/databases.php';

$db = conectarDB();


//arreglo con mensaje de error

$errores = [];

// consutar vendedores

$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db,$consulta);



//ejecutar informacion depues de enviar formulario
if($_SERVER ["REQUEST_METHOD"] === 'POST'){

/* echo "<pre>";
var_dump($_POST);
echo "</pre>"; */

$titulo = $_POST['titulo'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$habitaciones = $_POST['habitaciones'];
$wc = $_POST['wc'];
$estacionamiento = $_POST['estacionamiento'];
$vendedor = $_POST ['vendedor'];

if(!$titulo){
    $errores[] = "debes de añadir un titulo";
}
if(!$precio){
    $errores[] = "debes de añadir precio";
}
if(strlen($descripcion) < 20){
    $errores[] = "debes de añadir una descripcion mas completa";
}
if(!$habitaciones){
    $errores[] = "debes de añadir cantidad de habitaciones";
}
if(!$wc){
    $errores[] = "debes de añadir cantidad de ws";
}
if(!$estacionamiento){
    $errores[] = "debes de añadir cantidad de estacionamientos";
}
if(!$vendedor){
    $errores[] = "Elige un vendedor";
}

/* echo "<pre>";
var_dump($errores);
echo "</pre>"; */



 //revisar el arreglo de errores este vacio

 if(empty($errores)){


    //insertar base de datos

$query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId)
VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedor')";

    $resultado = mysqli_query($db,$query);

    if($resultado){
        echo "Insertado correctamente";
    };

    echo "<pre>";
    var_dump($query);
    echo "</pre>";



};

}









require '../../includes/funciones.php';


 incluirTemplate('header');

?>


<main class="contenedor seccion">
    <h1>Crear</h1>

    

    <?php foreach($errores as $error ): ?>
        <div class="error alerta">
            
            <?php echo $error; ?>

        </div>
        
    <?php endforeach; ?>
    


   

    <a href="/admin/propiedades/index.php" class="boton boton-verde">Volver</a>

    


    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">

    <fieldset>
        <legend>Informacion General</legend>

        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" placeholder="Titulo de propiedad" value="<?php echo $titulo; ?>"  >

        <label for="precio">Precio</label>
        <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" value="<?php echo $precio; ?>" >
    
        <label for="imagen">Imagen</label>
        <input type="file" id="imagen" name="imagen" accept="image/jpeg image/png"  >



        <label for="descripcion">Descripcion</label>    
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" > <?php echo $descripcion; ?></textarea>
    </fieldset>
    

    <fieldset>
        <legend>Informacion de la Propiedad</legend>

        <label for="habitaciones">Habitaciones</label>
        <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

        <label for="wc">wc</label>
        <input type="number" id="wc" name="wc" placeholder="Ej: 2" min="1" max="9" value="<?php echo $wc; ?>">

        <label for="estacionamiento">Estacianamiento</label>
        <input type="number" id="estacionamiento" name="estacionamiento"  placeholder="Ej: 2" min="1" max="9" value="<?php echo $estacionamiento; ?>">


    </fieldset>


    <fieldset>
        <legend>Vendedor</legend>

        <select name="vendedor">

            <option value="">--Seleccione un vendedor--</option>
    
            <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>
                <option value="<?php echo $vendedor['id'];?>"><?php echo $vendedor['nombre']." ".$vendedor['apellido'] ?></option>
            <?php endwhile; ?>

        </select>



    </fieldset>

    <input type="submit" value="crear propiedad" class="boton boton-verde">

    
    
    </form>

    

</main>


<?php 


 incluirTemplate('footer');

?>