document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("login-form");
    const message = form.querySelector('.message');
    if (form){
        form.addEventListener("submit", (e) => {
            e.preventDefault();

            sendAuthentification(form);
        })
    }

    function sendAuthentification(form){
        //Réinitialiser le message d'alert
        message.innerText = '';

        const formData = new FormData(form);
        // URL cible pour la requête AJAX
        var url = 'http://localhost:/tp-supermarket/login/authentification';

        // Configuration de la requête AJAX
        const xhr = new XMLHttpRequest();
        xhr.responseType = "json";
        xhr.addEventListener("load", () => {
            if (xhr.status === 200 && xhr.readyState === 4){
                const reponse = xhr.response;
                if (reponse.success){
                    window.location.href = "http://localhost/tp-supermarket/Home";
                } else {
                    if (reponse.message.trim() !== ''){
                        message.innerText = reponse.message;
                    }
                }
            }
        })
        xhr.open("post", url, true);
        xhr.send(formData);
    }
})