<?php
include("db.php");
    
if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $descripcion = $_POST['description'];
    
    $query = "INSERT INTO tareas(title, description) VALUES('$title','$descripcion')";
    
    $result = mysqli_query($conn,$query);
    
    if(!result){
        die("query failed");
    }
    
    $_SESSION['message'] = 'Task Successfully';
    $_SESSION['message_type'] = 'success';
    
    header("Location: index.php");
    
}

?>