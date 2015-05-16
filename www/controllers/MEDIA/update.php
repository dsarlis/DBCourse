<?
        include "../../database.php";
        include "../../models/MEDIA/functions.php";

        $media_id = $_POST[ "media_id" ];
        $modeButton = "Ενημέρωση";

        $res = getFields( $media_id );


        foreach ($res as $row) {
                $name = $row[ 'name' ];
                $kind = $row[ 'kind' ];
        }

        include "../../views/MEDIA/update.php";
?>

