/*
 * Request
 * Saves character on firebase
 */
function createCharacter(){
    var name = document.getElementById("name").value;
    var name20 = decodeURI(name);
    var race = document.getElementById("race").value;
    var classe = document.getElementById("class").value;
    var url ="http://127.0.0.1:5000/character/";
    var params = "name=" + name20 + "&race=" + race +"&classe=" + classe;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    //Send the proper header information along with the request
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);
    xhr.onload = () => {
        alert("Succes");
    }
    //location.reload();
}