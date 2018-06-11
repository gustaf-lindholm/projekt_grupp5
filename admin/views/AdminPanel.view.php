<?php if ($_SESSION['loggedIn']['level'] === '4')
{?>
    <div class="form-container">
    <?php include ADMIN_VIEW.'adminPanelNav.view.php'; ?>
    <h1>Hallå</h1>
    </div>
<?php
} else {
    echo "You do not have permission";
}
