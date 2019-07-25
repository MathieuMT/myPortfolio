/* AVATAR */
var btnAvatar = document.querySelector('.btn_update_avatar_profile');
var popupAvatar = document.querySelector('.popup_update_avatar_profile');
var crossAvatar = document.querySelector('.btn_closePopupAvatar');

/* MINI-AVATAR */
var btnMiniAvatar = document.querySelector('.btn_update_mini_avatar_profile');
var popupMiniAvatar = document.querySelector('.popup_update_mini_avatar_profile');
var crossMiniAvatar = document.querySelector('.btn_closePopupMiniAvatar');

/* USERNAME */
var btnUsername = document.querySelector('.btn_update_username_profile');
var popupUsername = document.querySelector('.popup_update_username_profile');
var crossUsername = document.querySelector('.btn_closePopupUsername');

/* FIRSTNAME */
var btnFirstname = document.querySelector('.btn_update_firstname_profile');
var popupFirstname = document.querySelector('.popup_update_firstname_profile');
var crossFirstname = document.querySelector('.btn_closePopupFirstname');

/* LASTNAME */
var btnLastname = document.querySelector('.btn_update_lastname_profile');
var popupLastname = document.querySelector('.popup_update_lastname_profile');
var crossLastname = document.querySelector('.btn_closePopupLastname');

/* EMAIL */
var btnEmail = document.querySelector('.btn_update_email_profile');
var popupEmail = document.querySelector('.popup_update_email_profile');
var crossEmail = document.querySelector('.btn_closePopupEmail');

/* PASS */
var btnPass = document.querySelector('.btn_update_pass_profile');
var popupPass = document.querySelector('.popup_update_pass_profile');
var crossPass = document.querySelector('.btn_closePopupPass');

/* PROFESSION */
var btnProfession = document.querySelector('.btn_update_profession_profile');
var popupProfession = document.querySelector('.popup_update_profession_profile');
var crossProfession = document.querySelector('.btn_closePopupProfession');

/* DESCRIPTION */
/* POPUP ADD DESCRIPTION */
var btnDescription = document.querySelector('.btn_update_description_profile');
var popupDescription = document.querySelector('.popup_update_description_profile');
var crossDescription = document.querySelector('.btn_closePopupDescription');
/* POPUP REMOVE DESCRIPTION */
var btnDelDescription = document.querySelector('.btn_delete_description_profile');
var popupDelDescription = document.querySelector('.popup_delete_description_profile');
var crossDelDescription = document.querySelector('.btn_closePopupDeletetDescription');

/*******************/

/* AVATAR */
btnAvatar.addEventListener('click', function() {
    btnAvatar.style.display = 'none';
    popupAvatar.style.display = 'flex';
})

if (crossAvatar) {
    
    crossAvatar.addEventListener('click', function() {
        btnAvatar.style.display = 'flex';
        popupAvatar.style.display = 'none';
   }) 
    
}

/* MINI-AVATAR */
btnMiniAvatar.addEventListener('click', function() {
    btnMiniAvatar.style.display = 'none';
    popupMiniAvatar.style.display = 'flex';
})

if (crossMiniAvatar) {
    
    crossMiniAvatar.addEventListener('click', function() {
        btnMiniAvatar.style.display = 'flex';
        popupMiniAvatar.style.display = 'none';
   }) 
    
}

/* USERNAME */
btnUsername.addEventListener('click', function() {
    btnUsername.style.display = 'none';
    popupUsername.style.display = 'flex';
})

if (crossUsername) {
    
    crossUsername.addEventListener('click', function() {
        btnUsername.style.display = 'flex';
        popupUsername.style.display = 'none';
   }) 
    
}


/* FIRSTNAME */
btnFirstname.addEventListener('click', function() {
    btnFirstname.style.display = 'none';
    popupFirstname.style.display = 'flex';
})

if (crossFirstname) {
    
    crossFirstname.addEventListener('click', function() {
        btnFirstname.style.display = 'flex';
        popupFirstname.style.display = 'none';
   }) 
    
}


/* LASTNAME */
btnLastname.addEventListener('click', function() {
    btnLastname.style.display = 'none';
    popupLastname.style.display = 'flex';
})

if (crossLastname) {
    
    crossLastname.addEventListener('click', function() {
        btnLastname.style.display = 'flex';
        popupLastname.style.display = 'none';
   }) 
    
}



/* EMAIL */
btnEmail.addEventListener('click', function() {
    btnEmail.style.display = 'none';
    popupEmail.style.display = 'flex';
})

if (crossEmail) {
    
    crossEmail.addEventListener('click', function() {
        btnEmail.style.display = 'flex';
        popupEmail.style.display = 'none';
   }) 
    
}


/* PASS */
btnPass.addEventListener('click', function() {
    btnPass.style.display = 'none';
    popupPass.style.display = 'flex';
})

if (crossPass) {
    
    crossPass.addEventListener('click', function() {
        btnPass.style.display = 'flex';
        popupPass.style.display = 'none';
   }) 
    
}


/* PROFESSION */
btnProfession.addEventListener('click', function() {
    btnProfession.style.display = 'none';
    popupProfession.style.display = 'flex';
})

if (crossProfession) {
    
    crossProfession.addEventListener('click', function() {
        btnProfession.style.display = 'flex';
        popupProfession.style.display = 'none';
   }) 
    
}


/* DESCRIPTION */
/* POPUP ADD DESCRIPTION */

if (btnDescription) {
    
    btnDescription.addEventListener('click', function() {
    btnDescription.style.display = 'none';
    popupDescription.style.display = 'flex';
    })

}


if (crossDescription) {
    
    crossDescription.addEventListener('click', function() {
        btnDescription.style.display = 'flex';
        popupDescription.style.display = 'none';
   }) 
    
}

/* POPUP REMOVE DESCRIPTION */
btnDelDescription.addEventListener('click', function() {
    btnDelDescription.style.display = 'none';
    popupDelDescription.style.display = 'flex';
})

if (crossDelDescription) {
    
    crossDelDescription.addEventListener('click', function() {
        btnDelDescription.style.display = 'flex';
        popupDelDescription.style.display = 'none';
   }) 
    
}
