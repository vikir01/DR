
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
      modal.style.display = "none";
    }

    ///////////////////////////////////////////////////////////////

    function openTab(evt, tabName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    //////////////////////////////////////////////////////////////////

    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        } 
      }
    }
    ///////////////////////////////////////////////////////////////////////
    // Get the modal
    var modalgei = document.getElementById("myModalGei");

    // Get the button that opens the modal
    var btngei = document.getElementById("myBtnGei");

    // Get the <span> element that closes the modal
    var spangei = document.getElementsByClassName("closegei")[0];

    // When the user clicks the button, open the modal 
    btngei.onclick = function() {
      modalgei.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    spangei.onclick = function() {
      modalgei.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modalgei) {
        modalgei.style.display = "none";
      }
    }
    //////////////////////////////////////////////////////////////////
    function triggerClickPro(e) {
      document.querySelector('#filemyModalPro').click();
    }
    function displayImagePro(e) {
      
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
          document.querySelector('#profileDisplaymyModalPro').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
    /////
    function triggerClickCov(e) {
      document.querySelector('#filemyModalCov').click();
    }
    function displayImageCov(e) {
      
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
          document.querySelector('#profileDisplaymyModalCov').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
    //////
    function triggerClickGei(e) {
      document.querySelector('#filemyModalGei').click();
    }
    function displayImageGei(e) {
      
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
          document.querySelector('#profileDisplaymyModalGei').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
    //////////////////////////////////////////////////////////////////

      // Get the modal
      var modalpro = document.getElementById("myModalPro");

      // Get the button that opens the modal
      var btnpro = document.getElementById("myBtnPro");

      // Get the <span> element that closes the modal
      var spanpro = document.getElementsByClassName("closepro")[0];

      // When the user clicks the button, open the modal 
      btnpro.onclick = function() {
      modalpro.style.display = "block";
    }

      // When the user clicks on <span> (x), close the modal
      spanpro.onclick = function() {
      modalpro.style.display = "none";
    }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
      if (event.target == modalpro) {
        modalpro.style.display = "none";
      }
    }
    ///////////////////////////////////////////////////////////////////////

    // Get the modal
    var modalcov = document.getElementById("myModalCov");

    // Get the button that opens the modal
    var btncov = document.getElementById("myBtnCov");

    // Get the <span> element that closes the modal
    var spancov = document.getElementsByClassName("closecov")[0];

    // When the user clicks the button, open the modal 
    btncov.onclick = function() {
      modalcov.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    spancov.onclick = function() {
      modalcov.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modalcov) {
        modalcov.style.display = "none";
      }
    }

    ///////////////////////////////////////////////////////////
    function followuser(follower, followed){
      $.post("follow.php", {follower, followed}, function(output){
              alert("followed!");
      });   
    }