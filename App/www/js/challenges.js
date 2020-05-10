////////////////////////////////////////////////////////////The first challange
// Get the modal
var flowersModal = document.getElementById("flowersModal");

// Get the button that opens the modal
var joinflowers = document.getElementById("joinflowers");

// Get the <span> element that closes the modal
var spanflowersModal = document.getElementById("closeflowersModal");

// When the user clicks the button, open the modal 
joinflowers.onclick = function() {
flowersModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanflowersModal.onclick = function() {
flowersModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == flowersModal) {
flowersModal.style.display = "none";
}
}
////////////////////////////////////////////////////////////The second challange
// Get the modal
var catsModal = document.getElementById("catsModal");

// Get the button that opens the modal
var joincats = document.getElementById("joincats");

// Get the <span> element that closes the modal
var spancatsModal = document.getElementById("closecatsModal");

// When the user clicks the button, open the modal 
joincats.onclick = function() {
catsModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spancatsModal.onclick = function() {
catsModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == catsModal) {
catsModal.style.display = "none";
}
}
////////////////////////////////////////////////////////////The third challange
// Get the modal
var dogsModal = document.getElementById("dogsModal");

// Get the button that opens the modal
var joindogs = document.getElementById("joindogs");

// Get the <span> element that closes the modal
var spandogsModal = document.getElementById("closedogsModal");

// When the user clicks the button, open the modal 
joindogs.onclick = function() {
dogsModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spandogsModal.onclick = function() {
dogsModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == dogsModal) {
dogsModal.style.display = "none";
}
}
////////////////////////////////////////////////////////////////////First modal
function triggerClickFlowers(e) {
      document.querySelector('#fileflowersModal').click();
    }
    function displayImageFlowers(e) {
      
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
          document.querySelector('#profileDisplaymyModalFlowers').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
/////////////////////////////////////////////////////////////////////Second modal
function triggerClickCats(e) {
      document.querySelector('#filecatsModal').click();
    }
    function displayImageCats(e) {
      
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
          document.querySelector('#profileDisplaymyModalCats').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
////////////////////////////////////////////////////////////////////Third modal
function triggerClickDogs(e) {
      document.querySelector('#filedogsModal').click();
    }
    function displayImageDogs(e) {
      
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
          document.querySelector('#profileDisplaymyModalDogs').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }