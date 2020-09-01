<?php
include("db.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $query = "SELECT * FROM tareas WHERE id = $id";
    
    $result = mysqli_query($conn,$query);  
    
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $query = "UPDATE tareas SET title = '$title', description = '$description' WHERE id = $id";
    $result = mysqli_query($conn,$query); 
    
    header("Location: index.php");
    
}

?>



<?php include("includes/header.php");?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_task.php?id=<?php echo $_GET['id']; ?>" method="post">
                   <div class="form group">
                        <input type="text" placeholder="update Title" class="form-control" name="title" value="<?php echo $title ?>">
                   </div>
                   <div class="form-group">
                       <textarea name="description" rows="2" class="form-control" placeholder="Update Description"><?php echo $description ?></textarea>
                   </div>
                    <button class="btn btn-success" name="update">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>




<?php include("includes/footer.php");