function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
    x.type = "password";
    }
}

document.getElementById('toggle').addEventListener('click', function() {
	var form = document.getElementById('test')
	var from2 = document.getElementById('test2')
	form.classList.add('asd')
	from2.classList.add('asd2')
})                