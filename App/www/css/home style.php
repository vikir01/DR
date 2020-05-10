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
  background-color: black;
  font-family: Times New Roman;
  position: relative;
  margin: 0;
}

* {
  box-sizing: border-box;
}

/*form.example input[type=text] {
  padding: 12px;
  font-size: 17px;
  float: left;
  width: 60%;
  background: white;

  border: 5px solid pink;
  border-radius: 10%;
  border-color: pink;
  margin-top: 20px;
}

form.example button {
  float: left;
  width: 20%;
  padding: 2px;
  background: #2196F3;
  border-left: none;
  cursor: pointer;

  color: white;
  border: 10px solid pink;
  border-radius: 100%;
  border-color: pink;
  font-size:30px;
  background-color: pink;
  margin-top: 20px;
}

form.example button:hover {
  background: pink;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}*/

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%;
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
  border-radius: 2%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 100px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}


/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}