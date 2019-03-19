document.getElementById('academyForm').onsubmit = function () {
    if (!grecaptcha.getResponse()) {
         alert('Вы не заполнили каптчу!');
         return false;
    }
}