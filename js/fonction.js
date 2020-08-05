function getForm(){
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var email = document.getElementById('email').value;
    var objet = document.getElementById('objet').value;
    var message = document.getElementById('message').value;

    chargementEnvoiMail().then(envoieMail(nom,prenom,email,objet,message));
    return false;
}

async function chargementEnvoiMail(){
    swal({
      text: 'Envoi Email en cours..',
      allowEscapeKey: false,
      allowOutsideClick: false,
      padding:'3em',
      timer: 6000,
      onOpen: () => {
        swal.showLoading();
      }
    })
}

async function envoieMail(nom, prenom, email, objet, message){
    $.ajax({
      url:"php/send_contact_mail.php",
      method:"POST",
      data:{
        nom:nom,
        prenom:prenom,
        email:email,
        objet:objet,
        message:message
      },
      success:function(data){
        confirmationEnvoi();
      }
    })
}

function confirmationEnvoi(){
    swal({
      type: 'success',
      title:'Merci pour votre message',
      html:
      '<p>'+'Votre message a été envoyé avec succés. Notre service clientèle va répondre à votre message dans 24 heures'+'</p>',
      width: 500,
      padding: '3em',
      showCloseButton: false,
      showCancelButton: false,
      focusCancel: false,
      popup: 'animated fadeInDown faster',
      showConfirmButton: false,
      allowEscapeKey: true,
      allowEnterKey:false,
      scrollbarPadding: true,
      timer: 6000,
      allowOutsideClick:false
    })
}