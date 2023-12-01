window.onload = function() {

    let btnUsers = document.querySelector("#btn-users");

    var xhttp = new XMLHttpRequest();

    btnUsers.onclick = function () {

        xhttp.onreadystatechange = function() {

            if(xhttp.readyState = 4 && xhttp.status == 200) {
                console.log(xhttp.responseText);
            }
            
        }

        xhttp.open('GET', 'ajax/user.php', true);
        xhttp.send();
    } 


}