//alertFunction();
/*
function alertFunction() {
window.onbeforeunload(innerAlert());
    
    function innerAlert() {
        alert("Welcome to Idris Lawal's portfolio, I am ecstatic for this visit. Please leave a message before you go.");
    }
}
*/
function msgSent(){
    var x = document.getElementById("name").value;
    if (x){
        alert("Thank you " + x + ", Your message was sent successfully");
    }else{
        alert("Please input a name");
    }
    
    window.location("index.html");
}



