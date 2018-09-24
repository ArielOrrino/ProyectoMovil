function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
    x.type = "password";
    }
}


function guardarMonto() {
    var montoDonacion = document.getElementById("monto").value;
    redirigirMp(montoDonacion);
}

function redirigirMp(MD) {
	    window.location = "confirm/"+MD;
	}
                 