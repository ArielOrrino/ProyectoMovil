function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
    x.type = "password";
    }
}

function pagoMP(monto) {
	
	console.log(monto);
	alert("Hello! I am an alert box!! and the monto is " + monto);
}
                 