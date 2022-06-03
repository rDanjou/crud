<?php
    $id = $_POST['id'];
    if(isset($_POST["id"])){
        deleteCategory($id);
    };
    function deleteCategory($id){
        $db = new PDO('mysql:host=localhost;dbname=html','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $sql = "DELETE FROM users WHERE users.id IN ($id)";
        try{
            $query = $db->prepare($sql);
            $query->execute($valeur);
            header('Location: ../administration/index.php');
        }catch(Exception $e){
            echo 'erreur:' .$e->getMessage(); 
        }
    }
?>