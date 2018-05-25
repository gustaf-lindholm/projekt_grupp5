<?php
class Home extends base_controller 
{
    public function index($name = "")
    {
        $this->initModel('User_model');
        //var_dump($this->modelObj);
        $this->modelObj->name = $name;

        $this->reqView('home', ['name' => $this->modelObj->name]);
        
        //var_dump($this->modelObj);
    }

    public function searchDatabase()
    {
        if(isset($_POST['search']))
        {
        $this->initModel('User_model');
        $data['search'] = $this->modelObj->searchDatabase();
        $this->reqView('home');
        }
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