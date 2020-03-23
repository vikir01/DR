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


.search {
  position: relative;
  display: flex;
  text-align:center;
  margin-left: 10px;
}

.searchTerm { 
  margin: 10px;
  border: 3px solid pink;
  padding: 5px;
  height: 20px;
  border-radius: 10px;
  color: black;
  flex-grow: 1;
}

.searchTerm:focus{
  color: black;
  flex-grow: 1;
}

#frbutt{
  background-color: pink;
  color: white;
  padding: 5px;
  font-size: 20px;
  border: none;
  cursor: pointer;
  border-radius: 50%;
  display: block;
  width: 20px;
  height: 20px;
  margin-top: 15px;
}

form{
  display: flex;
  flex-grow: 1;
}

.divimgsearch{
display: inline-block;
}

.imgsearch{
  width: 100px;
  height: 100px;

}

#output{
  margin-left: 30px;
  border-left-style: solid;
  border-color: pink
}