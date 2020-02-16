<?php
    class MrJud {

        function __construct() {
            
        }

        public function ObtenerListadoImagenes() {
            $respuesta['status']  = 'error';
            $respuesta['mensaje'] = 'error';

            # Definir ruta de imagenes
            $url = 'imagenes/';

            # Controlar excepciones
            try {
                # Obtener listado img
                $ObtenerListaImagenes = scandir($url);
                $respuesta['imagenes'] = $ObtenerListaImagenes;
            } catch (Exception $e) {
                $respuesta['mensaje'] = $e;
            }

            return $respuesta;
        }
        
    }
    

?>