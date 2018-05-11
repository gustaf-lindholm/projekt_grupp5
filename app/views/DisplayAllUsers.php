<div class="prod-container">
    
        <?php

        foreach ($userData as $userInfo) {
            $userProperties = explode("/", $userInfo['properties']);
            echo "<div class='prodBox'>";
            echo "<h1>" . $userInfo['fname'] ." ".$userInfo['lname']. "</h1>";
            printf("<p class='prodImg' placeholder='%s'></p>", $userInfo['uid']);
            echo "<ul>";
            foreach ($properties as $value) {
                printf("<li>%s</li>", ucfirst($value));
                
            }
            echo "</ul></div>";
        }
        ?>    
</div>