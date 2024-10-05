<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato de Prestación de Servicios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            padding: 20px;
            line-height: 1.6;
        }
        .header, .footer {
            text-align: center;
            font-weight: bold;
        }
        .content {
            margin-top: 20px;
        }
        .content p {
            margin: 5px 0;
        }
        .signature {
            margin-top: 50px;
        }
        .signature div {
            display: inline-block;
            width: 45%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>CONTRATO DE PRESTACIÓN DE SERVICIOS</h1>
        <p>ASESOR: Lic. Ezequiel Ricardo Cervantes Hernández</p>
        <p>TELÉFONO: 614 406 4014 - WHATSAPP: 614 406 4014</p>
    </div>

    <div class="content">
        <p>CONTRATO DE PRESTACIÓN DE SERVICIOS PROFESIONALES: QUE CELEBRAN POR UNA PARTE LA EMPRESA ETERNAL MOMENTS REPRESENTADA LEGALMENTE POR EL LIC. EZEQUIEL RICARDO CERVANTES HERNÁNDEZ QUIEN EN LO SUCESIVO SE LE DENOMINARÁ COMO “EL PRESTADOR” Y POR OTRA PARTE EL/LA C. {{ $evento->user->name }} CON NÚMERO CELULAR {{ $evento->user->celular }} QUIEN EN LOS SUCESIVO SE LE DENOMINARÁ LA “PARTE BENEFICIARIA” CONTRATO QUE SE SUJETA AL TENOR DE LAS SIGUIENTES DECLARACIONES Y CLÁUSULAS:</p>

        <h3>DECLARACIONES</h3>
        <p><strong>I.</strong> DECLARA EL PRESTADOR QUE ES PERSONA FÍSICA CON PLENA CAPACIDAD JURÍDICA PARA SUSCRIBIR EL PRESENTE ACUERDO...</p>

        <h3>CLÁUSULAS</h3>
        <p><strong>1.</strong> MANIFIESTA “EL PRESTADOR” QUE EN ESTE MISMO ACTO SE COMPROMETE A PRESTAR...</p>

        <h3>Detalles del Evento</h3>
        <p><strong>Servicio Contratado:</strong> {{ $evento->servicio }}</p>
        <p><strong>Fecha:</strong> {{ $evento->dia }} de {{ $evento->mes }} de {{ $evento->año }}</p>
        <p><strong>Hora:</strong> {{ $evento->hora }}</p>
        <p><strong>Lugar:</strong> {{ $evento->lugar }}</p>

        <h3>Pagos</h3>
        <p><strong>Precio del Paquete:</strong> ${{ number_format($evento->precio_paquete, 2) }}</p>
        <p><strong>Apartado:</strong> ${{ number_format($evento->apartado, 2) }}</p>
        <p><strong>Segundo Pago:</strong> ${{ number_format($evento->segundo_pago, 2) }}</p>
        <p><strong>Tercer Pago:</strong> ${{ number_format($evento->tercer_pago, 2) }}</p>

        <div class="signature">
            <div>
                _____________________________________________<br>
                “EL PRESTADOR”
            </div>

            <div>
                __________________________________________<br>
                “PARTE BENEFICIARIA”
            </div>
        </div>

        <div class="footer">
            <p>Leído que fue el presente por las partes y enterados de su contenido y fuerza legal se firma en Chihuahua, Chihuahua, a los ___ días de __________ de 202_.</p>
        </div>
    </div>
</body>
</html>
