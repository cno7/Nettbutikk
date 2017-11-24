// Code inspired by w3schools
document.getElementById("defaultOpen").click();
function decreaseBuyAmount() {
    if(document.getElementById("inpBuyAmount").value >= 2) {
        var decrease = document.getElementById("inpBuyAmount").value;
        decrease--;
        document.getElementById("inpBuyAmount").value = decrease;
        console.log(document.getElementById("inpBuyAmount").value);
    }
}
function increaseBuyAmount() {
    if(document.getElementById("inpBuyAmount").value <= 500) {
        var increase = document.getElementById("inpBuyAmount").value;
        increase++;
        document.getElementById("inpBuyAmount").value = increase;
        console.log(document.getElementById("inpBuyAmount").value);
    }
}
function addToCart() {
    var amount = document.getElementById("inpBuyAmount").value;

    if(amount == 1) {
        document.getElementById("addedToCart").innerHTML = amount + " item added to cart!";
        setTimeout(function(){document.getElementById("addedToCart").innerHTML = "&nbsp;"}, 5000);
    }
    if(amount > 1) {
        document.getElementById("addedToCart").innerHTML = amount + " items added to cart!";
        setTimeout(function(){document.getElementById("addedToCart").innerHTML = "&nbsp;"}, 5000);
    }
}
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");
  for (var i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks");
  for (var i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
