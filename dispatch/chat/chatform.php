 


<!DOCTYPE html>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAueQwImftP3f98jhRB8dTbzItWbnxpa6c&callback=locateD&libraries=places"></script>
<script>

            var src_addr;
            var dest_addr;
          "use strict";

       function locateD(){
           
           const myLatLng = {
            
          lat: <?php 
          $lt= $_GET['lt'];
          if($lt!=null){
              $lat=$lt;
          }else if($lt==null) {
              $lat=40.730610;
          }
          echo $lat;
          ?>,
          lng: <?php 
          $ln=$_GET['lg'];
          if($ln!=null){
              $lng=$ln;
          }else if($ln==null) {
              $lng=40.730610;
          }
          
          echo $lng;
          ?>
        };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 10,
          center: myLatLng
        });
        new google.maps.Marker({
          position: myLatLng,
          map,
          title: ""
        });
        
       }
            
        function initialize() {
        
              autocomplete = new google.maps.places.Autocomplete(
                  /** @type {HTMLInputElement} */(document.getElementById('src_addr')),
                  { types: ['geocode'] });
                  
              google.maps.event.addListener(autocomplete, 'place_changed', function() {
              });
              
              autocomplete = new google.maps.places.Autocomplete(
                  /** @type {HTMLInputElement} */(document.getElementById('dest_addr')),
                  { types: ['geocode'] });
                  
              google.maps.event.addListener(autocomplete1, 'place_changed', function() {
              });
              
            }

</script>
<?php
include ('../c/api.php');
include('../c/c.php');
include('../c/nav/chatstyle.php');
?>


<?php include ('/home/ironxpxj/tdispatch.irontin.com/dispatch/c/nav/sidebar.php');?>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
	       
<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 10%;
  overflow-x: hidden;
  padding-top: 0px;
}

.left {
  left: 0;
  background-color: #111;
  height: 100%;
  width: 40%;
  position: fixed;
  z-index: 1;
  top: 10%;
  overflow-x: hidden;
  padding-top: 0px;
}

.right {
  right: 0;
  background-color: red;
  height: 100%;
  width: 60%;
  position: fixed;
  z-index: 1;
  top: 10%;
  overflow-x: hidden;
  padding-top: 0px;
}



     /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #000;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.lighter {
  border-color: #e6e6ff;
  background-color: #ccffcc;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style> 
   </head>
<?php 

include('../c/c.php');
include('../c/nav/chatstyle.php');
include($dbc);
include "$rootDir/dispatch/c/connnection.php";
?>
<body onload="locateD()">
<div class="left">

    <button class="btn-talk" onclick="BackToChathome()">Back</Button><br>
    
      <form  action=""  method="POST" id="myForm" name="myForm">
                    <input type="hidden" id="to"  name="to" value="<?php echo $_GET['uid'];?>">
                    
                    <input type="hidden" id="key" name="key" value="<?php echo $_GET['di'];?>">
                  
                    <input type="hidden" id="token" name="token" value="<?php echo $_GET['dp'];?>">
                     <textarea id="message" class="textarea"  name="message" placeholder="Message..." rows="" cols="" required></textarea>
                    <label class="">PickUp:</label>
       <input id="src_addr" name="src_addr" type="text" class="input" oninput="initialize()"  placeholder="Enter Pickup Address" required><br>
       <label>DropOff :</label>
        <input  id="dest_addr"  name="dest_addr" type="text"  class="input" oninput="initialize()"   placeholder="Enter Drop Address" required><br>
             
                <input type="button" class="btn-talk" id="button" name="savebutton" value="Send" >
               
               </form>
               <div id="controls">
                   <button class="btn"  id="recordButton">Speak</button>
  	               <button  class="btn" id="pauseButton" disabled>Pause</button>
  	               <button class="btn" id="stopButton" disabled>Stop</button>
  	               
  	               <button class="btn"style="align:right" id="clear" >Clear Record</button>
                </div>
              
                <p align="left" style="size:15px" id="recordingsList"></p> 
                 <hr style="color:white"> 
                <div  class="scroll">
               
              
                       <div  id=""> </div>
                       <?php include('readvoicesall.php');?>
                       
                </div>

