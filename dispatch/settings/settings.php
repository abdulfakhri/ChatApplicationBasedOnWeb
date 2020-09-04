<?php include ('../c/api.php');
 include ('../c/c.php');
 include ($nav);
 include ('/home/aidifxin/cloud/dispatch/m/settingsAPI/setting_api.php');
?>



                <div class="row">
                        
                           
                           <div class="col-lg-6" style="background-color:<?PHP echo $colormodeComponent;?>;  border-radius:5px;width:50%; border:px solid #ccc">
                             
                              <form action=""  name="" method="post" style="background-color:<?PHP echo $colormodeComponent;?>;  border-radius:5px;width:%; border:px solid #ccc" >
                                    <input type="hidden" name="id"  value="<?php echo $_SESSION['id'];?>"/>
                                    <label>Modify Company Name</label><br>
                                    <input  class="input" type="text-half" placeholder="Comapny Name" id="title" name="title" /><br>
                                    <label>Select Color Mod</label><br>
                                    <select class="selectT" name="background" id="background" >
                                        <option>Light</option>
                                        <option>Dark</option>
                                    </select>
                                    <br>
                                    
                                   <label>Map Type</label><br>
                                   <select class="selectT" name="map" id="map" >
                                        <option>Geolocation</option>
                                        <option>Normal Map</option>
                                    </select><br>
                                   
                                   <label>Unit System</label><br>
                                   <select  class="selectT" name="meteric" id="meteric" >
                                        <option>mile</option>
                                        <option>km</option>
                                    </select>
                                   <br>
                                  
                                    <button type="submit"  class="btn" name='setting'>Save Changes</button>
                                     <button type="reset" class="btn btn-default">Clear Form </button>
                                 </form>
                 
                           </div>
                          
                 </div>
                
        
<?php include ($ft);?>
       