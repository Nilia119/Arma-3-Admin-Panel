<?php
    function decodeRank($number)

    {
        $output = "Oh ein fehler in der Matrix";
        switch ($number){
            case 0:
                $output = "Jäger";

            case 1:
                $output = "Gefreiter";
                break;
            case 2:
                $output = "Obergefreiter";
                break;
            case 3:
                $output = "Hauptgefreiter";
                break;
            case 4:
                $output = "Stabsgefreiter";
                break;
            case 5:
                $output = "Oberstabsgefreiter";
                break;
            case 6:
                $output = "Korporal";
                break;
            case 7:
                $output = "Stabskorporal";
                break;
            case 8:
                $output = "Unteroffizier";
                break;
            case 9:
                $output = "Stabsunteroffizier";
                break;
            case 10:
                $output = "Fahnenjunker";
                break;
            case 11:
                $output = "Feldwebel";
                break;
            case 12:
                $output = "Oberfeldwebel";
                break;
            case 13:
                $output = "Hauptfeldwebel";
                break;
            case 14:
                $output = "Stabsfeldwebel";
                break;
            case 15:
                $output = "Oberstabsfeldwebel";
                break;
            case 16:
                $output = "Fähnrich";
                break;
            case 17:
                $output = "Oberfähnrich";
                break;
            case 18:
                $output = "Leutnant";
                break;
            case 19:
                $output = "Oberleutnant";
                break;
            case 20:
                $output = "Hauptmann";
                break;
            case 21:
                $output = "Stabshauptmann";
                break;
            case 22:
                $output = "Major";
                break;
            case 23:
                $output = "Oberstleutnant";
                break;
            case 24:
                $output = "Oberst";
                break;
            case 25:
                $output = "Brigade General";
                break;
            case 26:
                $output = "General Major";
                break;
            case 27:
                $output = "General Leutnant";
                break;
            case 28:
                $output = "General";
                break;
            case 29:
                $output = "Jäger (Aufklärer)";
                break;
            case 30:
                $output = "Gefreiter (Aufklärer)";
                break;
            case 31:
                $output = "Obergefreiter (Aufklärer)";
                break;
            case 32:
                $output = "Hauptgefreiter (Aufklärer)";
                break;
            case 33:
                $output = "Stabsgefreiter (Aufklärer)";
                break;
            case 34:
                $output = "Oberstabsgefreiter (Aufklärer)";
                break;
            case 35:
                $output = "Korporal (Aufklärer)";
                break;
            case 36:
                $output = "Stabskorporal (Aufklärer)";
                break;
            case 37:
                $output = "Unteroffizier (Aufklärer)";
                break;
            case 38:
                $output = "Stabsunteroffizier (Aufklärer)";
                break;
        }
        return $output;
    }
    function  decodePost($number): string
    {
        $output = "Oh ein fehler in der Matrix";
        switch ($number) {
            case 0:
                $output = "Beobachter";
                break;
            case 1:
                $output = "DMR-Schütze";
                break;
            case 2:
                $output = "LMG-Schütze";
                break;
            case 3:
                $output = "MG-Hilfsschütze";
                break;
            case 4:
                $output = "MG-Schütze";
                break;
            case 5:
                $output = "Panzerabwehr-Hilfsschütze";
                break;
            case 6:
                $output = "Panzerabwehr-Schütze";
                break;
            case 7:
                $output = "Pionier";
                break;
            case 8:
                $output = "Reservist";
                break;
            case 9:
                $output = "Sanitäter";
                break;
            case 10:
                $output = "Scharfschütze";
                break;
            case 11:
                $output = "Schütze";
                break;
            case 12:
                $output = "Schütze-EH";
                break;
            case 13:
                $output = "Gruppenführer";
                break;
            case 14:
                $output = "Truppführer I.";
                break;
            case 15:
                $output = "Truppführer II.";
                break;
            case 16:
                $output = "Kompaniechef";
                break;
            case 17:
                $output = "Kompanieführer";
                break;
            case 18:
                $output = "Stellvertretender Zugführer";
                break;
            case 19:
                $output = "Zugführer";
                break;
        }
        return $output;

    }
    function decodePosition($number): string
    {
        $output = "Oh ein Fehler in der Matrix";
        switch($number) {
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
        switch($number){
            case 0:
                $output = "kein Sonderposten";
                break;
            case 1:
                $output = "Kompaniefeldwebel";
                break;
            case 2:
                $output = "Verwaltungs Soldat I";
                break;
            case 3:
                $output = "Verwaltungs Soldat II";
                break;
        }
        return $output;
    }
    function decodeAdminRank($number): string
    {
        $output = "FEHLER IN DER MATRIX";
        switch ($number) {
            case 1:
                $output = "Admin";
                break;
            case 2:
                $output = "Spieß";
                break;
            case 3:
                $output = "Developer";
                break;
            case 4:
                $output = "Super Admin";
                break;

        }
        return $output;
    }


//Made by Tsumori - 2021 / Improved by Pulle - 2022 ;)
//PHP Area
//Also jetzt mal No Front aber ich hab grad nen halben Nervenzusammenbruch bei diesen Comments

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<html lang="de">
<head>

    <title>Aufstellung - 9. Jägerkompanie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body oncontextmenu="return false">

<div class="lexiconToc" style="width:100%; height:100%;">
    <div>

        <!-- Kompanieführung bzw. Kommandantur -->
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
            <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <?php
            //16 = Kompaniechef
            //17 = Kompanieführer
            //Fetch für Kommandantur - Kompaniechef
            //$sql_komm = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Kommandantur' AND Position = 'Kompaniechef'";


            $result_komm = $conn->query("SELECT * FROM member WHERE post = 16 AND post = 17");
            ?>

            <?php
            if ($result_komm->num_rows > 0) {
                // output data of each row
                while($row = $result_komm->fetch_assoc()) {

                    //END
                    $rank = decodeRank($row["rank"]);
                    echo $rank;
                    ?>

                    <td><h4>Kompaniechef:</h4></td>
                    <td><h4><?php echo $row["id"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["url"]; ?>"><?php echo $row["username"]; ?></a></td>
                    <td><img src="" title='<?php echo $rank; ?>" alt='.$rank.' ?>'></td>


                <?php }
                //----------------------------
            } else { ?>

                <td><h4>Kompaniechef:</h4></td>
                <td><h4>Maj.&nbsp;</h4></td>
                <td><a href="#">---</a></td>
                <td><img src="https://www.9jgkp.de/Bilder/Rang/Major.png" title="Major" alt="Major"></td>

                <?php
            };
            //----------------------------
            ?>



            <?php
            //Fetch für Kommandantur - Kompanieführer
            $sql_komm = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Kommandantur' AND Position = 'Kompanieführer'";
            $sql_komm = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Kommandantur' AND Position = 'Kompanieführer'";
            $result_komm = $conn->query($sql_komm);
            ?>



            <?php
            if ($result_komm->num_rows > 0) {
            // output data of each row
            while($row = $result_komm->fetch_assoc()) {
            //END
            ?>


            <tr>

                <td><h4>Kompanieführer:</h4></td>
                <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>


                <?php }
                //----------------------------
                } else { ?>

                    <td><h4>Kompanieführer:</h4></td>
                    <td><h4>StHptm.&nbsp;</h4></td>
                    <td><a href="#">---</a></td>
                    <td><img src="https://www.9jgkp.de/Bilder/Rang/Stabshauptmann.png" title="Stabshauptmann" alt="Stabshauptmann"></td>

                    <?php
                };
                //----------------------------
                ?>
            </tr>




        </table>

    </div>

    <div>

        <!-- Blaue Line class s1 in dem inline CSS in Woltlab definieren für die einzelnen Styles! -->

        <br>
        <br>

        <div class="teiler"></div>

        <br>
        <br>

    </div>

    <div>

        <!-- Stab und GeZi -->
        <table class="center">

            <tr>

                <th colspan="4" style="text-align:center;"><h1>Stab</h1></th>

            </tr>

            <tr style="heigth: 20px">

            </tr>

            <tr>

                <th colspan="4" style="text-align:center;">S1 Innendienst</th>

            </tr>

            <tr>

                <th><h4>Posten:</h4></th>
                <th><h4>Dienstgrad:&nbsp;</h4></th>
                <th><h3>Besetzung:</h3></th>
                <th><h3>Abzeichen:</h3></th>

            </tr>
            <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <?php
            //Fetch für S1 Innendienst/Stab - Leiter S1 Spieß
            $sql_s1 = "SELECT * FROM Mitgliederliste WHERE Sonderposten = 'Leiter S1 Spieß'";
            $sql_s1 = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Sonderposten = 'Leiter S1 Spieß'";
            $result_s1 = $conn->query($sql_s1);
            ?>



            <?php
            if ($result_s1->num_rows > 0) {
            // output data of each row
            while($row = $result_s1->fetch_assoc()) {
            //END
            ?>

            <tr>

                <td><h4>Leiter S1 Spieß:</h4></td>
                <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                <?php }
                //----------------------------
                } else { ?>

                    <td><h4>Leiter S1 Spieß:</h4></td>
                    <td><h4>OStFw.&nbsp;</h4></td>
                    <td><a href="#"><i>vakant</i></a></td>
                    <td><img src="https://www.9jgkp.de/Bilder/Rang/Oberstabsfeldwebel.png" title="Oberstabsfeldwebel" alt="Oberstabsfeldwebel"></td>

                    <?php
                };
                //----------------------------
                ?>

            </tr>
            <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <?php
            //Fetch für S1 Innendienst/Stab - V-Soldat
            $sql_s1 = "SELECT * FROM Mitgliederliste WHERE Sonderposten = 'V-Soldat'";
            $sql_s1 = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Sonderposten = 'V-Soldat'";
            $result_s1 = $conn->query($sql_s1);
            ?>



            <?php
            if ($result_s1->num_rows > 0) {
            // output data of each row
            while($row = $result_s1->fetch_assoc()) {
            //END
            ?>

            <tr>

                <td><h4>V-Soldat:</h4></td>
                <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>


                <?php }
                //----------------------------
                } else { ?>

                    <td><h4>V-Soldat: </h4></td>
                    <td><h4>Jäger&nbsp;</h4></td>
                    <td><a href="#">---</a></td>
                    <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                    <?php
                };
                //----------------------------
                ?>
            </tr>

            <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        </table>

    </div>

    <div>

        <br>
        <br>

        <div class="teiler"></div>

        <br>
        <br>

    </div>

    <div>
        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <!-- ------------------------------------------------------------------------------- I. Zug --------------------------------------------------------------------------- I. Zug ------------------------------------------------------------------------------------- -->
        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <!-- I. ZUG -->

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

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für I.Zug - Zugführung I. Zug
                $sql_z1 = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'I. Zug' AND Position = 'Zugführer'";
                $sql_z1 = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'I. Zug' AND Position = 'Zugführer'";
                $result_z1 = $conn->query($sql_z1);
                ?>



                <?php
                if ($result_z1->num_rows > 0) {
                // output data of each row
                while($row = $result_z1->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Zugführung I. Zug:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>


                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Zugführung I. Zug:</h4></td>
                        <td><h4>Hptm.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Hauptmann.png" title="Hauptmann" alt="Hauptmann"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für I.Zug - Stlv. Zugführung
                $sql_z1 = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'I. Zug' AND Position = 'Stlv. Zugführer'";
                $sql_z1 = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'I. Zug' AND Position = 'Stlv. Zugführer'";
                $result_z1 = $conn->query($sql_z1);
                ?>



                <?php
                if ($result_z1->num_rows > 0) {
                // output data of each row
                while($row = $result_z1->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Stlv. Zugführung:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>


                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Stlv. Zugführung:</h4></td>
                        <td><h4>Fähnr.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Faehnrich.png" title="Fähnrich" alt="Fähnrich"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

            </table>

        </div>

        <div>

            <br>
            <br>
            <br>

        </div>
        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <!-- ------------------------------------------------------------------------------- I. Gruppe --------------------------------------------------------------------------- I. Gruppe ------------------------------------------------------------------------------- -->
        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <!-- I. Gruppe -->
        <div class="tabelle">

            <table style="margin-left:auto; margin-right:auto">

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                <tr>

                    <th colspan="4"><h2>1. Gruppe <i>(Alpha)</i></h2></th>

                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                <tr>

                    <th><h4>Posten:</h4></th>
                    <th><h4>Dienstgrad:&nbsp;</h4></th>
                    <th><h3>Besetzung:</h3></th>
                    <th><h3>Abzeichen:</h3></th>

                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Alpha - Gruppenführer
                $sql_alpha = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Alpha' AND Position = 'Gruppenführer'";
                $sql_alpha = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Alpha' AND Position = 'Gruppenführer'";
                $result_alpha = $conn->query($sql_alpha);
                ?>

                <?php
                if ($result_alpha->num_rows > 0) {
                // output data of each row
                while($row = $result_alpha->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Gruppenführer:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Gruppenführer:</h4></td>
                        <td><h4>Fw.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Feldwebel.png" title="Feldwebel" alt="Feldwebel"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Alpha - Truppführer I.
                $sql_alpha = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Alpha' AND Position = 'Truppführer I'";
                $sql_alpha = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Alpha' AND Position = 'Truppführer I'";
                $result_alpha = $conn->query($sql_alpha);
                ?>

                <?php
                if ($result_alpha->num_rows > 0) {
                // output data of each row
                while($row = $result_alpha->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Truppführer I.:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Truppführer I.:</h4></td>
                        <td><h4>Uffz.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Unteroffizier.png" title="Unteroffizier" alt="Unteroffizier"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Alpha - Truppführer II.
                $sql_alpha = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Alpha' AND Position = 'Truppführer II'";
                $sql_alpha = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Alpha' AND Position = 'Truppführer II'";
                $result_alpha = $conn->query($sql_alpha);
                ?>

                <?php
                if ($result_alpha->num_rows > 0) {
                // output data of each row
                while($row = $result_alpha->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Truppführer II.:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Truppführer II.:</h4></td>
                        <td><h4>HGefr.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Hauptgefreiter.png" title="Hauptgefreiter" alt="Hauptgefreiter"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Alpha - Sanitäter
                $sql_alpha = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Alpha' AND Position = 'Sanitäter'";
                $sql_alpha = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Alpha' AND Position = 'Sanitäter'";
                $result_alpha = $conn->query($sql_alpha);
                ?>

                <?php
                if ($result_alpha->num_rows > 0) {
                // output data of each row
                while($row = $result_alpha->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Sanit&auml;ter:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Sanitäter:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Alpha - LMG-Schütze
                $sql_alpha = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Alpha' AND Position = 'LMG-Schütze'";
                $sql_alpha = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Alpha' AND Position = 'LMG-Schütze'";
                $result_alpha = $conn->query($sql_alpha);
                ?>

                <?php
                if ($result_alpha->num_rows > 0) {
                // output data of each row
                while($row = $result_alpha->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>LMG-Sch&uuml;tze:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>LMG-Schütze:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Alpha - Schütze
                $sql_alpha = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Alpha' AND Position = 'Schütze'";
                $sql_alpha = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Alpha' AND Position = 'Schütze'";
                $result_alpha = $conn->query($sql_alpha);
                ?>

                <?php
                if ($result_alpha->num_rows == 1) {
                // output data of each row
                while($row = $result_alpha->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Sch&uuml;tze:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>

                </tr>
            <tr>
            <td><h4>Schütze:</h4></td>
            <td><h4>Jäger&nbsp;</h4></td>
            <td><a href="#">---</a></td>
            <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

            <?php }
            //----------------------------
            } elseif ($result_alpha->num_rows > 1) {
            // output data of each row
            while($row = $result_alpha->fetch_assoc()) {
            //END
            ?>

            <tr>

            <td><h4>Sch&uuml;tze:</h4></td>
            <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
            <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
            <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>


            <?php }
            //----------------------------
            } else { ?>

                <tr>

                    <td><h4>Schütze:</h4></td>
                    <td><h4>Jäger&nbsp;</h4></td>
                    <td><a href="#">---</a></td>
                    <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                </tr>
                <tr>
                    <td><h4>Schütze:</h4></td>
                    <td><h4>Jäger&nbsp;</h4></td>
                    <td><a href="#">---</a></td>
                    <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                    <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Alpha - Schütze-EH
                $sql_alpha = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Alpha' AND Position = 'Schütze-EH'";
                $sql_alpha = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Alpha' AND Position = 'Schütze-EH'";
                $result_alpha = $conn->query($sql_alpha);
                ?>

                <?php
                if ($result_alpha->num_rows > 0) {
                // output data of each row
                while($row = $result_alpha->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Sch&uuml;tze-EH:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>




                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Schütze-EH:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Alpha - PA-Schütze
                $sql_alpha = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Alpha' AND Position = 'PA-Schütze'";
                $sql_alpha = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Alpha' AND Position = 'PA-Schütze'";
                $result_alpha = $conn->query($sql_alpha);
                ?>

                <?php
                if ($result_alpha->num_rows > 0) {
                // output data of each row
                while($row = $result_alpha->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>PA-Sch&uuml;tze:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>PA-Schütze:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Alpha - PA-Assistent
                $sql_alpha = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Alpha' AND Position = 'PA-Assistent'";
                $sql_alpha = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Alpha' AND Position = 'PA-Assistent'";
                $result_alpha = $conn->query($sql_alpha);
                ?>

                <?php
                if ($result_alpha->num_rows > 0) {
                // output data of each row
                while($row = $result_alpha->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>PA-Assistent:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>PA-Assistent:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Alpha - DMR-Schütze
                $sql_alpha = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Alpha' AND Position = 'DMR-Schütze'";
                $sql_alpha = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Alpha' AND Position = 'DMR-Schütze'";
                $result_alpha = $conn->query($sql_alpha);
                ?>

                <?php
                if ($result_alpha->num_rows > 0) {
                // output data of each row
                while($row = $result_alpha->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>DMR-Sch&uuml;tze:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>DMR-Schütze:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

            </table>

        </div>

        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <!-- ------------------------------------------------------------------------------- II. Gruppe --------------------------------------------------------------------------- II. Gruppe --------------------------------------------------------------- -->
        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <!-- II. Gruppe -->
        <div class="tabelle">

            <table style="margin-left:auto; margin-right:auto">

                <tr>

                    <th colspan="4"style="text-align:center"><h2>2. Gruppe <i>(Bravo)</h2></i></th>

                </tr>

                <tr>

                    <th><h4>Posten:</h4></th>
                    <th><h4>Dienstgrad:&nbsp;</h4></th>
                    <th><h3>Besetzung:</h3></th>
                    <th><h3>Abzeichen:</h3></th>

                </tr>





                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Bravo - Gruppenführer
                $sql_bravo = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Bravo' AND Position = 'Gruppenführer'";
                $sql_bravo = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Bravo' AND Position = 'Gruppenführer'";
                $result_bravo = $conn->query($sql_bravo);
                ?>

                <?php
                if ($result_bravo->num_rows > 0) {
                // output data of each row
                while($row = $result_bravo->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Gruppenführer:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Gruppenführer:</h4></td>
                        <td><h4>FW.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Feldwebel.png" title="Feldwebel" alt="Feldwebel"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Bravo - Truppführer I.
                $sql_bravo = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Bravo' AND Position = 'Truppführer I'";
                $sql_bravo = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Bravo' AND Position = 'Truppführer I'";
                $result_bravo = $conn->query($sql_bravo);
                ?>


                <?php
                if ($result_bravo->num_rows > 0) {
                // output data of each row
                while($row = $result_bravo->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Truppführer I.:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Truppführer I.:</h4></td>
                        <td><h4>Uffz.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Unteroffizier.png" title="Unteroffizier" alt="Unteroffizier"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Bravo - Truppführer II.
                $sql_bravo = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Bravo' AND Position = 'Truppführer II'";
                $sql_bravo = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Bravo' AND Position = 'Truppführer II'";
                $result_bravo = $conn->query($sql_bravo);
                ?>



                <?php
                if ($result_bravo->num_rows > 0) {
                // output data of each row
                while($row = $result_bravo->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Truppführer II.:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Truppführer II.:</h4></td>
                        <td><h4>HGefr.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Hauptgefreiter.png" title="Hauptgefreiter" alt="Hauptgefreiter"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Bravo - Sanitäter.
                $sql_bravo = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Bravo' AND Position = 'Sanitäter'";
                $sql_bravo = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Bravo' AND Position = 'Sanitäter'";
                $result_bravo = $conn->query($sql_bravo);
                ?>



                <?php
                if ($result_bravo->num_rows > 0) {
                // output data of each row
                while($row = $result_bravo->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Sanit&auml;ter:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Sanitäter:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Bravo - Schütze.
                $sql_bravo = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Bravo' AND Position = 'Schütze'";
                $sql_bravo = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Bravo' AND Position = 'Schütze'";
                $result_bravo = $conn->query($sql_bravo);
                ?>



                <?php
                if ($result_bravo->num_rows == 1) {
                // output data of each row
                while($row = $result_bravo->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Sch&uuml;tze:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>

                </tr>
            <tr>
            <td><h4>Schütze:</h4></td>
            <td><h4>Jäger&nbsp;</h4></td>
            <td><a href="#">---</a></td>
            <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

            <?php }
            //----------------------------
            } elseif ($result_bravo->num_rows > 1) {
            // output data of each row
            while($row = $result_bravo->fetch_assoc()) {
            //END
            ?>

            <tr>

            <td><h4>Sch&uuml;tze:</h4></td>
            <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
            <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
            <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>


            <?php }
            //----------------------------
            } else { ?>

                <tr>

                    <td><h4>Schütze:</h4></td>
                    <td><h4>Jäger&nbsp;</h4></td>
                    <td><a href="#">---</a></td>
                    <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                </tr>
                <tr>
                    <td><h4>Schütze:</h4></td>
                    <td><h4>Jäger&nbsp;</h4></td>
                    <td><a href="#">---</a></td>
                    <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                    <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Bravo - Schütze-EH.
                $sql_bravo = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Bravo' AND Position = 'Schütze-EH'";
                $sql_bravo = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Bravo' AND Position = 'Schütze-EH'";
                $result_bravo = $conn->query($sql_bravo);
                ?>



                <?php
                if ($result_bravo->num_rows > 0) {
                // output data of each row
                while($row = $result_bravo->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Schütze-EH:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Schütze-EH:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Bravo - PA-Schütze
                $sql_bravo = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Bravo' AND Position = 'PA-Schütze'";
                $sql_bravo = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Bravo' AND Position = 'PA-Schütze'";
                $result_bravo = $conn->query($sql_bravo);
                ?>



                <?php
                if ($result_bravo->num_rows > 0) {
                // output data of each row
                while($row = $result_bravo->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>PA-Sch&uuml;tze:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>




                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>PA-Schütze:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Bravo - PA-Assistent
                $sql_bravo = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Bravo' AND Position = 'PA-Assistent'";
                $sql_bravo = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Bravo' AND Position = 'PA-Assistent'";
                $result_bravo = $conn->query($sql_bravo);
                ?>

                <?php
                if ($result_bravo->num_rows > 0) {
                // output data of each row
                while($row = $result_bravo->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>PA-Assistent:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>PA-Assistent:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Bravo - MG-Schütze
                $sql_bravo = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Bravo' AND Position = 'MG-Schütze'";
                $sql_bravo = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Bravo' AND Position = 'MG-Schütze'";
                $result_bravo = $conn->query($sql_bravo);
                ?>



                <?php
                if ($result_bravo->num_rows > 0) {
                // output data of each row
                while($row = $result_bravo->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>MG-Schütze:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>MG-Schütze:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Bravo - MG-Assistent
                $sql_bravo = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Bravo' AND Position = 'MG-Assistent'";
                $sql_bravo = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Bravo' AND Position = 'MG-Assistent'";
                $result_bravo = $conn->query($sql_bravo);
                ?>



                <?php
                if ($result_bravo->num_rows > 0) {
                // output data of each row
                while($row = $result_bravo->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>MG-Assistent:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>MG-Assistent:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>

                </tr>

            </table>

        </div>
        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <!-- ------------------------------------------------------------------------------- III. Gruppe --------------------------------------------------------------------------- III. Gruppe --------------------------------------------------------------- -->
        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <!-- III. Gruppe -->
        <div class="tabelle">

            <table style="margin-left:auto; margin-right:auto">

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                <tr>

                    <th colspan="4"style="text-align:center"><h2>3. Gruppe <i>(Charlie)</h2></i></th>

                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                <tr>

                    <th><h4>Posten:</h4></th>
                    <th><h4>Dienstgrad:&nbsp;</h4></th>
                    <th><h3>Besetzung:</h3></th>
                    <th><h3>Abzeichen:</h3></th>

                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Charlie - Gruppenführer
                $sql_charlie = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Charlie' AND Position = 'Gruppenführer'";
                $sql_charlie = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Charlie' AND Position = 'Gruppenführer'";
                $result_charlie = $conn->query($sql_charlie);
                ?>



                <?php
                if ($result_charlie->num_rows > 0) {
                // output data of each row
                while($row = $result_charlie->fetch_assoc()) {
                //END
                ?>


                <tr>

                    <td><h4>Gruppenführer:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Gruppenführer:</h4></td>
                        <td><h4>Fw.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Feldwebel.png" title="Feldwebel" alt="Feldwebel"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für charlie - Truppführer I.
                $sql_charlie = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Charlie' AND Position = 'Truppführer I'";
                $sql_charlie = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Charlie' AND Position = 'Truppführer I'";
                $result_charlie = $conn->query($sql_charlie);
                ?>



                <?php
                if ($result_charlie->num_rows > 0) {
                // output data of each row
                while($row = $result_charlie->fetch_assoc()) {
                //END
                ?>


                <tr>

                    <td><h4>Truppführer I.:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Truppführer I.:</h4></td>
                        <td><h4>Uffz.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Unteroffizier.png" title="Unteroffizier" alt="Unteroffizier"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für charlie - Truppführer II.
                $sql_charlie = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Charlie' AND Position = 'Truppführer II'";
                $sql_charlie = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Charlie' AND Position = 'Truppführer II'";
                $result_charlie = $conn->query($sql_charlie);
                ?>



                <?php
                if ($result_charlie->num_rows > 0) {
                // output data of each row
                while($row = $result_charlie->fetch_assoc()) {
                //END
                ?>


                <tr>

                    <td><h4>Truppführer II.:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Truppführer II.:</h4></td>
                        <td><h4>HGefr.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Hauptgefreiter.png" title="Hauptgefreiter" alt="Hauptgefreiter"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für charlie - Sanitäter
                $sql_charlie = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Charlie' AND Position = 'Sanitäter'";
                $sql_charlie = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Charlie' AND Position = 'Sanitäter'";
                $result_charlie = $conn->query($sql_charlie);
                ?>



                <?php
                if ($result_charlie->num_rows > 0) {
                // output data of each row
                while($row = $result_charlie->fetch_assoc()) {
                //END
                ?>


                <tr>

                    <td><h4>Sanit&auml;ter:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Sanitäter:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für charlie - Schütze
                $sql_charlie = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Charlie' AND Position = 'Schütze'";
                $sql_charlie = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Charlie' AND Position = 'Schütze'";
                $result_charlie = $conn->query($sql_charlie);
                ?>



                <?php
                if ($result_charlie->num_rows == 1) {
                // output data of each row
                while($row = $result_charlie->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Sch&uuml;tze:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>

                </tr>
            <tr>
            <td><h4>Schütze:</h4></td>
            <td><h4>Jäger&nbsp;</h4></td>
            <td><a href="#">---</a></td>
            <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

            <?php }
            //----------------------------
            } elseif ($result_charlie->num_rows > 1) {
            // output data of each row
            while($row = $result_charlie->fetch_assoc()) {
            //END
            ?>

            <tr>

            <td><h4>Sch&uuml;tze:</h4></td>
            <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
            <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
            <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>


            <?php }
            //----------------------------
            } else { ?>

                <tr>

                    <td><h4>Schütze:</h4></td>
                    <td><h4>Jäger&nbsp;</h4></td>
                    <td><a href="#">---</a></td>
                    <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                </tr>
                <tr>
                    <td><h4>Schütze:</h4></td>
                    <td><h4>Jäger&nbsp;</h4></td>
                    <td><a href="#">---</a></td>
                    <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                    <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für charlie - Schütze-EH
                $sql_charlie = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Charlie' AND Position = 'Schütze-EH'";
                $sql_charlie = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Charlie' AND Position = 'Schütze-EH'";
                $result_charlie = $conn->query($sql_charlie);
                ?>



                <?php
                if ($result_charlie->num_rows == 1) {
                // output data of each row
                while($row = $result_charlie->fetch_assoc()) {
                //END
                ?>

                <tr>

                    <td><h4>Sch&uuml;tze-EH:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>

                </tr>
            <tr>
            <td><h4>Schütze-EH:</h4></td>
            <td><h4>Jäger&nbsp;</h4></td>
            <td><a href="#">---</a></td>
            <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

            <?php }
            //----------------------------
            } elseif ($result_charlie->num_rows > 1) {
            // output data of each row
            while($row = $result_charlie->fetch_assoc()) {
            //END
            ?>

            <tr>

            <td><h4>Sch&uuml;tze-EH:</h4></td>
            <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
            <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
            <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>


            <?php }
            //----------------------------
            } else { ?>

                <tr>

                    <td><h4>Schütze-EH:</h4></td>
                    <td><h4>Jäger&nbsp;</h4></td>
                    <td><a href="#">---</a></td>
                    <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                </tr>
                <tr>
                    <td><h4>Schütze-EH:</h4></td>
                    <td><h4>Jäger&nbsp;</h4></td>
                    <td><a href="#">---</a></td>
                    <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                    <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für charlie - Pionier
                $sql_charlie = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Charlie' AND Position = 'Pionier'";
                $sql_charlie = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Charlie' AND Position = 'Pionier'";
                $result_charlie = $conn->query($sql_charlie);
                ?>



                <?php
                if ($result_charlie->num_rows > 0) {
                // output data of each row
                while($row = $result_charlie->fetch_assoc()) {
                //END
                ?>


                <tr>

                    <td><h4>Pionier:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Pionier:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für charlie - PA-Schütze
                $sql_charlie = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Charlie' AND Position = 'PA-Schütze'";
                $sql_charlie = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Charlie' AND Position = 'PA-Schütze'";
                $result_charlie = $conn->query($sql_charlie);
                ?>



                <?php
                if ($result_charlie->num_rows > 0) {
                // output data of each row
                while($row = $result_charlie->fetch_assoc()) {
                //END
                ?>


                <tr>

                    <td><h4>PA-Schütze:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>PA-Schütze:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für charlie - PA-Assistent
                $sql_charlie = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Charlie' AND Position = 'PA-Assistent'";
                $sql_charlie = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Charlie' AND Position = 'PA-Assistent'";
                $result_charlie = $conn->query($sql_charlie);
                ?>



                <?php
                if ($result_charlie->num_rows > 0) {
                // output data of each row
                while($row = $result_charlie->fetch_assoc()) {
                //END
                ?>


                <tr>

                    <td><h4>PA-Assistent:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>PA-Assistent:</h4></td>
                        <td><h4>Jäger&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jaeger.png" title="Jäger" alt="Jäger"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

            </table>

        </div>

        <div style="clear: both;"></div>

        <div>

            <br>
            <br>
            <br>

        </div>

        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <!-- ------------------------------------------------------------------------------- IV. Gruppe --------------------------------------------------------------------------- IV. Gruppe --------------------------------------------------------------- -->
        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <!-- IV. Gruppe -->
        <div class="center">

            <table style="margin-left:auto; margin-right:auto">

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                <tr>

                    <th colspan="4"><h2>4. Gruppe <i>(Sierra)</i></h2></th>

                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                <tr>

                    <th><h4>Posten:</h4></th>
                    <th><h4>Dienstgrad:&nbsp;</h4></th>
                    <th><h3>Besetzung:</h3></th>
                    <th><h3>Abzeichen:</h3></th>

                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Sierra - Gruppenführer
                $sql_Sierra = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Sierra' AND Position = 'Gruppenführer'";
                $sql_Sierra = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Sierra' AND Position = 'Gruppenführer'";
                $result_Sierra = $conn->query($sql_Sierra);
                ?>



                <?php
                if ($result_Sierra->num_rows > 0) {
                // output data of each row
                while($row = $result_Sierra->fetch_assoc()) {
                //END
                ?>


                <tr>

                    <td><h4>Gruppenführer:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Gruppenführer:</h4></td>
                        <td><h4>Uffz.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Aufkl%C3%A4rer/Unteroffizier-Auf.png" title="Unteroffizier" alt="Unteroffizier"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>

                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Sierra - Scharfschütze
                $sql_Sierra = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Sierra' AND Position = 'Scharfschütze'";
                $sql_Sierra = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Sierra' AND Position = 'Scharfschütze'";
                $result_Sierra = $conn->query($sql_Sierra);
                ?>



                <?php
                if ($result_Sierra->num_rows > 0) {
                // output data of each row
                while($row = $result_Sierra->fetch_assoc()) {
                //END
                ?>


                <tr>

                    <td><h4>Scharfschütze:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Scharfschütze:</h4></td>
                        <td><h4>Schtz.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Aufkl%C3%A4rer/Gefreiter-Auf.png" title="Schütze" alt="Schütze"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <?php
                //Fetch für Sierra - Beobachter
                $sql_sierra = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Sierra' AND Position = 'Beobachter'";
                $sql_sierra = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Sierra' AND Position = 'Beobachter'";
                $result_sierra = $conn->query($sql_sierra);
                ?>



                <?php
                if ($result_sierra->num_rows > 0) {
                // output data of each row
                while($row = $result_sierra->fetch_assoc()) {
                //END
                ?>


                <tr>

                    <td><h4>Beobachter:</h4></td>
                    <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                    <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                    <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>



                    <?php }
                    //----------------------------
                    } else { ?>

                        <td><h4>Beobachter:</h4></td>
                        <td><h4>Schtz.&nbsp;</h4></td>
                        <td><a href="#">---</a></td>
                        <td><img src="https://www.9jgkp.de/Bilder/Rang/Aufkl%C3%A4rer/Gefreiter-Auf.png" title="Schütze" alt="Schütze"></td>

                        <?php
                    };
                    //----------------------------
                    ?>
                </tr>
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

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


            </table>

        </div>

    </div>

    <div style="clear: both;"></div>

    <div>

        <div>

            <br>
            <br>

            <div class="teiler"></div>

            <br>
            <br>

        </div>

    </div>

    <div>

        <!-- Reserve und Rekruten -->
        <div style="text-align:center;">

            <!-- Überschrift -->
            <p><h1>Reservisten<h1></p>
                    <br>

        </div>
        <table class="center">


            <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

            <tr>

                <th><h4>Posten:</h4></th>
                <th><h4>Dienstgrad:&nbsp;</h4></th>
                <th><h3>Besetzung:</h3></th>
                <th><h3>Abzeichen:</h3></th>

            </tr>
            <?php
            //Fetch für Reservisten
            $sql_Res = "SELECT * FROM Mitgliederliste WHERE Dienstposten = 'Reservisten'";
            $sql_Res = "SELECT * FROM Mitgliederliste JOIN Ranks ON Mitgliederliste.Rang = Ranks.Rang_Nummer WHERE Dienstposten = 'Reservisten' ORDER BY Rang DESC";
            $result_Res = $conn->query($sql_Res);
            ?>



            <?php
            if ($result_Res->num_rows > 0) {
                // output data of each row
                while($row = $result_Res->fetch_assoc()) {
                    //END
                    ?>
                    <tr>
                        <td><h4>Reservist:</h4></td>
                        <td><h4><?php echo $row["Short"]; ?>&nbsp;</h4></td>
                        <td><a href="<?php echo $row["URL"]; ?>"><?php echo $row["Name"]; ?></a></td>
                        <td><img src="<?php echo $row["Grafik"]; ?>" title="<?php echo $row["Rang_Name"]; ?>" alt="<?php echo $row["Rang_Name"]; ?>"></td>
                    </tr>

                <?php }
                //----------------------------
            } else {};
            //----------------------------
            ?>
        </table>
</body>
</html>