<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a Nuestro Proyecto</title>
    <h1 style="margin: 0;">¡Bienvenido Papi, {{ $nombre }}!</h1>

</head>
<body style="margin:0; padding:0; font-family: 'Helvetica', sans-serif; background-color:#f4f4f4;">
    <table align="center" width="100%" cellpadding="0" cellspacing="0" style="max-width:600px; background-color:#ffffff; margin-top: 30px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
        <tr>
            <td style="background-color: #1e3a8a; color: white; padding: 30px; text-align: center; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                <h1 style="margin: 0;">¡Bienvenido, {{ $nombre }}!</h1>
            </td>
        </tr>
        <tr>
            <td style="padding: 30px; color: #333;">
                <p style="font-size: 18px;">Gracias por unirte a nuestro sistema. Estamos encantados de tenerte con nosotros.</p>
                <p style="font-size: 16px;">Desde este momento, podrás acceder a todas nuestras funciones y recibirás noticias y beneficios exclusivos.</p>
                <p style="font-size: 16px;">Si tienes alguna duda, no dudes en contactarnos.</p>

                <div style="margin-top: 30px; text-align: center;">
                    <a href="https://tusitio.com/login" style="background-color: #1e3a8a; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold;">Iniciar sesión</a>
                </div>
            </td>
        </tr>
        <tr>
            <td style="background-color: #e5e7eb; text-align: center; padding: 20px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; font-size: 14px; color: #555;">
                &copy; {{ date('Y') }} Tu Proyecto - Todos los derechos reservados.
            </td>
        </tr>
    </table>
</body>
</html>
