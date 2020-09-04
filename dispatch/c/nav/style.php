<?php include ('../c/v.php');?>
<style> 
<-------------------------------HTML Elements--------------------------------------------------------->
body {
  background: white;
  font-size: 26px;
  background-color: #ffffff;
  font-family: Arial;
  font-size: 20px;
  padding: 8px;
  height:100%;
  overflow-y: hidden; /* Hide vertical scrollbar */
  overflow-x: hidden; /* Hide horizontal scrollbar */
}
h1,h2,h3,h4,h5,h6,h7,h8 {
  font-weight: 100;
  letter-spacing: 2.5px;
  font-size: 16px;
  font-family: Arial;
  font-size: 20px;
}
a {
  color: #2196F3;
}
hr {
  border: 1px solid lightgrey;
}
<---------------------------------Sidebar-------------------------------------------------------------->
.w3-sidebar {
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  border: 3px;
}
.w3-bar {
  box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
  border-radius: 4px;
}
.w3-red {
  color: #ff3333;
}
<--------------------------------Input Form------------------------------------------------------------>
input[type=search] {
  width: 40%;
  margin-bottom: 5px;
  padding: 15px;
  border: 3px;
  border-radius: 1px;
  background: white;
  font-size: 26px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: relative;
  color: #333;
  border-radius: 7px;
  height: 50px;
}

input[type=text]:focus {
    background-color: red;
    color: white;
    text-decoration: none;
    cursor: text;
}

input[type=text-c]:focus {
    background-color: red;
    color: white;
    text-decoration: none;
    cursor: text;
}
input[type=text-f]:focus {
    background-color: red;
    color: white;
    text-decoration: none;
    cursor: text;
}
input[type=text-d]:focus {
    background-color: red;
    color: white;
    text-decoration: none;
    cursor: text;
}
input[type=text-full]:focus {
    background-color: red;
    color: white;
    text-decoration: none;
    cursor: text;
}
input[type=text-half]:focus {
    background-color: red;
    color: white;
    text-decoration: none;
    cursor: text;
}
input[type=text-fs]:focus {
    background-color: red;
    color: white;
    text-decoration: none;
    cursor: text;
}
input[type=text-fs-sm]:focus {
    background-color: red;
    color: white;
    text-decoration: none;
    cursor: text;
}
 
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background: black;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: relative;
  color: #fff;
  border-radius: 7px;
  height: 50px;
}
input[type=text-c] {
  width: 100%;
  margin-bottom: 5px;
  padding: 15px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background: <?PHP echo $colormode;?>;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position:;
  border-radius: 7px;
}
input[type=text-f] {
  width: 49.7%;
  margin-bottom: 5px;
  padding: 15px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background: <?PHP echo $colormode;?>;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  border-radius: 7px;
}
input[type=text-d] {
  width: 100%;
  margin-bottom: 5px;
   padding: 15px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background: <?PHP echo $colormode;?>;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  border-radius: 7px;
}
input[type=text-full] {
  width: 100%;
  margin-bottom: 5px;
   padding: 15px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background: <?PHP echo $colormode;?>;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  border-radius: 7px;
}
input[type=time] {
  width: 25%;
  margin-bottom: 5px;
   padding: 15px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background: <?PHP echo $colormode;?>;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  color: #333;
  border-radius: 7px;
}
input[type=text-half] {
  width: 30.3%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background: black;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: relative;
  color: #fff;
  border-radius: 7px;
  height: 50px;
}
input[type=text-fs] {
  width: 29%;
  margin-bottom: 5px;
  padding: 15px;
  border: 2px #fff solid;
  border-radius: 1px;
  background: <?PHP echo $colormode;?>;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  border-radius: 7px;
}
input[type=text-fs-sm] {
  width: 19%;
  margin-bottom: 5px;
  padding: 15px;
  border: 2px #fff solid;
  border-radius: 1px;
  background: <?PHP echo $colormode;?>;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  border-radius: 7px;
}
input[type=text-half-th] {
  width: 100%;
  margin-bottom: 5px;
  padding: 15px;
  border: 2px #fff solid;
  border-radius: 1px;
  background: <?PHP echo $colormode;?>;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  border-radius: 7px;
}
<---------------------------------Tables & Elements--------------------------------------------------->
th,thead {
  text-align: left;
  border: 1px solid #ffcccc;
  padding: 5px;
  width:30%;
  font-weight: bold;
  font-size: 17px;
  height:3%;
  color: #ebebe0;
}
tbody, tr,td {
  font-size: 15px;
  height:2%;
  font-weight: bold;
  text-align: left;
  
}
 

