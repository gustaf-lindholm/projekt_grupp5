<?php if ($_SESSION['loggedIn']['level'] === '4')
{?>
    <div class="form-container">
    <?php include ADMIN_VIEW.'adminPanelNav.view.php'; ?>
    <h1>Hallå</h1>
    </div>
<?php
echo md5('abc');
} else {
    echo "You do not have permission";
}
