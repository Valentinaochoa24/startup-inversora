<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo de Contacto - Inversora Era Dorada</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(to right, #08672F, #002024);
            color: #333;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background: #FFF;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #AD7816;
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            background: #AD7816;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background: #C79622;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gracias por contactarnos</h1>
        <p>Estimado(a) {{ $name }},</p>
        <p>Hemos recibido tu mensaje y nos pondremos en contacto contigo lo antes posible. Agradecemos tu interés en Inversora Era Dorada SAS.</p>
        <p>Mientras tanto, si tienes alguna pregunta adicional, no dudes en contactarnos. Estaremos encantados de asistirte.</p>
        <!-- <p>Teléfono: <strong>+1 (123) 456-7890</strong><br> -->
          Correo Electrónico: <strong>servicioalcliente@inverdoradasas.com</strong></p>
          <p>¡Gracias de nuevo por elegirnos!</p>
        <p>Saludos cordiales,</p>
        <p>El equipo de Inversora Era Dorada SAS</p>
        <div class="footer">
            <p>Si deseas visitar nuestro sitio web, haz clic en el siguiente botón:</p>
            <a href="https://inverdoradasas.com/" class="button">Visita nuestro sitio web</a>
        </div>
    </div>
</body>
</html>
