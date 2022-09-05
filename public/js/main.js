if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('../service-worker-to-install.js')
        .then(function(registration) {
            console.log("main.js => Service Worker Registrado com Sucesso");
            console.dir(registration);
        })
        .catch(function(error) {
            console.log("main.js => Erro ao registrar Service Worker");
            console.dir(error);
        });
}