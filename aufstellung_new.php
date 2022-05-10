<?php
//Standart Werte(funktioniert noch nt komplett)

$rankSpieß = "Fw.";
$rankStelvZgfh = "Fw.";
$rankZgfhr = "Lt.";
$rankKmpchef = "Maj.";
$rankKmpfhr = "Hptm.";
$rankS2 = "Fw.";
$rankS1 = "Fw.";
$rankGrpFhr = "Fw.";
$rankStlvGrpFhr = "Uffz.";
$rankSoldat = "Jg.";


//Funktionen:
function decodePictureURL($number): string

{
    $output = "Oh ein fehler in der Matrix, welche Pulle äääh Pille nimmst du?(Error Code: 69.001)";
    switch ($number) {
        case 0:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Jäger.png" title="Jäger" alt="Jäger">';
            break;
        case 1:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Gefreiter.png" title="Gefreiter" alt="Gefreiter">';
            break;
        case 2:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Obergefreiter.png" title="Obergefreiter" alt="Obergefreiter">';
            break;
        case 3:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Hauptgefreiter.png" title="Hauptgefreiter" alt="Hauptgefreiter">';
            break;
        case 4:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Stabsgefreiter.png" title="Stabsgefreiter" alt="Stabsgefreiter">';
            break;
        case 5:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Oberstabsgefreiter.png" title="Oberstabsgefreiter" alt="Oberstabsgefreiter">';
            break;
        case 6:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Korporal.png" title="Korporal" alt="Korporal">';
            break;
        case 7:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Stabskorporal.png" title="Stabskorporal" alt="Stabskorporal">';
            break;
        case 8:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Unteroffizier.png" title="Unteroffizier" alt="Unteroffizier">';
            break;
        case 9:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Stabsunteroffizier.png" title="Stabsunteroffizier" alt="Stabsunteroffizier">';
            break;
        case 10:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Fahnenjunker.png" title="Fahnenjunker" alt="Fahnenjunker">';
            break;
        case 11:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Feldwebel.png" title="Feldwebel" alt="Feldwebel">';
            break;
        case 12:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Oberfeldwebel.png" title="Oberfeldwebel" alt="Oberfeldwebel">';
            break;
        case 13:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Hauptfeldwebel.png" title="Hauptfeldwebel" alt="Hauptfeldwebel">';
            break;
        case 14:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Stabsfeldwebel.png" title="Stabsfeldwebel" alt="Stabsfeldwebel">';
            break;
        case 15:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Oberstabsfeldwebel.png" title="Oberstabsfeldwebel" alt="Oberstabsfeldwebel">';
            break;
        case 16:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Fähnrich.png" title="Fähnrich" alt="Fähnrich">';
            break;
        case 17:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Oberfähnrich.png" title="Oberfähnrich" alt="Oberfähnrich">';
            break;
        case 18:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Leutnant.png" title="Leutnant" alt="Leutnant">';
            break;
        case 19:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Oberleutnant.png" title="Oberleutnant" alt="Oberleutnant">';
            break;
        case 20:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Hauptmann.png" title="Hauptmann" alt="Hauptmann">';
            break;
        case 21:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Stabsauptmann.png" title="Stabsauptmann" alt="Stabsauptmann">';
            break;
        case 22:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Major.png" title="Major" alt="Major">';
            break;
        case 23:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Oberstleutnant.png" title="Oberstleutnant" alt="Oberstleutnant">';
            break;
        case 24:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Oberst.png" title="Oberst" alt="Oberst">';
            break;
        case 25:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/BrigadeGeneral.png" title="Brigade General" alt="Brigade General">';
            break;
        case 26:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/GeneralMajor.png" title="General Major" alt="General Major">';
            break;
        case 27:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/GeneralLeutnant.png" title="General Leutnant" alt="General Leutnant">';
            break;
        case 28:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/General.png" title="General" alt="General">';
            break;
        case 29:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Jäger.png" title="Jäger(Aufklärer)" alt="Jäger(Aufklärer)">';
            break;
        case 30:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Gefreiter.png" title="Gefreiter(Aufklärer)" alt="Gefreiter(Aufklärer)">';
            break;
        case 31:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Obergefreiter.png" title="Obergefreiter(Aufklärer)" alt="Obergefreiter(Aufklärer)">';
            break;
        case 32:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Hauptgefreiter.png" title="Hauptgefreiter(Aufklärer)" alt="Hauptgefreiter(Aufklärer)">';
            break;
        case 33:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Stabsgefreiter.png" title="Stabsgefreiter(Aufklärer)" alt="Stabsgefreiter(Aufklärer)">';
            break;
        case 34:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Oberstabsgefreiter.png" title="Oberstabsgefreiter(Aufklärer)" alt="Oberstabsgefreiter(Aufklärer)">';
            break;
        case 35:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Korporal.png" title="Korporal(Aufklärer)" alt="Korporal(Aufklärer)">';
            break;
        case 36:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Stabskorporal.png" title="Stabskorporal(Aufklärer)" alt="Stabskorporal(Aufklärer)">';
            break;
        case 37:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Unteroffizier.png" title="Unteroffizier(Aufklärer)" alt="Unteroffizier(Aufklärer)">';
            break;
        case 38:
            $output = '<img src="https://www.9jgkp.de/Bilder/Rang/Stabsunteroffizier.png" title="Stabsunteroffizier(Aufklärer)" alt="Stabsunteroffizier(Aufklärer)">';
            break;
    }
    return $output;
}