.table-responsive-clg {
  border-collapse: ;
  border-spacing: 0;
  font-weight: normal;
  width: 100%;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
  font-family: Arial;
  position: ;
  margin-bottom:0;
  margin-top:0%;
  font-weight: bold;
  height: 85%;
  font-size:35px;
  overflow-x: hidden; 
  overflow-x: auto; 
  text-align:justify;
  color: <?PHP echo $colormode;?>;
  border-radius: 3px;
}

.table-responsive-chat {
  border-collapse: ;
  border-spacing: 0;
  font-weight: normal;
  width: 100%;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
  font-family: Arial;
  position: ;
  margin-bottom:0;
  margin-top:0%;
  font-weight: bold;
  height: 85%;
  font-size:35px;
  overflow-x: hidden; 
  overflow-x: auto; 
  text-align:justify;
  color: <?PHP echo $colormode;?>;
  border-radius: 3px;
}


.table-responsive {
  border-collapse: collapse;
   border-spacing: 0;
  width: 100%;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
  font-family: Arial;
  position: ;
  font-size:10px;
 font-weight: bold;
  color: <?PHP echo $colormode;?>;
  border-radius: 3px;
  
}


<---------------------------------Container&Divs------------------------------------------------------->
.row1 {
  height: 10%;
  
}

.row2 {
  height: 40%;
  width:75%;
}

.jobs-lists{
    border-collapse: ;
  border-spacing: 0;
  width: 100%;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
  font-family: Arial;
  position: ;
  height: 40%;
  font-size:35px;
  overflow-x: hidden; 
  overflow-x: auto; 
  overflow-y: hidden; 
  overflow-y: auto; 
  color: <?PHP echo $colormode;?>;
  border-radius: 3px;
}
.col-lg-3 {
  align-content: left;
}
.col-lg-2 {
  align-content: left;
}
.col-lg-6 {
  width: 49%;
}
.col-lg-7 {
  width: 60%;
}
.col-lg-5 {
  width: 39%;
}
.row-faresetup {
  height: 20%;
  width: 100%;
}
.w3-container{
  /*    
  font-weight: bold;
  letter-spacing: 2.5px;
  padding: 15px;
  border-radius: 7px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  width: 20%;
  height: 20%;
  padding: 5px 15px;
  margin-top: 20px;
  margin-bottom: 7px;
  */
  
}
.dashboard{
  width: 100%;
  box-sizing: border-box;
  border: 1px solid #fff;
  border-radius: 5px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 100%; 
}
.container-dashboard {
  width: 100%;
  box-sizing: border-box;
  border: px solid #fff;
  border-radius: 5px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 100%;
  
}
.container-reports {
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  border: 0px solid #ccc;
  border-radius: 5px;
  background-color: <?PHP echo $colorbodyMode;?>;
  resize: none;
  color:#000;
  height: 90%;
}
.container-chatroom {
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  border: 0px solid #ccc;
  border-radius: 5px;
  background-color: #000;
  resize: none;
  height: 800px;
}
.db-border {
  background-color: white;
  border-radius: 5px;
  border: 2px solid #ccc;
}
.title-d {
  font-weight: bold;
  letter-spacing: 2.5px;
  padding: 15px;
  border-radius: 7px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  width: 20%;
  padding: 5px 15px;
  margin-top: 20px;
  margin-bottom: 7px;
}
<-----------------------------------Buttons-------------------------------------------------------------->
.btn-dashboard {
  background-color: red;
  width: 60%;
  padding: 2px;
  height: 30px;
  font-family: 'Roboto', sans-serif;
  font-size: 15px;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}
