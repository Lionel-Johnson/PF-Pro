import Swal from 'sweetalert2';

export function success(message){

    Swal.fire({

        icon:'success',

        title:'Succès',

        text:message,

        timer:2500,

        showConfirmButton:false

    });

}

export function error(message){

    Swal.fire({

        icon:'error',

        title:'Erreur',

        text:message

    });

}