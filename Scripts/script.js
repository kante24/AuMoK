$(document).ready(function() {

    $('#Password').keyup(function(event) {
        pwd = event.target.value;

        //Parse password value here for a match up after
        $('#isSame').val(pwd);
    });

})

//Function Redirection to another page
function Relocation(page) {
    window.location.href = "/dashboard/AuMoK/" + page;
}

// document.onreadystatechange = function() {
//     var state = document.readyState
//     if (state == 'complete') {
//         setTimeout(function() {
//             document.getElementById('interactive');
//             document.getElementById('load').style.visibility = "hidden";
//         }, 1000);
//     }
// }