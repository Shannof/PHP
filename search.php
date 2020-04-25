<?php
    include'header.php';
?>
    <td>
    <h2>The Search</h2>
    
        <?php
        if(isset($_POST['submit-search'])) {
            $search= mysqli_real_escape_string($conn, $_POST['search']);
            $sql="SELECT * FROM article WHERE a_title = '$search'";
            $result= mysqli_query($conn, $sql);
            $queryResult= mysqli_num_rows($result);
            if($queryResult>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo"
                    
                        <h3>".$row['a_title']."</h3>
                        <p>".$row['a_text']."</p>
                    </td>
                    <tr>
                        <td style='width:80%;height:50px;background:#".$row['a_color']."'>
                        
                        </td>
                    </tr>
                    ";}

                }else{
                    echo"No Result";
                }

            }
        


        ?>
    
    

<?php
    include'footer.php';
?>