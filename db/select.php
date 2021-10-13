<?php  
 if(isset($_POST["server_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "diskominfo");   
      $query = "SELECT * FROM colocation WHERE no = '".$_POST["server_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
     
     while ($row = mysqli_fetch_array($result))
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Instansi</label></td>  
                     <td width="70%">'.$row["instansi"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>IP</label></td>  
                     <td width="70%">'.$row["ip"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Nama Server</label></td>  
                     <td width="70%">'.$row["nama_server"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>OS</label></td>  
                     <td width="70%">'.$row["os"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Prosesor</label></td>  
                     <td width="70%">'.$row["prosesor"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>RAM</label></td>  
                     <td width="70%">'.$row["ram"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Storage</label></td>  
                     <td width="70%">'.$row["storage"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>PSU</label></td>  
                     <td width="70%">'.$row["psu"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Merk</label></td>  
                     <td width="70%">'.$row["merk"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Serial Number</label></td>  
                     <td width="70%">'.$row["serial_number"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Location(Rack)</label></td>  
                     <td width="70%">'.$row["location"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Type Server</label></td>  
                     <td width="70%">'.$row["type_server"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Allocation</label></td>  
                     <td width="70%">'.$row["allocation"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Keterangan</label></td>  
                     <td width="70%">'.$row["keterangan"].'</td>  
                </tr> 
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>