.btn-talk {
  background-color: red;
  width: 100%;
  padding: 2px;
  height: 30px;
  font-family: 'Roboto', sans-serif;
  font-size: 15px;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}
.btn-faresetup {
  background-color: red;
  width: 10%;
  padding: 5px;
  height: 57px;
  font-family: 'Roboto', sans-serif;
  font-size: 15px;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}
.btn-container {
  background-color: red;
  width: 20%;
  padding: 12px;
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 24pxpx;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}
.btn-small {
  background-color: red;
  width: 20%;
  padding: 12px;
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 24pxpx;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}
.btn-sm {
  background-color: red;
  width: 100%;
  padding: 12px;
  float: right;
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 24pxpx;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}
.btn-sm-right {
  background-color: #ff5c33;
  width: 50%;
  padding: 12px;
  float: right;
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 24pxpx;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  
  position:relative;
  margin-top:30%;
  
}
.btn-sm-right-close {
  background-color: red;
  width: 10%;
  padding: 12px;
  
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 24pxpx;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  
  position:relative;
  margin-top:5%;
  
}
.btn-sm-right-duplicate {
  background-color: #ff33ff;
  width: 15%;
  padding: 12px;
  
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 24pxpx;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  
  position:relative;
  margin-top:5%;
  
}
.btn-sm-right-recalculate {
  background-color: #4da6ff;
  width: 17%;
  padding: 12px;
  
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 24pxpx;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  
  position:relative;
  margin-top:5%;
 
}

.btn-sm-right-dispatch {
  background-color: #29a329;
  width: 20%;
  padding: 12px;
  float:right;
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 24pxpx;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  
  position:relative;
  margin-top:5%;
  
}
.btn-sm-right-save {
  background-color: #4da6ff;
  width: 15%;
  padding: 12px;
  
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 24pxpx;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  
  position:relative;
  margin-top:5%;
  
  
}
.btn-sm-left {
  background-color: #1a8cff;
  width: 50%;
  padding: 12px;
  float: right;
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 24pxpx;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  
  position:relative;
  margin-top:30%;
  right:5%;
}
.btn-search {
  background-color: red;
  width: 10%;
  padding: 12px;
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 15px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  margin-bottom: 5px;
}
.btn {
  background-color: red;
  width: 40%;
  padding: 12px;
  height: 50px;
  font-family: 'Roboto', sans-serif;
  font-size: 24pxpx;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #fff;
  border: 3px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}
<-----------------------------------Divs&Containers------------------------------------------------------>
.container {
                align-items: center;
                background-color: #00cc44;
                padding: 10px 10px 10px 10px;
                width: 70%;
                margin-bottom: 20px;
                border: 3px;
                background: white;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
                font-family: lato;
                position: relative;
                color: #333;
                border-radius: 15px;
            }