</div>

<div class="right">
  
   <div class="scroll" id="map"></div>
   
  
</div>
     
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<script>
      "use strict";

      function initMap() {
        const myLatLng = {
            
          lat: <?php 
          $lt= $_GET['lt'];
          if($lt!=null){
              $lat=$lt;
          }else if($lt==null) {
              $lat=40.730610;
          }
          echo $lat;
          ?>,
          lng: <?php 
          $ln=$_GET['lg'];
          if($ln!=null){
              $lng=$ln;
          }else if($ln==null) {
              $lng=40.730610;
          }
          
          echo $lng;
          ?>
        };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 10,
          center: myLatLng
        });
        new google.maps.Marker({
          position: myLatLng,
          map,
          title: ""
        });
      }
</script>            
           
<script>

function getUrlVars() {
        
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
    }
    var sender = getUrlVars()["di"];
    var reciever  = getUrlVars()["uid"];
    var token= getUrlVars()["dp"];

    
         
	
	function chat_ajax(){
	    
		var req = new XMLHttpRequest();
		
		req.open('GET','readv.php?q='+token+'&sender='+sender+'&reciever='+reciever,true);
		
		req.send();
		
		req.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200){
				document.getElementById('chat').innerHTML = this.responseText;
			}
		}
		
	}
	
	setInterval(function(){chat_ajax()}, 10)
	
</script> 
</div>
                   
<script>

function BackToChathome() {
       
       location.replace("/dispatch/v/dashboard.php");
    }
</script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>
        $(document).ready(function(){
        
            $("#button").click(function(){
                var to=$("#to").val();
                var message=$("#message").val();
                var src_addr=$("#src_addr").val();
                var dest_addr=$("#dest_addr").val();
                 var key=$("#key").val();
                 var token=$("#token").val();
                $.ajax({
                    url:'sendchatmessages.php',
                    method:'POST',
                    data:{
                        to:to,
                        token:token,
                        key:key,
                        message:message,
                        src_addr:src_addr,
                        dest_addr: dest_addr
                    },
                   success:function(data){
                      document.getElementById("myForm").reset();
                   }
                });
            });
            
        });
    </script>

<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
<script>
    //webkitURL is deprecated but nevertheless
URL = window.URL || window.webkitURL;

var gumStream; 						//stream from getUserMedia()
var rec; 							//Recorder.js object
var input; 							//MediaStreamAudioSourceNode we'll be recording

// shim for AudioContext when it's not avb. 
var AudioContext = window.AudioContext || window.webkitAudioContext;
var audioContext //audio context to help us record

var recordButton = document.getElementById("recordButton");
var stopButton = document.getElementById("stopButton");
var pauseButton = document.getElementById("pauseButton");
var clearButton = document.getElementById("clearButton");

//add events to those 2 buttons
recordButton.addEventListener("click", startRecording);
stopButton.addEventListener("click", stopRecording);
pauseButton.addEventListener("click", pauseRecording);



