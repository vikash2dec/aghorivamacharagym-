function sendToWhatsapp(params) {
    let number = "+918544013663";

    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let message = document.getElementById('message').value;

    var url = "https://wa.me/" + number + "?text= Aghori Vamachara GYM %0a"
    +"Name : " +name+ "%0a"
    +"Number :"+phone+ "%0a"
    +"Message : "+message+ "%0a"

    window.open(url, '_blank').focus();
 }