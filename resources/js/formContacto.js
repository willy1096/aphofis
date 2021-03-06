import axios from 'axios';
import swal from 'sweetalert';


if(document.getElementById('formContacto')){
    document.querySelector('#formContacto').addEventListener('submit', function(ev){
        ev.preventDefault();
        document.getElementById('btnsend').disabled = true;
        document.getElementById('btnsend').innerText = 'enviando...';

        let datos = $("#formContacto").serialize();
        // if(grecaptcha.getResponse().length == 0){
        //     swal("Comprueba que no eres un robot", "Resuelve el captcha para poder continuar.", "error");
        // }else{
            axios.post(PATH + 'send/mail', datos)
                .then(function (response) {
                    document.getElementById('btnsend').disabled = false;
                    document.getElementById('btnsend').innerText = 'Enviar';
                    document.querySelector('#formContacto').reset();
                    swal("Mensaje enviado!", "Pronto nos contactaremos contigo.", "success");
                    
                })
                .catch(function (errors)  {
                    document.getElementById('btnsend').disabled = false;
                    document.getElementById('btnsend').innerText = 'Enviar';
                    swal('Error', "Se produjo un error al envíar.", "error");
                    // console.log('Error: '+errors);
                });
        // }
    }, false);
}

if(document.getElementById('formServicios')){
    document.querySelector('#formServicios').addEventListener('submit', function(ev){
        ev.preventDefault();
        document.getElementById('btnsend').disabled = true;
        document.getElementById('btnsend').innerText = 'enviando...';
        var datos = new FormData(formServicios);
        // let datos = $("#formServicios").FormData();
        const config = { headers: { 'Content-Type': 'multipart/form-data' } };
      
        console.log(datos);
        var imagefile = document.querySelector('#file');
        datos.append("image", imagefile.files[0]);
       
        axios.post(PATH + 'send/mail/servicios', datos,config)
            .then(function (response) {
                document.getElementById('btnsend').disabled = false;
                document.getElementById('btnsend').innerText = 'Enviar';
                document.querySelector('#formServicios').reset();
                swal("Mensaje enviado!", "Pronto nos contactaremos contigo.", "success");
                
            })
            .catch(function (errors)  {
                document.getElementById('btnsend').disabled = false;
                document.getElementById('btnsend').innerText = 'Enviar';
                swal('Error', "Se produjo un error al envíar..", "error");
                // console.log('Error: '+errors);
            });
    }, false);
}