<-in------------------------------------            
.container-menu {
                align-items: center;
                background-color: #00cc44;
                padding: 10px 10px 10px 10px;
                width: 50%;
                height: 40%;
                margin-bottom: 20px;
                border: 1px solid #fff;
                background: gray;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
                font-family: lato;
                position: relative;
                color: #333;
                border-radius: 15px;
}
.container-createjob {
  align-items: left;
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: px solid #ccc;
  border-radius: 12px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 100%;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10pxpx;
  margin-right: 10pxpx;
}
.container-setting {
  align-items: left;
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 12px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 1500px;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10pxpx;
  margin-right: 10pxpx;
}
.container-fluid {
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 2px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 100%;
}
<----------------------------------Classes--------------------------------------------------------------->
.input {
  width: 50%;
  margin-bottom: 5px;
  padding: 7px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background: black;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  color: #fff;
  border-radius: 7px;
}
.input-half {
  width: 20%;
  margin-bottom: 5px;
  padding: 7px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background: black;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  color: #fff;
  border-radius: 7px;
}
.title {
  font-weight: bold;
  letter-spacing: 2.5px;
  padding: 15px;
  border-radius: 7px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  width: 30%;
  padding: 5px 15px;
  margin-top: 20px;
  margin-bottom: 7px;
}
.textarea {
  width: 100%;
  height: 50px;
  padding: 12px 20px;
  box-sizing: border-box;
  box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
  border: 2px solid #ccc;
  border-radius: 10px;
  background-color: #fff;
  resize: none;
}
.jobentry {
  width: 80%;
  margin-bottom: 5px;
  padding: 20px;
  border: 1px;
  border-radius: 1px;
  background: black;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  color: #000;
  border-radius: 7px;
}
.selectT {
  width: 32.1%;
  margin-bottom: 5px;
  padding: 16px;
  border: 1px solid #fff;
  border-radius: 1px;
  background: black;
 
  font-family: lato;
  position: ;
  
  border-radius: 7px;
}
.selectT2 {
  width: 100%;
  margin-bottom: 5px;
  padding: 16px;
  border: 1px solid #fff;
  border-radius: 1px;
  background: black;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: ;
  color: #fff;
  border-radius: 7px;
}
.selectCar {
  width: 18%;
  margin-bottom: 0px;
  padding: 16px;
  border: 1px solid #fff;
  border-radius: 1px;
  background: black;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: ;
  color: #fff;
  border-radius: 7px;
}
.selectT-Mini {
  width: 17%;
  margin-bottom: 0px;
  padding: 15px;
  border: 1px solid #fff;
  border-radius: 1px;
  background: black;
  font-family: lato;
  position: ;
  color: ;
  border-radius: 7px;
}
.selectT-Mini3 {
  width: 20%;
  margin-bottom: 0px;
  padding: 15px;
  border: 1px solid #fff;
  border-radius: 1px;
  background: black;
  font-family: lato;
  position: ;
  color: ;
  border-radius: 7px;
}
.selectT-Mini2 {
  width: 24%;
  margin-bottom: 0px;
  padding: 15px;
  border: 1px solid #fff;
  border-radius: 1px;
  background: black;
  
  font-family: lato;
  position: ;
  color: ;
  border-radius: 7px;
}
.selectText {
  width: 33%;
  margin-bottom: 5px;
  padding: 16px;
  border: 1px solid #fff;
  border-radius: 1px;
  background: black;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  color: #fff;
  border-radius: 7px;
}
.jobentry-half {
  width: 27%;
  margin-bottom: 5px;
  padding: 5px;
  border: 1px;
  border-radius: 1px;
  background: white;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  color: #333;
  border-radius: 7px;
}
.title-h {
  font-weight: bold;
  letter-spacing: 2.5px;
  padding: 6px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  width: 40%;
  padding: 10px 20px;
  margin-top: 10px;
  margin-bottom: 10px;
}
.lable {
  font-weight: bold;
  letter-spacing: 2.5px;
  padding: 2px;
  border-radius: 10px;
  box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2);
  width: 20%;
  padding: 5px 15px;
  margin-top: 3px;
  margin-bottom: 1px;
  font-family: Lucida;
}

<----------------------------Driver Registeration Page Styling----------------------------------------------------------->
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  padding-top: 1%; /* Location of the box */
  left: 1%;
  top: 1%;
  right:1%;
  width: 100%; /* Full width */
  height: 95%; /* Full height */
  background-color: #000; /* Fallback color */
 
}

/* Modal Content */
.modal-content {
  background-color: black ;
  margin: auto;
  padding: 1%;
  border: px solid #888;
  width: 100%;
}

/* The Close Button */
.close {
  color: ;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: ;
  text-decoration: none;
  cursor: pointer;
}

</style>
<?php //include('style-mini.php');?>