function decodeRank($number): string

{
    $output = "Oh ein fehler in der Matrix, welche Pulle äääh Pille nimmst du?(Error Code: 1)";
    switch ($number) {
        case 0:
            $output = "Jg.";
            break;
        case 1:
            $output = "Gefr.";
            break;
        case 2:
            $output = "OGefr.";
            break;
        case 3:
            $output = "HGefr.";
            break;
        case 4:
            $output = "StGefr.";
            break;
        case 5:
            $output = "OStGefr.";
            break;
        case 6:
            $output = "Korp.";
            break;
        case 7:
            $output = "StKorp.";
            break;
        case 8:
            $output = "Uffz.";
            break;
        case 9:
            $output = "StUffz.";
            break;
        case 10:
            $output = "Fhj.";
            break;
        case 11:
            $output = "Fw.";
            break;
        case 12:
            $output = "OFw.";
            break;
        case 13:
            $output = "HFw.";
            break;
        case 14:
            $output = "StFw.";
            break;
        case 15:
            $output = "OStFw";
            break;
        case 16:
            $output = "Fähnr.";
            break;
        case 17:
            $output = "OFähnr.";
            break;
        case 18:
            $output = "Lt.";
            break;
        case 19:
            $output = "OLt.";
            break;
        case 20:
            $output = "Hptm.";
            break;
        case 21:
            $output = "StHptm.";
            break;
        case 22:
            $output = "Maj.";
            break;
        case 23:
            $output = "OberstLt.";
            break;
        case 24:
            $output = "Oberst.";
            break;
        case 25:
            $output = "BrigGen.";
            break;
        case 26:
            $output = "GenMaj.";
            break;
        case 27:
            $output = "GenLt.";
            break;
        case 28:
            $output = "Gen.";
            break;
        case 29:
            $output = "Jg. (Aufklärer)";
            break;
        case 30:
            $output = "Gefr. (Aufklärer)";
            break;
        case 31:
            $output = "OGefr. (Aufklärer)";
            break;
        case 32:
            $output = "HGefr. (Aufklärer)";
            break;
        case 33:
            $output = "StGefr. (Aufklärer)";
            break;
        case 34:
            $output = "OStGefr. (Aufklärer)";
            break;
        case 35:
            $output = "Kpl. (Aufklärer)";
            break;
        case 36:
            $output = "StKpl. (Aufklärer)";
            break;
        case 37:
            $output = "Uffz. (Aufklärer)";
            break;
        case 38:
            $output = "StUffz. (Aufklärer)";
            break;
    }
    return $output;
}

function decodePost($number): string
{
    $output = "Bist du Neo? Mein Code ist IMMER Fehlerfrei!!!1! (Error Code: 1)";
    switch ($number) {
        case 0:
            $output = "Soldat";
            break;
        case 1:
            $output = "Gruppenführer";
            break;
        case 2:
            $output = "Stv. Gruppenführer";
            break;
        case 3:
            $output = "Kompaniechef";
            break;
        case 4:
            $output = "Kompanieführer";
            break;
        case 5:
            $output = "Stv. Zugführer";
            break;
        case 6:
            $output = "Zugführer";
            break;
        case -1:
            $output = "Beobachter";
            break;
    }
    return $output;
}

function decodePosition($number): string
{
    $output = "Oh ein Fehler in der Matrix(Error Code: 1)";
    switch ($number) {
        case 0:
            $output = "Alpha";
            break;
        case 1:
            $output = "Bravo";
            break;
        case 2:
            $output = "Charlie";
            break;
        case 3:
            $output = "Sierra";
            break;
        case 4:
            $output = "Kommandantur";
            break;
        case 5:
            $output = "Reservist";
            break;
        case 6:
            $output = "Zugführer des I. Zuges";
            break;
    }
    return $output;
}

function decodeSpecialPosts($number): string
{
    $output = "Sonderposten sind irrelevant->ignorieren, nein Spaß(Error Code: 1)";
    switch ($number) {
        case 0:
            $output = "Kein Sonderposten";
            break;
        case 1:
            $output = "Kompaniefeldwebel";
            break;
        case 2:
            $output = "Verwaltungs Soldat I";
            break;
        case 3:
            $output = "Leiter S2";
            break;
        case 4:
            $output = "Medien Soldat";
            break;
        case 5:
            $output = "Leiter S3 KEO";
            break;
        case 6:
            $output = "Missionsbauer";
            break;
        case 7:
            $output = "Scripter";
            break;
        case 8:
            $output = "Server Verwalter";
            break;
        case 9:
            $output = "Mod-Tester";
            break;
    }
    return $output;
}

