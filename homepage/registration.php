<?php
include ("database.php");

session_start();
$name ='';
$age ='';
$department ='';
$email ='';
$update =false;
if (isset($_POST['save']))
{
    $t = $_POST['name'];
    $u = $_POST['department'];
    $p = $_POST['age'];
    $c = $_POST['email'];
 
    //This is insertion query of mysql
    $i = "insert into reg(name,department,age,email)value('$t','$u','$p','$c')";
 
    //On extend version of mysql, mysqli takes two parameters where First is connection variable and second is query variable
    mysqli_query($conn, $i);    
}
if(isset($_GET['edit']))
{
    $update = true;
    $id = $_GET['edit'];
    $tableresult = mysqli_query($conn, "select * from reg where id =$id")
    or die($tableresult->error_reporting());

    $row = $tableresult->fetch_assoc();
    $name = $row['name'];
    $department = $row['department'];
    $age = $row['age'];
    $email = $row['email'];
}
// if (isset($_POST['update'])) 
// {
//     $t = $_POST['name'];
//     $u = $_POST['department'];
//     $p = $_POST['age'];
//     $c = $_POST['email'];
//     $z = $_POST['id'];

//     //$i = "update reg set name='$t',department='$u',age='$p',email='$c' where id = $z";
//     $u = "update reg set name='$t',department='$u',age='$p',email='$c' where id = $z";
//     mysqli_query($conn,$u);
// }
// if(isset($_POST['delete']))
// {
//     $z = $_POST['id'];
//     $d="delete from reg where id = $z";
//     mysqli_query($conn,$d);
// }

?>

<!DOCTYPE html>
<html >
    <header>
        <title>Welcome</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
    </header>
    <body>
        <br>
        <h1 class="display-2">Student Registration - <strong> PHP CRUDE EXAMPLE</strong></h1>
        <div class="container">
            <form action="registration.php" method="POST"> 
            <div class="row">
       <div class="col-sm-6">

            <label>Name</label>
            <input id="name" type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Enter Name" />
            <label>Department</label>
            <input id="name" type="text" class="form-control" name="department" value="<?php echo $department; ?>" placeholder="Enter Department" />

        </div>
        <div class="col-sm-6">
            <label>Age</label>
            <input id="name" type="number" class="form-control" name="age" value="<?php echo $age; ?>" placeholder="Enter Age" />
            <label>Email</label>
            <input id="email" type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Enter Email" />
        </div>
         <div class="row"><br>
         <div class="col-md-6">
            <div class="form-group">
                <?php 
                if($update == true): $_SESSION['id']=$_GET['edit']; ?>
                <button type="submit" name="update" class="btn btn-primary">update</button>
                <?php 
                else: 
                ?>
                <button type="submit" name="save" class="btn btn-success">save</button>
                <?php 
                endif; ?>
                <button type="reset" name="cancel" class="btn btn-danger">cancel</button>
         </div>
        </div>
  
        </form>
        
        <table class="table table-striped table-bordered table-hover table-responsive" style="padding-top: 30px">
            <thead class="table-responsive" id="table-responsive-container">
                <tr class="table-responsive-header">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
               
                // if(isset($_POST['save']) || isset($_POST['select']))
                
                $tableresult = mysqli_query($conn, "SELECT * FROM reg")
                         or die($tableresult->error_reporting());
                 while($row = $tableresult->fetch_assoc()):  ?>
                 
                    <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['department']?></td>
                    <td><?php echo $row['age']?></td>
                    <td><?php echo $row['email']?></td>
                    <td>
                      <a href="registration.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>  
                      <a href="registration.php?delet=<?=$row['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" role="button" class="btn btn-danger">Delete</a>
                    <td>  
                    </tr>
                
                 <?php endwhile; ?>
                
            </tbody>
        </table> <br />
        <div> <br />
            </div>
            <br />
            <div class="col-sm-2">
            <input id="id" type="number" class="form-control" name="id"  placeholder="id" />
            </div>
    </body>
</html>