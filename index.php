<html>
<head>
<title>ITF Lab</title>
</head>
<body class="font-mail">
    <div class="container">
        <div class="row-md-5 row-sm-12">
          <div class="col">
              <div class="card md-3 col-sm-12">
                  <?php
                  $conn = mysqli_init();
                  mysqli_real_connect($conn, 'apirat.mysql.database.azure.com', 'it63070185@apirat', 'UEKyfj18', 'ITFlab', 3306);
                  if (mysqli_connect_errno($conn))
                  {
                      die('Failed to connect to MySQL: '.mysqli_connect_error());
                  }
                  $res = mysqli_query($conn, 'SELECT * FROM guestboook');
                  ?>
                  <div class="card-header bg-primary text-white d-flex justify-content-between">
                    <h3>HOME</h4>
                    <a href="form.php" class="btn btn-success">ADD</a>
                  </div>
                  <table width="600" border="1">
                    <tr>
                      <th width="100"> <div align="center">Name</div></th>
                      <th width="350"> <div align="center">Comment </div></th>
                      <th width="150"> <div align="center">Link </div></th>
                    </tr>
                  <?php
                  while($Result = mysqli_fetch_array($res))
                  {
                  ?>
                    <tr>
                      <td><?php echo $Result['Name'];?></div></td>
                      <td><?php echo $Result['Comment'];?></td>
                      <td><?php echo $Result['Link'];?></td>
                    </tr>
                  <?php
                  }
                  ?>
                  </table>
                  <?php
                  mysqli_close($conn);
                  ?>
                </div>
            </div>
        </div>  
    </div>              
</body>
</html>