function pdo()
{
    $host = "localhost";
    $name = "admin";
    $user = "root";
    $password = "";

    return new PDO("mysql:host=$host;dbname=$name", $user, $password);
}

function findPost($post)
{
    $stmt = pdo()->prepare("SELECT * FROM member WHERE post = :post");
    $stmt->bindParam(":post", $post);
    $stmt->execute();
    return $stmt->fetchALL();
}

function singleFindPost($post)
{
    $stmt = pdo()->query("SELECT * FROM member WHERE post =" . $post);
    $row = $stmt->fetch();
    if ($row) {
        return $row;
    }
    return null;
}

function findSpecialPost($post)
{
    $stmt = pdo()->prepare("SELECT * FROM member WHERE special_post = :post");
    $stmt->bindParam(":post", $post);
    $stmt->execute();
    return $stmt->fetchALL();
}

function singleFindSpecialPost($post)
{
    $stmt = pdo()->prepare("SELECT * FROM member WHERE special_post = :post");
    $stmt->bindParam(":post", $post);
    $stmt->execute();
    $row = $stmt->fetch();
    if ($row) {
        return $row;
    }
    return null;
}

function findPosition($position)
{
    $stmt = pdo()->prepare("SELECT * FROM member WHERE position = :pos");
    $stmt->bindParam(":pos", $position);
    $stmt->execute();
    return $stmt->fetchALL();
}

function singleFindPostion($position)
{
    $stmt = pdo()->prepare("SELECT * FROM member WHERE position = :post");
    $stmt->bindParam(":post", $position);
    $stmt->execute();
    $row = $stmt->fetch();
    if ($row) {
        return $row;
    }
    return null;
}

function singleFindPostionPost($position, $post)
{
    $stmt = pdo()->prepare("SELECT * FROM member WHERE position = :posi AND post = :post");
    $stmt->bindParam(":posi", $position);
    $stmt->bindParam(":post", $post);
    $stmt->execute();
    $row = $stmt->fetch();
    if ($row) {
        return $row;
    }
    return null;
}

function findPostionPost($position, $post)
{
    $stmt = pdo()->prepare("SELECT * FROM member WHERE position = :posi AND post = :post");
    $stmt->bindParam(":posi", $position);
    $stmt->bindParam(":post", $post);
    $stmt->execute();
    return $stmt->fetchALL();

}

function ifNull($functionFull, $function)
{
    if ($function != null) {
        return $functionFull;
    }

    if ($function == null) {
        return "nicht besetzt";
    }
    return "nicht besetzt";
}
?>


<!DOCTYPE html>
<html lang="de">
<!-- css -->
<style>

    body {
        font-family: Tahoma, sans-serif;
        width: auto
        max-width: 90%;
        margin: 0 auto;
        text-decoration-color: black
    }

    .tabelle {
        float: left;
        width: 33.33%;
        min-width: 380px;
    }

    .tabelle-res {
        text-align: center;
        width: 20%;
        min-width: 100px;
        text-align: right;
    }


    .center {
        margin-left: auto;
        margin-right: auto;
        width: 30%;
        min-width: 80px;
    }

    .clearfix:after {
        content: ".";
        visibility: hidden;
        display: block;
        height: 0;
        clear: both;
    }


    h2 {

        Arial, sans-serif;
        font-size: 16px;
    }

    h1 {

        Arial, sans-serif;
        font-size: 20px;

    }

    h3 {

        Arial, sans-serif;
        font-size: 16px;
        text-align: left;
    }

    h4 {

        Arial, sans-serif;
        font-size: 16px;
        text-align: right;
    }

    /*
    .teiler {
        height: 1px;
        width: 130%;
        background-color: #3ca7e7;
    }

    .lexiconToc {
        background-color: #3ca7e7;
    }
    */

</style>

<head>
    <title>Aufstellung - 9Jgkp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body oncontextmenu="return false">