function startRecording() {
	console.log("recordButton clicked");

	/*
		Simple constraints object, for more advanced audio features see
		https://addpipe.com/blog/audio-constraints-getusermedia/
	*/
    
    var constraints = { audio: true, video:false }

 	/*
    	Disable the record button until we get a success or fail from getUserMedia() 
	*/

	recordButton.disabled = true;
	stopButton.disabled = false;
	pauseButton.disabled = false

	/*
    	We're using the standard promise based getUserMedia() 
    	https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia
	*/

	navigator.mediaDevices.getUserMedia(constraints).then(function(stream) {
		console.log("getUserMedia() success, stream created, initializing Recorder.js ...");

		/*
			create an audio context after getUserMedia is called
			sampleRate might change after getUserMedia is called, like it does on macOS when recording through AirPods
			the sampleRate defaults to the one set in your OS for your playback device

		*/
		audioContext = new AudioContext();

		//update the format 
		//document.getElementById("formats").innerHTML="Format: 1 channel pcm @ "+audioContext.sampleRate/1000+"kHz"

		/*  assign to gumStream for later use  */
		gumStream = stream;
		
		/* use the stream */
		input = audioContext.createMediaStreamSource(stream);

		/* 
			Create the Recorder object and configure to record mono sound (1 channel)
			Recording 2 channels  will double the file size
		*/
		rec = new Recorder(input,{numChannels:1})

		//start the recording process
		rec.record()

		console.log("Talk in Mic");

	}).catch(function(err) {
	  	//enable the record button if getUserMedia() fails
    	recordButton.disabled = false;
    	stopButton.disabled = true;
    	pauseButton.disabled = true
	});
}

function pauseRecording(){
	console.log("pauseButton clicked rec.recording=",rec.recording );
	if (rec.recording){
		//pause
		rec.stop();
		pauseButton.innerHTML="Resume";
	}else{
		//resume
		rec.record()
		pauseButton.innerHTML="Pause";

	}
}

function stopRecording() {
	console.log("stopButton clicked");

	//disable the stop button, enable the record too allow for new recordings
	stopButton.disabled = true;
	recordButton.disabled = false;
	pauseButton.disabled = true;

	//reset button just in case the recording is stopped while paused
	pauseButton.innerHTML="Pause";
	
	//tell the recorder to stop the recording
	rec.stop();

	//stop microphone access
	gumStream.getAudioTracks()[0].stop();

	//create the wav blob and pass it on to createDownloadLink
	rec.exportWAV(createDownloadLink);
}

function createDownloadLink(blob) {
	var di = getUrlVars()["di"];
    var uid = getUrlVars()["uid"];
    var ke= getUrlVars()["dp"];
    d=di+ke;
	var url = URL.createObjectURL(blob);
	var au = document.createElement('audio');
	 var li = document.createElement('label');
	var link = document.createElement('a');

	//name of .wav file to use during upload and download (without extendion)
	var filename = new Date().toISOString();

	//add controls to the <audio> element
	au.controls = true;
	au.src = url;

	//save to disk link

	link.href = url;
	link.download = filename+".wav"; //download forces the browser to donwload the file using the  filename
	link.innerHTML = "Save to disk";
	

	//add the new audio element to li
	li.appendChild(au);
	
	//add the filename to the li
	//li.appendChild(document.createTextNode(filename+".wav "))

	//add the save to disk link to li
	//li.appendChild(link);
	
	//upload link
	var upload = document.createElement("BUTTON");
	
	//upload.href="";
    upload.innerHTML = "<br>";
	upload.innerHTML = "Send Voice";

	
	upload.addEventListener("mouseover", function(event){
	    
		  var xhr=new XMLHttpRequest();
		  
		  xhr.onload=function(e) {
		      
		      if(this.readyState ===1) {
		          
		          console.log("Server returned: ",e.target.responseText);
		      }
		  };
		  
		  var fd=new FormData();
		  
		  fd.append("audio_data",blob, filename);
		  
		  xhr.open("POST","sendvoice.php?token="+ke+"&di="+di+"&diu="+uid,true);
		  
		  xhr.send(fd);
	})
	

	
	li.appendChild(document.createTextNode (""))//add a space in between
	li.appendChild(upload)//add the upload link to li

	//add the li element to the ol
	recordingsList.appendChild(li);
	
	var cliB = document.createElement("p");
		cliB.innerHTML= "Clear Record";
	cliB.addEventListener("mouseout", function(event){
	    
	  location.replace(window.location.href);
	   

	})
}
</script>


<?php include($ft);?> 