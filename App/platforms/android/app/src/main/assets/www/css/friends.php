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

@import url(https://fonts.googleapis.com/css?family=Open+Sans);

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
  top: 0;
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