<!-- Aktive Teile -->
<div class="lexiconToc" style="width:100%; height:100%;">
    <!-- Kommandantur -->
    <div>
        <?php
        $kompaniechef = singleFindPost(3);
        $kompaniefuehrer = singleFindPost(4);
        ?>
        <table class="center">
            <tr>
                <th colspan="4" style="text-align:center;"><h1>Kommandantur</h1></th>
            </tr>
            <tr style="heigth: 20px">
            </tr>
            <tr>
                <th><h4>Posten:</h4></th>
                <th><h4>Dienstgrad:&nbsp;</h4></th>
                <th><h3>Besetzung:</h3></th>
                <th><h3>Abzeichen:</h3></th>
            </tr>
            <td><h4>Kompaniechef:</h4></td>
            <td><h4><?php if ($kompaniechef === null) {
                        echo $rankKmpchef;
                    } else {
                        echo decodeRank($kompaniechef["user_rank"]);
                    } ?></h4></td>

            <td><a href="<?php if (!$kompaniechef === null) {
                    echo $kompaniechef["url"];
                } ?>"><?php echo ifNull($kompaniechef["username"], $kompaniechef); ?></a>&nbsp;
            </td>
            <td><?php
                if ($kompaniechef === null) {
                    echo '<img src="https://www.9jgkp.de/Bilder/Rang/Major.png" title="Major" alt="Major">';
                } else {
                    echo decodePictureURL($kompaniechef["user_rank"]);
                }
                ?></td>
            <tr>
                <td><h4>Kompanieführer:</h4></td>
                <td><h4><?php if ($kompaniefuehrer === null) {
                            echo $rankKmpfhr;
                        } else {
                            echo decodeRank($kompaniefuehrer["user_rank"]);
                        } ?></h4></td>
                <td>
                    <a href="<?php if ($kompaniefuehrer !== null) {
                        echo $kompaniefuehrer["url"];
                    } ?>"><?php if ($kompaniefuehrer === null) {
                            echo "nicht besetzt";
                        } else {
                            echo $kompaniefuehrer["username"];
                        } ?></a>&nbsp;
                </td>
                <td>
                    <?php
                    if ($kompaniefuehrer === null) {
                        echo '<img src="https://www.9jgkp.de/Bilder/Rang/Major.png" title="Major" alt="Major">';
                    } else {
                        echo decodePictureURL($kompaniefuehrer["user_rank"]);
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <!-- Teiler -->
    <div>
        <br>
        <br>
        <div class="teiler"></div>
        <br>
        <br>
    </div>
    <!-- Stab -->
    <div>
        <div>
            <table class="center">
                <tr>
                    <th colspan="4" style="text-align:center;"><h1>Stab</h1></th>
                </tr>
            </table>
        </div>
        <div>
            <br>
            <br>
            <br>
        </div>
        <div class="tabelle">
            <?php
            $spieß = SingleFindSpecialPost(1);
            $vSoldat = findSpecialPost(2);
            ?>
            <table style="margin-left:auto; margin-right:auto">
                <tr>
                    <th colspan="4"><h2>S1<i>(Beschreibung)</i></h2></th>
                </tr>
                <tr>
                    <th><h4>Posten:</h4></th>
                    <th><h4>Dienstgrad:</h4></th>
                    <th><h3>Besetzung:</h3></th>
                    <th><h3>Abzeichen:</h3></th>
                </tr>
                <tr>
                    <td><h4>Leiter S1 (Spieß):</h4></td>
                    <td><h4>
                            <?php
                            if ($spieß === null) {
                                echo $rankSpieß;
                            } else {
                                echo decodeRank($spieß["user_rank"]);
                            }
                            ?>
                        </h4>
                    </td>
                    <td><a href="<?php if ($spieß !== null) {
                            echo $spieß["url"];
                        } ?>">
                            <?php if ($spieß === null) {
                                echo "nicht besetzt";
                            } else {
                                echo $spieß["username"];
                            } ?></a>
                    </td>
                    <td>
                        <?php
                        if ($spieß === null) {
                            echo '<img src="https://www.9jgkp.de/Bilder/Rang/Feldwebel.png" title="Feldwebel" alt="Feldwebel">';
                        } else {
                            echo decodePictureURL($spieß["user_rank"]);
                        }
                        ?>
                    </td>
                </tr>
                <?php
                $vSoldat = findSpecialPost(2);
                foreach ($vSoldat as $vSoldatSingle) {
                    ?>
                    <tr>
                        <td><h4>V-Soldat</h4></td>
                        <td><h4> <?php echo decodeRank($vSoldatSingle["user_rank"]); ?></h4></td>
                        <td><a href="<?php echo $vSoldatSingle["url"] ?>"><?php echo $vSoldatSingle["username"] ?></a>
                        </td>
                        <td> <?php echo decodePictureURL($vSoldatSingle["user_rank"]); ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
        <div class="tabelle">
            <table style="margin-left:auto; margin-right:auto">
                <tr>
                    <th colspan="4" style="text-align:center"><h2>S2<i>(Beschreibung)</h2></i></th>
                </tr>
                <tr>
                    <th><h4>Posten:</h4></th>
                    <th><h4>Dienstgrad:&nbsp;</h4></th>
                    <th><h3>Besetzung:</h3></th>
                    <th><h3>Abzeichen:</h3></th>
                </tr>
                <tr>
                    <td><h4>Leiter S2:</h4></td>
                    <td><h4>
                            <?php
                            $seniorDeveloper = singleFindSpecialPost(3);
                            if ($seniorDeveloper === null) {
                                echo 'Fw.';
                            } else {
                                echo decodeRank($seniorDeveloper["user_rank"]);
                            }
                            ?>
                        </h4>
                    </td>
                    <td><a href="<?php if ($seniorDeveloper !== null) {
                            echo $seniorDeveloper["url"];
                        } ?>">
                            <?php if ($seniorDeveloper === null) {
                                echo "nicht besetzt";
                            } else {
                                echo $seniorDeveloper["username"];
                            } ?></a>
                    </td>
                    <td>
                        <?php
                        if ($seniorDeveloper === null) {
                            echo '<img src="https://www.9jgkp.de/Bilder/Rang/Feldwebel.png" title="Feldwebel" alt="Feldwebel">';
                        } else {
                            echo decodePictureURL($seniorDeveloper["user_rank"]);
                        }
                        ?>
                    </td>
                </tr>
                <?php
                $mSoldat = findSpecialPost(4);
                foreach ($mSoldat as $mSoldatSingle) {
                    ?>
                    <tr>
                        <td><h4>M-Soldat</h4></td>
                        <td><h4> <?php echo decodeRank($mSoldatSingle["user_rank"]); ?></h4></td>
                        <td><a href="<?php echo $mSoldatSingle["url"] ?>"><?php echo $mSoldatSingle["username"] ?></a>
                        </td>
                        <td> <?php echo decodePictureURL($mSoldatSingle["user_rank"]); ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>

        </div>

        <div style="clear: both;"></div>
        <div>
            <br>
            <br>
            <div class="teiler"></div>
            <br>
            <br>
        </div>
        <div>

            <br>
            <br>
            <br>

        </div>
    </div>
    <!-- Teiler -->
    <div>
        <br>
        <br>
        <div class="teiler"></div>
        <br>
        <br>
    </div>
    <!-- I. ZUG -->
    <div>
        <div>
            <!-- Überschrift I. ZUG -->
            <table class="center">
                <tr>
                    <th colspan="4" style="text-align:center;"><h1>I. Zug</h1></th>
                </tr>
                <tr style="heigth: 20px">
                </tr>
                <tr>
                    <th><h4>Posten:</h4></th>
                    <th><h4>Dienstgrad:&nbsp;</h4></th>
                    <th><h3>Besetzung:</h3></th>
                    <th><h3>Abzeichen:</h3></th>
                </tr>
                <tr>
                    <td><h4>Zugführung I. Zug:</h4></td>
                    <td><h4>
                            <?php
                            $zgfhr = singleFindPost(6);
                            if ($zgfhr === null) {
                                echo $rankZgfhr;
                            } else {
                                echo decodeRank($zgfhr["user_rank"]);
                            }
                            ?>
                        </h4>
                    </td>
                    <td><a href="<?php if ($zgfhr !== null) {
                            echo $zgfhr["url"];
                        } ?>">
                            <?php if ($zgfhr === null) {
                                echo "nicht besetzt";
                            } else {
                                echo $zgfhr["username"];
                            } ?></a>
                    </td>
                    <td>
                        <?php
                        if ($zgfhr === null) {
                            echo '<img src="https://www.9jgkp.de/Bilder/Rang/Feldwebel.png" title="Feldwebel" alt="Feldwebel">';
                        } else {
                            echo decodePictureURL($zgfhr["user_rank"]);
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <?php
                    $stlvZgfhr = findPost(5);
                    foreach ($stlvZgfhr

                    as $stlvZgfhrSingle) {
                    ?>
                <tr>
                    <td><h4>Stlv. Zugführung:</h4></td>
                    <td><h4> <?php
                            if ($stlvZgfhrSingle === null) {
                                echo $rankStelvZgfh;
                            } else {
                                echo decodeRank($stlvZgfhrSingle["user_rank"]);
                            }
                            ?></h4></td>
                    <td><a href="<?php echo $stlvZgfhrSingle["url"] ?>"><?php echo $stlvZgfhrSingle["username"] ?></a>
                    </td>
                    <td> <?php echo decodePictureURL($stlvZgfhrSingle["user_rank"]); ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div>
            <br>
            <br>
            <br>
        </div>
        <!-- I. Gruppe -->
        <div class="tabelle">
            <table style="margin-left:auto; margin-right:auto">
                <tr>
                    <th colspan="4"><h2>1. Gruppe <i>(Alpha)</i></h2></th>
                </tr>
                <tr>
                    <th><h4>Posten:</h4></th>
                    <th><h4>Dienstgrad:&nbsp;</h4></th>
                    <th><h3>Besetzung:</h3></th>
                    <th><h3>Abzeichen:</h3></th>
                </tr>
                <tr>
                    <td><h4>Gruppenführer:</h4></td>
                    <td><h4>
                            <?php
                            $grpFhr = singleFindPostionPost(0, 1);
                            if ($grpFhr === null) {
                                echo $rankGrpFhr;
                            } else {
                                echo decodeRank($grpFhr["user_rank"]);
                            }
                            ?>
                        </h4>
                    </td>
                    <td><a href="<?php if ($grpFhr !== null) {
                            echo $grpFhr["url"];
                        } ?>">
                            <?php if ($grpFhr === null) {
                                echo "nicht besetzt";
                            } else {
                                echo $grpFhr["username"];
                            } ?></a>
                    </td>
                    <td>
                        <?php
                        if ($grpFhr === null) {
                            echo '<img src="https://www.9jgkp.de/Bilder/Rang/Feldwebel.png" title="Feldwebel" alt="Feldwebel">';
                        } else {
                            echo decodePictureURL($grpFhr["user_rank"]);
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <?php
                    $stlvGrpFhr = singleFindPost(2);
                    $stlvGrpFhrPosition = singleFindPostion(0);
                    if ($stlvGrpFhrPosition !== null) {
                        ?>
                        <td><h4>Stelv. Gruppenführer:</h4></td>
                        <td><h4>
                                <?php
                                $stlvGrpFhr = singleFindPost(2);
                                if ($stlvGrpFhr === null) {
                                    echo $rankStlvGrpFhr;
                                } else {
                                    echo decodeRank($stlvGrpFhr["user_rank"]);
                                }
                                ?>
                            </h4>
                        </td>
                        <td><a href="<?php if ($stlvGrpFhr !== null) {
                                echo $stlvGrpFhr["url"];
                            } ?>">
                                <?php if ($stlvGrpFhr === null) {
                                    echo "nicht besetzt";
                                } else {
                                    echo $stlvGrpFhr["username"];
                                } ?></a>
                        </td>


                        <td>
                            <?php
                            if ($stlvGrpFhr === null) {
                                echo '<img src="https://www.9jgkp.de/Bilder/Rang/Gefreiter.png" title="Gefreiter" alt="Gefreiter">';
                            } else {
                                echo decodePictureURL($stlvGrpFhr["user_rank"]);
                            }
                            ?>
                        </td>
                        <?php
                    }
                    ?>
                </tr>

                <tr>
                    <?php
                    $stlvGrpFhr = singleFindPostionPost(0,2);

                        ?>
                        <td><h4>Stelv. Gruppenführer:</h4></td>
                        <td><h4>
                                <?php
                                $stlvGrpFhr = singleFindPost(2);
                                if ($stlvGrpFhr === null) {
                                    echo $rankStlvGrpFhr;
                                } else {
                                    echo decodeRank($stlvGrpFhr["user_rank"]);
                                }
                                ?>
                            </h4>
                        </td>
                        <td><a href="<?php if ($stlvGrpFhr !== null) {
                                echo $stlvGrpFhr["url"];
                            } ?>">
                                <?php if ($stlvGrpFhr === null) {
                                    echo "nicht besetzt";
                                } else {
                                    echo $stlvGrpFhr["username"];
                                } ?></a>
                        </td>


                        <td>
                            <?php
                            if ($stlvGrpFhr === null) {
                                echo '<img src="https://www.9jgkp.de/Bilder/Rang/Gefreiter.png" title="Gefreiter" alt="Gefreiter">';
                            } else {
                                echo decodePictureURL($stlvGrpFhr["user_rank"]);
                            }
                            ?>
                        </td>
                </tr>

                <?php
                $Soldat = findPostionPost(0,0);
                foreach ($Soldat as $SoldatSingle) {
                    ?>
                    <tr>
                        <td><h4>V-Soldat</h4></td>
                        <td><h4> <?php echo decodeRank($SoldatSingle["user_rank"]); ?></h4></td>
                        <td><a href="<?php echo $SoldatSingle["url"] ?>"><?php echo $SoldatSingle["username"] ?></a>
                        </td>
                        <td> <?php echo decodePictureURL($SoldatSingle["user_rank"]); ?></td>
                    </tr>
                    <?php
                }
                ?>

            </table>

        </div>
        <!-- II. Gruppe -->
        <div class="tabelle">

            <table style="margin-left:auto; margin-right:auto">

                <tr>

                    <th colspan="4" style="text-align:center"><h2>2. Gruppe <i>(Bravo)</h2></i></th>

                </tr>

                <tr>

                    <th><h4>Posten:</h4></th>
                    <th><h4>Dienstgrad:&nbsp;</h4></th>
                    <th><h3>Besetzung:</h3></th>
                    <th><h3>Abzeichen:</h3></th>

                </tr>

                <tr>
                    <td><h4>Gruppenführer:</h4></td>
                    <td><h4>
                            <?php
                            $grpFhr = singleFindPostionPost(1, 1);
                            if ($grpFhr === null) {
                                echo $rankGrpFhr;
                            } else {
                                echo decodeRank($grpFhr["user_rank"]);
                            }
                            ?>
                        </h4>
                    </td>
                    <td><a href="<?php if ($grpFhr !== null) {
                            echo $grpFhr["url"];
                        } ?>">
                            <?php if ($grpFhr === null) {
                                echo "nicht besetzt";
                            } else {
                                echo $grpFhr["username"];
                            } ?></a>
                    </td>
                    <td>
                        <?php
                        if ($grpFhr === null) {
                            echo '<img src="https://www.9jgkp.de/Bilder/Rang/Feldwebel.png" title="Feldwebel" alt="Feldwebel">';
                        } else {
                            echo decodePictureURL($grpFhr["user_rank"]);
                        }
                        ?>
                    </td>
                </tr>

                <tr>
                    <?php
                    $stlvGrpFhr = singleFindPostionPost(1,2);

                    ?>
                    <td><h4>Stelv. Gruppenführer:</h4></td>
                    <td><h4>
                            <?php
                            $stlvGrpFhr = singleFindPost(2);
                            if ($stlvGrpFhr === null) {
                                echo $rankStlvGrpFhr;
                            } else {
                                echo decodeRank($stlvGrpFhr["user_rank"]);
                            }
                            ?>
                        </h4>
                    </td>
                    <td><a href="<?php if ($stlvGrpFhr !== null) {
                            echo $stlvGrpFhr["url"];
                        } ?>">
                            <?php if ($stlvGrpFhr === null) {
                                echo "nicht besetzt";
                            } else {
                                echo $stlvGrpFhr["username"];
                            } ?></a>
                    </td>

                    <td>
                        <?php
                        if ($stlvGrpFhr === null) {
                            echo '<img src="https://www.9jgkp.de/Bilder/Rang/Gefreiter.png" title="Gefreiter" alt="Gefreiter">';
                        } else {
                            echo decodePictureURL($stlvGrpFhr["user_rank"]);
                        }
                        ?>
                    </td>
                </tr>

                <?php
                $Soldat = findPostionPost(1,0);
                foreach ($Soldat as $SoldatSingle) {
                    ?>
                    <tr>
                        <td><h4>Soldat</h4></td>
                        <td><h4> <?php echo decodeRank($SoldatSingle["user_rank"]); ?></h4></td>
                        <td><a href="<?php echo $SoldatSingle["url"] ?>"><?php echo $SoldatSingle["username"] ?></a>
                        </td>
                        <td> <?php echo decodePictureURL($SoldatSingle["user_rank"]); ?></td>
                    </tr>
                    <?php
                }
                ?>

            </table>

        </div>
        <!-- III. Gruppe -->
        <div class="tabelle">

            <table style="margin-left:auto; margin-right:auto">

                <tr>

                    <th colspan="4" style="text-align:center"><h2>3. Gruppe <i>(Charlie)</h2></i></th>

                </tr>

                <tr>

                    <th><h4>Posten:</h4></th>
                    <th><h4>Dienstgrad:&nbsp;</h4></th>
                    <th><h3>Besetzung:</h3></th>
                    <th><h3>Abzeichen:</h3></th>

                </tr>

                <tr>
                    <td><h4>Gruppenführer:</h4></td>
                    <td><h4>
                            <?php
                            $grpFhr = singleFindPostionPost(2, 1);
                            if ($grpFhr === null) {
                                echo $rankGrpFhr;
                            } else {
                                echo decodeRank($grpFhr["user_rank"]);
                            }
                            ?>
                        </h4>
                    </td>
                    <td><a href="<?php if ($grpFhr !== null) {
                            echo $grpFhr["url"];
                        } ?>">
                            <?php if ($grpFhr === null) {
                                echo "nicht besetzt";
                            } else {
                                echo $grpFhr["username"];
                            } ?></a>
                    </td>
                    <td>
                        <?php
                        if ($grpFhr === null) {
                            echo '<img src="https://www.9jgkp.de/Bilder/Rang/Feldwebel.png" title="Feldwebel" alt="Feldwebel">';
                        } else {
                            echo decodePictureURL($grpFhr["user_rank"]);
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <?php
                    $stlvGrpFhr = singleFindPost(2);
                    $stlvGrpFhrPosition = singleFindPostion(0);
                    if ($stlvGrpFhrPosition !== null) {
                        ?>
                        <td><h4>Stelv. Gruppenführer:</h4></td>
                        <td><h4>
                                <?php
                                $stlvGrpFhr = singleFindPost(2);
                                if ($stlvGrpFhr === null) {
                                    echo $rankStlvGrpFhr;
                                } else {
                                    echo decodeRank($stlvGrpFhr["user_rank"]);
                                }
                                ?>
                            </h4>
                        </td>
                        <td><a href="<?php if ($stlvGrpFhr !== null) {
                                echo $stlvGrpFhr["url"];
                            } ?>">
                                <?php if ($stlvGrpFhr === null) {
                                    echo "nicht besetzt";
                                } else {
                                    echo $stlvGrpFhr["username"];
                                } ?></a>
                        </td>


                        <td>
                            <?php
                            if ($stlvGrpFhr === null) {
                                echo '<img src="https://www.9jgkp.de/Bilder/Rang/Gefreiter.png" title="Gefreiter" alt="Gefreiter">';
                            } else {
                                echo decodePictureURL($stlvGrpFhr["user_rank"]);
                            }
                            ?>
                        </td>
                        <?php
                    }
                    ?>
                </tr>

                <tr>
                    <?php
                    $stlvGrpFhr = singleFindPostionPost(2,2);

                    ?>
                    <td><h4>Stelv. Gruppenführer:</h4></td>
                    <td><h4>
                            <?php
                            $stlvGrpFhr = singleFindPost(2);
                            if ($stlvGrpFhr === null) {
                                echo $rankStlvGrpFhr;
                            } else {
                                echo decodeRank($stlvGrpFhr["user_rank"]);
                            }
                            ?>
                        </h4>
                    </td>
                    <td><a href="<?php if ($stlvGrpFhr !== null) {
                            echo $stlvGrpFhr["url"];
                        } ?>">
                            <?php if ($stlvGrpFhr === null) {
                                echo "nicht besetzt";
                            } else {
                                echo $stlvGrpFhr["username"];
                            } ?></a>
                    </td>


                    <td>
                        <?php
                        if ($stlvGrpFhr === null) {
                            echo '<img src="https://www.9jgkp.de/Bilder/Rang/Gefreiter.png" title="Gefreiter" alt="Gefreiter">';
                        } else {
                            echo decodePictureURL($stlvGrpFhr["user_rank"]);
                        }
                        ?>
                    </td>
                </tr>

                <?php
                $Soldat = findPostionPost(2,0);
                foreach ($Soldat as $SoldatSingle) {
                    ?>
                    <tr>
                        <td><h4>V-Soldat</h4></td>
                        <td><h4> <?php echo decodeRank($SoldatSingle["user_rank"]); ?></h4></td>
                        <td><a href="<?php echo $SoldatSingle["url"] ?>"><?php echo $SoldatSingle["username"] ?></a>
                        </td>
                        <td> <?php echo decodePictureURL($SoldatSingle["user_rank"]); ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>

        </div>
        <div style="clear: both;"></div>
        <div>

            <br>
            <br>
            <br>

        </div>
        <!-- IV. Gruppe -->
        <div class="center">
            <table style="margin-left:auto; margin-right:auto">
                <tr>
                    <th colspan="4"><h2>4. Gruppe <i>(Sierra)</i></h2></th>
                </tr>
                <tr>
                    <th><h4>Posten:</h4></th>
                    <th><h4>Dienstgrad:&nbsp;</h4></th>
                    <th><h3>Besetzung:</h3></th>
                    <th><h3>Abzeichen:</h3></th>
                </tr>
                <tr>
                    <?php
                    $GrpFhr = singleFindPostionPost(3,1);

                    ?>
                    <td><h4>Gruppenführer:</h4></td>
                    <td><h4>
                            <?php
                            $GrpFhr = singleFindPost(2);
                            if ($GrpFhr === null) {
                                echo $rankGrpFhr;
                            } else {
                                echo decodeRank($GrpFhr["user_rank"]);
                            }
                            ?>
                        </h4>
                    </td>
                    <td><a href="<?php if ($GrpFhr !== null) {
                            echo $GrpFhr["url"];
                        } ?>">
                            <?php if ($GrpFhr === null) {
                                echo "nicht besetzt";
                            } else {
                                echo $GrpFhr["username"];
                            } ?></a>
                    </td>

                    <td>
                        <?php
                        if ($GrpFhr === null) {
                            echo '<img src="https://www.9jgkp.de/Bilder/Rang/Gefreiter.png" title="Gefreiter" alt="Gefreiter">';
                        } else {
                            echo decodePictureURL($GrpFhr["user_rank"]);
                        }
                        ?>
                    </td>
                </tr>

                <?php
                $Soldat = findPostionPost(3,0);
                foreach ($Soldat as $SoldatSingle) {
                    ?>
                    <tr>
                        <td><h4>Soldat</h4></td>
                        <td><h4> <?php echo decodeRank($SoldatSingle["user_rank"]); ?></h4></td>
                        <td><a href="<?php echo $SoldatSingle["url"] ?>"><?php echo $SoldatSingle["username"] ?></a>
                        </td>
                        <td> <?php echo decodePictureURL($SoldatSingle["user_rank"]); ?></td>
                    </tr>
                    <?php
                }
                ?>
                <!--
                                    <tr>

                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>

                                    </tr>

                                    <tr>

                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>

                                    </tr>

                                    <tr>

                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>

                                    </tr>

                                    <tr>

                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>

                                    </tr>

                                    <tr>

                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>


                                    </tr>

                                    <tr>

                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>

                                    </tr>

                                    <tr>

                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>

                                    </tr>

                                    <tr>

                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>

                                    </tr>
                -->
            </table>

        </div>

    </div>

    <div style="clear: both;"></div>
</div>
<!-- Reserve und Rekruten -->
<div>

    <!-- Reserve und Rekruten -->
    <div style="text-align:center;">
        <!-- Überschrift -->
        <h1>Reservisten<h1>
    </div>

    <div>
        <?php
        $x = 1;
        if($x===1){
            ?>
            <table class="tabelle-res">

                <tr>

                    <th><h4>&nbsp;Besetzung:</h4></th>
                    <th style="text-align:center;"><h3>Abzeichen:</h3></th>

                </tr>

                <?php
                $Soldat = findPosition(5);
                foreach ($Soldat as $SoldatSingle) {
                    ?>
                    <tr>
                        <td><a href="<?php echo $SoldatSingle["url"] ?>"><?php echo $SoldatSingle["username"] ?></a></td>
                        <td> <?php echo decodePictureURL($SoldatSingle["user_rank"]); ?></td>
                    </tr>
                    <?php
                }
                ?>

            </table>
            <?php
        }

        ?>

    </div>

</div>

</body>

</html>
