const formularios_ajax = document.querySelectorAll(".FormularioAjax");

function enviar_formulario_ajax(e){
    e.preventDefault();

    let enviar=confirm("Quieres enviar el formulario");

    if(enviar==true){

        let data = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");

        let encabezados = new Headers();

        let config ={
            method:method,
            Headers: encabezados,
            mode :'cors',
            Cache: 'no-cache',
            body: data
        };

        fetch(action,config)
        .then(respuesta =>respuesta.text())
        .then(respuesta => {
            alert(respuesta);
        });
    }
}

formularios_ajax.forEach(formularios => {
    formularios.addEventListener("submit",enviar_formulario_ajax);
});