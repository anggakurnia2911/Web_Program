var userEmail = document.getElementById('userEmail');
var userPassword = document.getElementById('userPassword');
var userFirstname = document.getElementById('userFirstname');


function storeData() {

    localStorage.setItem('userEmail',userEmail.value);
    localStorage.setItem('userPassword',userPassword.value);
    localStorage.setItem('userFirstname', userFirstname.value);
 
    
    alert ('Data berhasil disimpan')
    location.href = 'login.html';
}



function loginFunction() {
    var userEmail = document.getElementById('userEmail');
    var userPassword = document.getElementById('userPassword');

    var inputEmail = document.getElementById ('inputEmail').value;
    var inputPassword = document.getElementById ('inputPassword').value;

    if (inputEmail.value == userEmail && inputPassword.value == userPassword) {
        alert('Login berhasil!!');
        location.href = "user.html"

    } else {
        alert("Masalah dalam Login");
    }
}