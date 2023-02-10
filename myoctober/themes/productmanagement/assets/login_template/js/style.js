function myFunction() {

    document.getElementById("content").innerHTML = "whatever";
    
    var x = document.getElementById("div123");
    
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
}