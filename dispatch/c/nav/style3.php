<?php include ('../c/v.php');?>
<style> 
<!--Start-->


html,body {
  border: 0;
  padding: 0;
  margin: 0;
  height: 100%;
}

body {
  background: white;
  font-size: 16px;
  background-color: #ffffff;
  font-family: Arial;
  font-size: 18px;
  padding: 0px;
}

.simpletable {
  border: 1px solid #ffcccc;
  width: 100%;
}
.w3-bar-item{
    
}

th,tr,td {
  text-align: left;
  border: 1px solid #ffcccc;
  padding: 10px;
}

.vl {
  border-center: 6px solid green;
  height: 100%;
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

.row1 {
  height: 10%;
}

.row2 {
  height: 90%;
  width: 100%;
}

.row-faresetup {
  height: 20%;
  width: 100%;
}


.row4 {
  height: 30%;
  width: 100%;
}

.row4.1 {
  height: 5%;
  width: 100%;
}
.row4.2 {
  height: 25%;
  width: 100%;
}

table tbody tr td {
  font-size: 10px;
}

.table-responsive-clg {
  border-collapse: ;
  border-spacing: 0;
  width: 100%;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: ;
  font-size:10px;
  height: 72%; 
  overflow-x: hidden; 
  overflow-x: auto; 
  overflow-y: hidden; 
  overflow-y: auto; 
  color: <?PHP echo $colormode;?>;
  border-radius: 3px;
}
.table-responsive-chat {
  border-collapse: ;
  border-spacing: 0;
  width: 100%;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: ;
  height: 83%; 
  overflow-x: hidden; 
  overflow-x: auto; 
  color: <?PHP echo $colormode;?>;
  border-radius: 3px;
}

.table-responsive-phonelist {
  border-collapse: collapse;
  border-spacing: 0;
  width: 48%;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: relative;
  height: 240px; 
  overflow-x: hidden; 
  overflow-x: auto; 
  color: <?PHP echo $colormode;?>;
  border-radius: 3px;
}
.table-responsive-driverstatus {
  border-collapse: collapse;
  border-spacing: 0;
  width: 48%;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: relative;
  height: 240px; 
  overflow-x: hidden; 
  overflow-x: auto; 
  color: <?PHP echo $colormode;?>;
  border-radius: 3px;
}

.table-responsive {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: relative;
  color: <?PHP echo $colormode;?>;
  border-radius: 3px;
}

.table-responsive {
  -sm|-md|-lg|-xl;
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
.container-dashboard {
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  border: 0px solid #ccc;
  border-radius: 5px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 980px;
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
.container{
  
 
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 10px;
  background-color: <?PHP echo $colormode;?>;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  resize: none;
  height: 100%;
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

.jobs {
  width: 50%;
  padding: 10px 15px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
  background-color: #fff;
  resize: none;
  height: 100%;
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
.container-menu {
  align-items: left;
  width: 50%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 1px solid #ccc;
  border-radius: 12px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 60%;
  margin-top: 3%;
  margin-bottom:;
  margin-left: 25%;
  margin-right: 25%;
}

.container-createjob {
  align-items: left;
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 1px solid #ccc;
  border-radius: 12px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 1000px;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10pxpx;
  margin-right: 10pxpx;
}

.container-searchjob {
  align-items: left;
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 12px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 100%;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10pxpx;
  margin-right: 10pxpx;
}

.container-customers {
  align-items: left;
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 12px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 100%;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10pxpx;
  margin-right: 10pxpx;
}

.container-alarm {
  align-items: left;
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 12px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 100%;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10pxpx;
  margin-right: 10pxpx;
}

.alarm {
  align-items: left;
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 12px;
  background-color: #fff;
  resize: none;
  height: 100%;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10pxpx;
  margin-right: 10pxpx;
}

.container-message {
  align-items: left;
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 12px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 800px;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10pxpx;
  margin-right: 10pxpx;
}

.container-alert {
  align-items: left;
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 12px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
  height: 800px;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10pxpx;
  margin-right: 10pxpx;
}

.container-suspension {
  align-items: left;
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 12px;
  background-color: #fff;
  resize: none;
  height: 800px;
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

.container-vehicle {
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
}

.btn-small {
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
}

input[type=text] {
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
input[type=text-half] {
  width: 32.3%;
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
input[type=text-fs] {
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
input[type=text-half-th] {
  width: 56%;
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
.container-users {
  align-items: left;
  width: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 12px;
  background-color: #fff;
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

.w3-bar-item {
  margin-top: 3px;
}

.textarea {
  width: 100%;
  height: 100px;
  padding: 12px 20px;
  box-sizing: border-box;
  box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
  border: 2px solid #ccc;
  border-radius: 10px;
  background-color: #fff;
  resize: none;
}

.container-alarms {
  width: 90%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 10px;
  background-color:<?PHP echo $colormode;?>;
  resize: none;
  height: 100%;
}

.container-message {
  width: 100%;
  height: 100%;
  padding: 10px 15px;
  box-sizing: border-box;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border: 0px solid #ccc;
  border-radius: 10px;
  background-color: <?PHP echo $colormode;?>;
  resize: none;
}

.row {
   display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%;
    /* IE10 */
  flex: 25%;
  text-align: left;
}

.col-10 {
  -ms-flex: 20%;
    /* IE10 */
  flex: 20%;
}

.col-5 {
  -ms-flex: 20%;
    /* IE10 */
  flex: 1%;
}
.col-35 {
  -ms-flex: 33%;
    /* IE10 */
  flex: 33%;
}

.col-50 {
  -ms-flex: 50%;
    /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%;
    /* IE10 */
  flex: 75%;
}

.col-25,.col-50, .col-75 {
  padding: 0 5px;
}

.table-responsive-widgets {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
  font-family: lato;
  position: relative;
  color: <?PHP echo $colormode;?>;
  border-radius: 7px;
}

.table-home {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: relative;
  color: #333;
  border-radius: 10px;
}

.table-customer {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: relative;
  color: #333;
  border-radius: 5px;
}

.table-popup {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: relative;
  color: #333;
  border-radius: 10px;
}

.table-home-widgets {
  border-collapse: collapse;
  border-spacing: 0;
  width: 30%;
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
  font-family: lato;
  position: relative;
  color: #333;
  border-radius: 7px;
}

.w3-bar {
  box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
  border-radius: 4px;
}

.w3-sidebar {
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  border: 3px;
}

.w3-red {
  color: #ff3333;
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
  width: 32%;
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
.selectCar {
  width: 18%;
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
.selectT-Mini {
  width: 8%;
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

.hdreport {
  width: 100%;
  height: 200px;
  padding: 0px 0px;
  box-sizing: border-box;
  box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2);
  border: 1px solid #ccc;
  color: #fff;
  border-radius: 10px;
  background-color: #000;
  resize: none;
}

.hr {
  width: 100%;
  margin-bottom: 1px;
  padding: 1px;
  border: 1px;
  border-radius: 1px;
  background: white;
  box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: block;
  color: #333;
  border-radius: 7px;
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

.lable-job {
  font-weight: bold;
  letter-spacing: 2.5px;
  padding: 1px;
  border-radius: 4px;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
  width: 40%;
  padding: 5px 5px;
  margin-top: 5px;
  margin-bottom: 3px;
}

input[type=search] {
  width: 40%;
  margin-bottom: 5px;
   padding: 15px;
  border: 3px;
  border-radius: 1px;
  background: white;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  font-family: lato;
  position: relative;
  color: #333;
  border-radius: 7px;
  height: 50px;
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

h1,h2,h3,h4,h5,h6,h7,h8 {
  font-weight: 100;
  letter-spacing: 2.5px;
  padding: 12px;
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
  width: 60%;
  padding: 5px 15px;
  margin-top: 30px;
  margin-bottom: 30px;
}
 div.scroll { 
                margin:4px, 4px; 
                padding:4px; 
                background-color: #000; 
                width: 100%; 
                height: 400px; 
                overflow-x: hidden; 
                overflow-x: auto; 
                text-align:justify; 
}
 div.scrollMiniChat { 
                margin:4px, 4px; 
                padding:4px; 
                background-color: #000; 
                width: 100%; 
                
                overflow-x: hidden; 
                overflow-x: auto; 
                text-align:justify; 
}


<?php //include('style-mini.php');?>