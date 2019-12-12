<html>
<head>
	<title>Update In Progress...</title>
</head>
<body>
    <?php
        include("connect.inc.php");
        include("auth.inc.php");
        $description =$_POST['description'];
        $display_order =$_POST['display_order'];
        $active =$_POST['active'];

        if($_POST["update"]){
            $item_code = $_POST['item_code'];
            $sentence ="UPDATE ITEMS SET description='$description', display_order='$display_order', active='$active' WHERE item_code='$item_code'";
            echo $sentence;//debug
		    $return = mysqli_query($conn,$sentence);
            if ($return == TRUE){
                echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=update.php\">";
            }else{
                die("dead!".mysqli_error($conn));
		    }
        }elseif($_POST["delete"]){
            $item_code = $_POST['item_code'];
            $sentence ="DELETE FROM ITEMS WHERE item_code='$item_code'";
		    $return = mysqli_query($conn,$sentence);
            if ($return == TRUE){
                echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=update.php\">";
            }else{
                die("dead!".mysqli_error($conn));
		    }
        }elseif($_POST["add"]){
            $fac_id = $_POST['fac_id'];
            $category = $_POST['category'];
            $sentence ="INSERT INTO ITEMS (fac_id,category,display_order,active,description) 
            VALUES ('$fac_id','$category','$display_order','$active','$description')";
            $return = mysqli_query($conn,$sentence);
            if ($return == TRUE){
                echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=update.php\">";
            }else{
                die("dead!".mysqli_error($conn));
		    }

        } else{
            echo "<script type='text/javascript'>alert('Unknown Request!');</script>";
            echo "<META HTTP-EQUIV=\"refresh\" content=\"2; URL=logout.php\">";
        }
    ?>
</body>
</html>