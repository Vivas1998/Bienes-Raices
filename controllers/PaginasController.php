<?php

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {
    public static function index(Router $router) {
        
        $propiedades = Propiedad::get(3);

        $router->render('paginas/index', [
            'propiedades' => $propiedades,
            'inicio' => true
        ]);
    }
    public static function nosotros(Router $router) {
        
        $router->render('paginas/nosotros');
    }
    public static function propiedades(Router $router) {
        
        $propiedades = Propiedad::all();

        $router->render('paginas/propiedades', [
            'propiedades' => $propiedades
        ]);
    }
    public static function propiedad(Router $router) {
        
        $id = validarORedireccionar('/propiedades');

        $propiedad = Propiedad::find($id);
        $router->render('paginas/propiedad', [
            'propiedad' => $propiedad
        ]);
    }
    public static function blog(Router $router) {
        
        $router->render('paginas/blog');
    }
    public static function entrada(Router $router) {
        
        $router->render('paginas/entrada');
    }
    public static function contacto(Router $router) {
        
        $mensaje = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $respuestas = $_POST['contacto'];

            // Crear objeto de PHPMailer
            $mail = new PHPMailer();

            //Configurar SMTP
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '3728a367d71ced';
            $mail->Password = '0e495ba86523ad';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            // Configurar el contenido del Email
            $mail->setFrom('admin@bienesraices.com'); // Quien lo envia
            $mail->addAddress('admin@bienesraices.com', 'BienesRaices.com'); // Quien recibe el email
            $mail->Subject = 'Tienes un nuevo mensaje';

            // Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido = '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje</p>';
            $contenido .= '<p>Nombre: ' . $respuestas['nombre'] .'</p>';
            

            // Enviar de forma condicional de email o telefono

            if($respuestas['contacto'] === 'telefono') {
                $contenido .= '<p>Eligio ser contactado por telefono </p>';
                $contenido .= '<p>Telefono: ' . $respuestas['telefono'] .'</p>';
                $contenido .= '<p>Fecha de contacto: ' . $respuestas['fecha'] . ' sobre las ' .  $respuestas['hora']. '</p>';
            }else {
                $contenido .= '<p>Eligio ser contactado por email </p>';
                $contenido .= '<p>Email: ' . $respuestas['email'] .'</p>';
            }

            
            $contenido .= '<p>Mensaje: ' . $respuestas['mensaje'] .'</p>';
            $contenido .= '<p>Accion: ' . $respuestas['tipo'] .'</p>';
            $contenido .= '<p>Presupuesto: ' . $respuestas['precio'] .'€</p>';
            $contenido .= '</html>';
            
            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es un mensaje alternativo sin HTML';

            // Enviar el email
            if($mail->send()) {
                $mensaje = 'Mensaje enviado correctamente';
            }
            else {
                $mensaje = 'Mensaje no enviado';
            }
        }

        $router->render('paginas/contacto', [
            'mensaje' => $mensaje
        ]);
    }
}
