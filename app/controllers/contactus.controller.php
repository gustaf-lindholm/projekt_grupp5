<?php
class Contactus extends Base_Controller
{
    public function index() {
        $this->initModel('Contactus_model');
        // Render the correct view
        $this->reqView('contactus');
        
    }

    
    public function createNewPosts() {
        if(isset($_POST['submit'])){

            $file = $_FILES['file'];
        
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];
        
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
        
            $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        
            if(in_array($fileActualExt, $allowed)) {
                if($fileError === 0){
                    if($fileSize < 1000000) {
                            $fileNameNew = uniqid('', true).".".$fileActualExt;
                            $fileDestination = URLrewrite::BaseURL().'/uploads'.'/'.$fileNameNew;
                            move_uploaded_file($fileTmpName,$fileDestination );
                            echo $fileNameNew;
                            echo '<img src="'.URLrewrite::BaseURL().'/uploads'.'/'.$fileNameNew.'"/>';
                            $this->reqView('home');
                            //header("Location: index.php?uploadsuccess");
                    } else{
                        echo "Your file is too big!";
                    }
                }else{
                    "There was an error uploading your file!";
                }
            } else{
                echo "You cannot upload files of this type";
            }
        }
    }
}
