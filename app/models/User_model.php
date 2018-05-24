<?php

class User_model extends Base_model
{
    public function getAllUsers()
    {
        $this->sql = 
        "SELECT user.uid, user.level_id, user.fname, user.lname, user.phone, user.email, user_levels.level_type FROM user
        INNER JOIN  user_levels ON user.level_id = user_levels.level_id";
        $this->prepQuery($this->sql);
        $this->getAll();
        return self::$data;
    }

    public function getUser($uid)
    {
    	$this->sql = 
        "SELECT user.uid, user.level_id, user.fname, user.lname, user.phone, user.email, user_levels.level_type, account.username FROM user 
		INNER JOIN user_levels ON user.level_id = user_levels.level_id
		INNER JOIN account ON user.uid = account.uid 
		WHERE user.uid = :uid AND account.username = :username";
        $this->prepQuery($this->sql);
        $this->getOne();
        return self::$data;
    }

    public function searchDatabase()
    {
        if (isset($_POST['search'])) {
            $this->sql = "SELECT title FROM product WHERE title LIKE '%$title%' LIMIT 5;";
            //$title = $_POST['search'];
            $title = $_POST['search'];
            $paramBinds = [':title' => $title];
            $this->prepQuery($this->sql, $paramBinds);
            $data = $this->getAll();
    
            return $data;

         echo '<ul>';
 
        while ($data) {
 
       ?>
         <li onclick='fill("<?php echo $data['title']; ?>")'>
        <a><?php echo $data['title']; ?></li></a>
 
   <?php
 
}}
 
 
?>
 
</ul>

    <?php
    }
}
?>