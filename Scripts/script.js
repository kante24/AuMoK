$(document).ready(function() {
    $('#Name').keyup(function(event) {
        newText = event.target.value;
        $('#Firstname').val(newText);
        // document.getElementById("p").innerHTML = newText;
    });
    // document.getElementById("p").innerHTML = "Nene";
})