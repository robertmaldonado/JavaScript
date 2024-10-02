const enviarCorreo = document.getElementById('enviarCorreo');

enviarCorreo.addEventListener('click', function () {
    const destinatario = 'correo@destino.com'; // Reemplaza con el correo electrónico real
    const asunto = 'Asunto del correo'; // Reemplaza con el asunto deseado
    const cuerpo = 'Este es el mensaje del correo electrónico.'; // Reemplaza con el mensaje deseado

    const enlaceCorreo = `mailto:${destinatario}?subject=${asunto}&body=${cuerpo}`;

    window.location.href = enlaceCorreo;
});
