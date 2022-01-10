<?php 

    if(isset($_FILES['file']))
    {
        $file = $_FILES['file'];
        // print_r($file);

        //file details
        $file_name = $file['name'];
        $file_tmp_name = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];

        //extracting file extension
        $file_ext = explode(".",$file_name);
        $file_ext = strtolower(end($file_ext));

        $allowed_ext = array('txt','png','jpeg','jpg');

        //Validate uploaded file
        if(in_array($file_ext,$allowed_ext)){
            if($file_error == 0){
                if($file_size < 1024*1024*5){
                    $file_size_mb = ($file_size/1024)/1024; 
                    // printf("File size is %.2f MB ",$file_size_MB);

                    $new_file_name = uniqid("",true).'.'.$file_ext;
                    $file_destination = "./uploads/".$new_file_name;

                    if(move_uploaded_file($file_tmp_name,$file_destination)){

                        $db_server_name = "localhost";
                        $db_user_name = "root";
                        $db_password = "!VEN@db118";
                        $db_name = "admin_login";
                    
                        $conn = mysqli_connect($db_server_name,$db_user_name,$db_password,$db_name);

                        $sql = "INSERT INTO pdf_files (name,size) values('$new_file_name', '$file_size_mb')";
                        
                        if(mysqli_query($conn,$sql)){
                            echo "File uploaded.";
                            $uploaded = 1;
                            // return 1;
                            header("location: admin.php");
                            
                        }
                        else{
                            die("Error(db): Unable to upload");
                            // return 0;
                            
                        }

                        
                        
                    }
                    // $new_file_name = uniqid("",true);

                }
                else{
                    echo "File size is large (It should be size < 1024 MB)";
                    // return 0;
                }
            }
            else{
                echo "Unable to upload a file";
                // return 0;
            }
        }
        else{
            echo "File format not supported";
            // return 0;
        }
    }

    // mysqli_colse();

?>

