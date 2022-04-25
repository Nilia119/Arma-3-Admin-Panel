<?php
require "init.php";
$id = "true";
if (!$id) {
    header("Location: login.php");
}
HEAD::printHead("Mitglieder - Admin Panel","index.css");

$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInUser();
if(!$id)
{
    header("Location: login.php");
}
?>

<body>
<?php
Navbar::printNavbar();
?>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="padding-top: 40px;padding-bottom: 64px;">Mitglieder Verwaltung</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xl-4 offset-xl-0" style="margin-bottom: 9px;">
                <div class="d-grid gap-2"><button class="btn btn-primary" type="button" data-bs-target="#modal-1" data-bs-toggle="modal" style="padding-left: 80px;padding-right: 80px;padding-top: 6px;margin: 0;filter: blur(0px);">Benutzer hinzufügen</button></div>
            </div>
            <div class="col-md-4" style="margin-bottom: 9px;">
                <div class="d-grid gap-2">
                    <div class="dropdown d-grid gap-2"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Benutzer bearbeiten</button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#" data-bs-target="#modal-7" data-bs-toggle="modal">Name</a><a class="dropdown-item" href="#" data-bs-target="#modal-3" data-bs-toggle="modal">Rang</a><a class="dropdown-item" href="#" data-bs-target="#modal-4" data-bs-toggle="modal">Link zum Profil</a><a class="dropdown-item" href="#" data-bs-target="#modal-5" data-bs-toggle="modal">Position</a><a class="dropdown-item" href="#" data-bs-target="#modal-6" data-bs-toggle="modal">Dienstposition</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom: 9px;">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" data-bs-target="#modal-8" data-bs-toggle="modal" style="padding-left: 80px;padding-right: 80px;padding-top: 6px;margin: 0px;">Benutzer löschen</button>
                </div>
            </div>
        </div>
    <?php
    AdminPanelServices::getInstance()->getTables()->spawnMemberTable();
    ?>
    </div>

<?php
AdminPanelServices::getInstance()->getModal()->spawnAddUser();
AdminPanelServices::getInstance()->getModal()->spawnChangeRank();
AdminPanelServices::getInstance()->getModal()->spawnChangeProfile();
AdminPanelServices::getInstance()->getModal()->spawnChangeDienstPosition();
AdminPanelServices::getInstance()->getModal()->spawnChangeName();
AdminPanelServices::getInstance()->getModal()->spawnChangePosition();
AdminPanelServices::getInstance()->getModal()->spawnDeleteUser();
?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>