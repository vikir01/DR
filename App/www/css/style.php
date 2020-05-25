<?php
    header("Content-type: text/css; charset: UTF-8");
?>
.icon-bar {
  position: fixed;
  bottom: 0;
  width: 100%;
  background-color: pink;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 9px 0;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: pink;
}

body {
  font-family: Times New Roman;
  position: relative;
  margin: 0;  
}

#myImg {
  cursor: pointer;
  transition: 0.3s;
}

/*#myImg:hover {opacity: 0.7;}*/

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 10px;
  color: pink;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

img {
  display: inline-block;
  /*position: absolute;*/
}
.imgA1 {
  /*z-index: 1;*/
  min-width: 300px;
}
.imgB1 {
  /*z-index: 3;*/
  border: 2px solid pink;
  border-radius: 50%;
  border-color: pink;
  position: absolute;
  top: -21 0px;
  left: 0;
  height: 90px;
  max-width: 90px;
  min-width: 90px;
  margin-top: -200px;
}

/*///////////////////////*/

/* Style the tab */
.tab {
  /*overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;*/
  /*margin-top: 280px;
  position: absolute;*/
  position: relative;
}

.tab .tab-inner {
  position: absolute;
  top: -100px;
  border: 1px solid pink;
  background-color: white;
  width: 100%;
  margin: 0;
  min-width: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  position: relative;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: pink;
}


/* Create an active/current tablink class */
.tab button.active {
  background-color: pink;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid pink;
  border-top: none;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
  color: pink;
}

.topright:hover {color: pink;}

.tablinks{
  font-family: Times New Roman;
  min-width: 10px;
}

.dropbtn {
  background-color: pink;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 50%;
  margin-top: 10px;
}

#myBtnCamera{
  background-color: pink;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 50%;
  margin-top: 10px;
  font-size: 25px;
  right: 0;
  bottom: 0;
  position: fixed;
  margin-bottom: 80px;
  margin-right: 20px;
}

.dropdown {
  position: fixed;
  display: inline-block;
  right: 0;
  top: 0;
  margin-right:15px;
  z-index: 1;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 150px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 2;
  right: 0;
} 

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  min-width: 50px;
}

.show {display: block;}

.cont {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 100%;
  min-width: 300px;
  overflow-y: auto; 
  margin-bottom: 70px;
}

.idiv {
  flex-basis: 29%;
  width: 27%;
  margin: 5px;
  min-width:30px;
}

.i{
  width: 100%;
  min-height: 100%;
  min-width: 100%;
  max-height: 100%;
  max-width: 100%;
  border-radius: 5%

}

/* The Modal (background) */
.modalmain {
  display: none;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  text-align: center;
}

/* Modal Content */
.modal-content-main {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.closemain {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  position: relative;
  right: 0;
  margin-right: 5px;
  margin-top: -55px;
}

.closemain:hover,
.closemain:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}

.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    display: inline-block;
}

#profileDisplay{
  border-radius: 5%;
  max-width: 200px;
  max-height: 200px;
  border: solid pink 2px;
  margin-left: 16px;
}

#salam{
  border: solid pink 2px;
  background-color: white;
  border-color: pink;
  color: pink;
  border-radius: 50px;
  margin-top: 20px;
  font-size: 16px;
  text-decoration: none;
  font-family: Times New Roman;
  text-align: center;
  padding: 10px 30px;

}

#myBtnPro {
  background: white;
  border: none;
  font-family: Times New Roman;
  font-size: 16px;
  padding: 12px 16px;
}

.modalpro {
  display: none;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  text-align: center;
}

.modal-content-pro {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.closepro {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  position: relative;
  right: 0;
  margin-right: 5px;
  margin-top: -55px;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

#myBtnCov{
  background: white;
  border: none;
  font-family: Times New Roman;
  font-size: 16px;
  padding: 12px 16px;
}

.modalcov {
  display: none;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  text-align: center;
}

.modal-content-cov {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.closecov {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  position: relative;
  right: 0;
  margin-right: 5px;
  margin-top: -55px;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.followbutt{
    background-color: pink;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 50%;
    margin-top: 10px;
    font-size: 25px;
    right: 0;
    bottom: 0;
    position: fixed;
    margin-bottom: 80px;
    margin-right: 20px;
}

.modalimages{
  max-width: 200px;
  max-height: 200px;
  border: 2px solid pink;
  border-radius: 10%;
  border-color: pink;
}

.upload{
  border: solid pink 2px;
  background-color: white;
  border-color: pink;
  color: pink;
  border-radius: 50px;
  margin-top: 20px;
  font-size: 16px;
  text-decoration: none;
  font-family: Times New Roman;
  text-align: center;
  padding: 10px 30px;
}

#tags{
  border-style: solid pink;
  border-color: pink;
  border-radius: 10%;
}