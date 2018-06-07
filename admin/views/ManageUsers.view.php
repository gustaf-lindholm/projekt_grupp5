
<!-- <div class="form-container"> -->
<?php
    // Print response on product option insert
    if(Registry::getStatus('deleteUser') !== null && Registry::getStatus('deleteUser') == true)
    {
        echo '<div class="alert alert-success alert-dismissible grid-alert" role="alert">User deleted!</div>';

    } elseif (Registry::getStatus('deleteUser') != null && Registry::getStatus('deleteUser') == false) {
        echo '<div class="alert alert-danger alert-dismissible grid-alert" role="alert">Failed to delete user!</div>';
    } ?>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Show all users
</button>
<div class="collapse" id="collapseExample">
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">List of all users</h3>
  </div>
  <div class="panel-body">
  <div class="form-container">
    <table class="grid-table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Level</th>
                <th scope="col">Username</th>
                <th scope="col">Registration date</th>
                <th scope="col">Edit info</th>
                <th scope="col">remove</th>
            </tr>
        </thead>
        <tbody class="">
            <?php
                $optionInfo = "";
                foreach ($data['users'] as $key => $value) {
                    $optionInfo .= "<tr><td>".$value['fname'].' '.$value['lname']."</td>";
                    $optionInfo .= "<td>".$value['level_type']."</td>";
                    $optionInfo .= "<td>".$value['username']."</td>";
                    $optionInfo .= "<td>".$value['creation_time']."</td>";
                    
                    //edit button
                    $optionInfo .= '<td><a href="'
                    .URLrewrite::BaseAdminURL('manageUsers/getUserInfo').'/'.$value['uid']
                    .'"<span class="glyphicon glyphicon-pencil"></span></a></td>';
                    
                    // delete button
                    $optionInfo .= '<td><a href="'
                    .URLrewrite::BaseAdminURL('manageUsers/deleteUser').'/'.$value['uid']
                    .'"<span class="glyphicon glyphicon-remove"></span></a></td>';
                    $optionInfo .= "</tr>";
                }?>
                
                <?php echo $optionInfo ?>

        </tbody>
    </table>
    </div>
    </div>
  </div>
</div>



<?php
echo "<pre>";
var_dump(Registry::getStatus());
var_dump($data);
?>