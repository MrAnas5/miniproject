<?php
$dbc= mysqli_connect('localhost','root','','anas')or die("Bad Connect:");
echo"Success";
$req = "SELECT * FROM `categorie`";
$result = mysqli_query($dbc, $req);
?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <br>
    <span>
    <a href ="article.php">Gestion article</a>
    <a href ="option.php">Gestion option</a>
    <a href ="categorie.php">Gestion categorie</a>

     </span>
    <div>
    <table class="table">
    <thead>
            <th>id  </th>
            <hr>
            <th>marque </th>
            <th>saison</th>
    
    </thead>

    <tbody>
    
    <?php   while ($row = mysqli_fetch_object($result))
                {?>                <tr>
                                    <td><?php echo $row->id;?></td>
                                    <td><?php echo $row->marque;?></td>
                                    <td><?php echo $row->saison;?> </td>
                                                               
                                        <td>
                                        
                             <a href="edit.php?id=<?php echo $row->id;?>"><button class="btn btn-primary" >Modifier <i class="far fa-edit"></i> </button></a>
                             <a href="delete.php?id=<?php echo $row->id;?>"><button class="btn btn-danger">Suprimer <i class="fas fa-trash-alt"></i></button></a>
                                           
                                   
                                        </td>
                                        </tr>
                        <?php } ?>  
    </tbody>
    
    </table>
 <br>  
   
    </div>
</body>
