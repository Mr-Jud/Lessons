<?php require_once 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once './incluidos/info_head.php'; ?>
    <title>Inicio | <?php echo TITULO_SITIO; ?></title>
</head>
<body>
    <article id="web_grid">
        <!-- Empieza header web -->
        <header class="head_grid">
            <div class="titulo_web animated fadeInDownShort go">
                Mr. Jud
            </div>
            <div class="subtitulo_web animated fadeInUpShort go">
                ¡Una imagen dice más que mil palabras!
            </div>
        </header>
        <!-- Termina header web -->

        <!-- Empieza contenedor web -->
        <main class="main_grid">
            <?php
                # Ejecutar funcion desde clase Mr. Jud
                $ListadoImg = $MrJud->ObtenerListadoImagenes()['imagenes'];
                $contarImg  = count($ListadoImg);
                
                # Comenzar desde i = 2
                for ($i=2; $i < $contarImg; $i++) { 
                    $imagenActual = $ListadoImg[$i];
                    # Conocer tipo de archivo
                    $separarNombre = explode('.', $imagenActual);
                    $tipoArchivo = strtolower($separarNombre[count($separarNombre)-1]);
                    switch ($tipoArchivo) {
                        case 'mp4':
                            $boxArchivo = '<video src="./imagenes/'.$imagenActual.'" autoplay muted loop></video>';
                            break;

                        case 'jpg':
                        case 'png':
                        case 'gif':
                            $boxArchivo = '<img src="./imagenes/'.$imagenActual.'" alt="'.$imagenActual.'">';
                            break;
                    }
                    echo '<div class="grid_item animated fadeInUpShort go">
                        <figure class="img_grid">
                            '.$boxArchivo.'
                        </figure>
                    </div>';
                }
            ?>
        </main>
        <!-- Termina contenedor web -->

        <!-- Empieza pie web -->
        <footer class="pie_grid">
            <div class="subtitulo_foot txt_left animated fadeInUpShort go">
                Mr. Jud &copy; - Todos los derechos reservados.
            </div>
        </footer>
        <!-- Termina pie web -->

    </article>
</body>
</html>