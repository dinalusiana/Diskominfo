<?php  
 $connect = mysqli_connect("localhost", "root", "", "diskominfo") or die(mysqli_error());
 $query2 = "SELECT * FROM rak";  
 $result2 = mysqli_query($connect, $query2);
 $occupied_array = array(1=>0, 2=>0, 3=>0, 4=>0, 5=>0, 6=>0);  
 ?>  

 <!DOCTYPE html>  
 <html> 

 <meta charset="utf-8">  
  <style> 
  .flex-container {
      display: flex;
      flex-wrap: wrap;
      background-color:#FFFFFF;
      width: 100% !important;
      height: 100% !important;
      padding: 0 60px;
      /*justify-content: center;*/
    }
  /*.container1{
    display: flex;
    flex-direction: wrap;
    margin-left: 5px;
    align-content: left;
    box-sizing: border-box;
    width: 100% !important;
    height: 100% !important;
  }*/
  .row1{
      background-color: transparent !important;
      width: 200px !important; height: 1710.060px !important;
      margin: 10px !important;
      box-sizing: border-box;
      display: absolute;
    }     
    .nama-rak{
      background-color: #073486;
      /*border: 2px solid #252626;*/
      text-align: center;
      width: 200px; height: 30px;
      border-radius: 6px;
      margin: 5px 0;
      padding-top: 0.2px;
      padding-bottom: 1px;
      color: white;
    }
    .rak{
      background-color: #073486;
      width: 200px; height: 1621.060px;
      margin: 10px 0;
      padding: 15px 15px;
      box-sizing: border-box;
      border-radius: 5px;
      display: flex;
      flex-wrap: wrap;
    }
    .latar{
      width: 200px; height: 1591.060px; /*cara agar pas height 500px, latarnya yg putih ga kelebihan?*/
      padding: 5px 5px;
      background-color: #E3DDDD;
      box-sizing: border-box;
    }
    .server{
      background-color: #5C6593;
      border-radius: 3px;
      /*display: flex;
      flex-wrap: wrap;*/
      cursor: move;
      position: relative;
      box-shadow: 0 0 5px hsla(0,0%,0%,.4);
    }
    .switch{
      background-color: #4C4C4E;
      border-radius: 3px;
      /*display: flex;
      flex-wrap: wrap;*/
      cursor: move;
      position: relative;
      box-shadow: 0 0 5px hsla(0,0%,0%,.4);
    }
    .isi{
      width: 100%; height: 10px;
      margin: 2.8px 0;
      display: flex;
      display: -webkit-box;
      display: -ms-flexbox;
      padding: 15px 15px;
      box-sizing: border-box;
      cursor: move;
      position: relative;
    }
    /*.batas{
      width: 100%; height: 10px;
      margin: 2.8px 0;
      display: flex;
      display: -webkit-box;
      display: -ms-flexbox;
      padding: 15px 15px;
      box-sizing: border-box;
      position: relative;
      border: groove;
    }*/
    .kol{
      height: 100%;    
      margin: 0 2px;
      padding: 5px 5px;
      box-sizing:border-box;
      background-color: #D4D7DD;
      border-radius: 1px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .kol > div{
      background-color: #3C3C3C;
      margin: 0 1px;
      padding: 4px;
      font-size: 30px;
      border-radius: 2px;
    }
    .kol:nth-child(2){
      margin: 0 5px !important;
    }

</style>

<div class="flex-container">
      <head>  
           <!-- <title>Data Colocation server Data Center</title>   -->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      
<body>
<!-- <br /><br />
  <h3 align="center">Rackmount Data Center</h3>  
<br/>  -->
<!-- <div class="container1">   -->
     <?php while($row = mysqli_fetch_array($result2)){ ?>
    <!--Data Rackmount 1-->
    <a class="row1">
      <div class="nama-rak">
        <h5 style="vertical-align: center;">
          <?= $row['location']?>
        </h5>
      </div>
      
      <div class="rak">
        <div class="latar">
          <!-- <div class="batas"> -->


          <div class="isi switch" title="Switch">
              <div class="kol">
                <div class="port">
                  
                </div>
                <div class="port">
                  
                </div>
                <div class="port">
                  
                </div>
                <div class="port">
                  
                </div>
              </div>
              <div class="kol">
                <div class="port">
                  
                </div>
              </div>
              <div class="kol">
                <div class="port">
                  
                </div>
                <div class="port">
                  
                </div>
                <div class="port">
                  
                </div>
              </div>
          </div>

                    <?php
                    $query_limit = "SELECT * FROM colocation WHERE `location` = {$row['no']}";  
                    $result = mysqli_query($connect, $query_limit);
                    
                    $occupied =0;
                    while($rows = mysqli_fetch_array($result))  
                    {
                         for($i=0; $i<(int)$rows['allocation']; $i++){
                          $occupied = $occupied + 1;
                    ?>
                    <div name="view"  id="<?php echo $rows["no"]; ?>" class="isi server" title="Server"><div class="kol"><div class="port"></div><div class="port"></div><div class="port"></div><div class="port"></div></div><div class="kol"><div class="port"></div></div><div class="kol"><div class="port"></div><div class="port"></div><div class="port"></div></div></div> 
                    <?php  
                         }
                    }  
                    ?>  
          <!-- </div>      -->
        </div>
      </div> 
                    <?php
                    // $a = 0;
                    // $sql = mysqli_query($connect,"SELECT * FROM colocation WHERE `location` = {$row['no']} ORDER BY no");
                    // while($row = mysqli_fetch_array($sql)) {
                    //      $a++;
                    //      $total[$a] = $row['allocation'];
                    // }
                    echo "Total Allocation : ".$occupied;
                    ?><?php } 
                    ?>
                    <?php
                    if ($occupied > 42)
                    {
                         echo "Maaf Allocation Server sudah Penuh";
                    }
                    ?>
         </a>
      </div> 
    </body>
  </div>
 </html>  
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>   -->
                     <center>
                     <h4 class="modal-title">Detail Server</h4> 
                     </center> 
                </div>  
                <div class="modal-body" id="detail_server">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 
 <script>  
 $(document).ready(function(){  
      $('.server').click(function(){  
           var server_id = $(this).attr("id");  
           $.ajax({  
                url:"../db/select.php",  
                method:"post",  
                data:{server_id:server_id},  
                success:function(data){   
                     $('#detail_server').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  

 </script>
