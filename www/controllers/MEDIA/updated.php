<?
        include "../../database.php";
        include "../../models/MEDIA/functions.php";

        $media_id = $_POST[ "media_id" ];
        $name = $_POST[ "name" ];
        $kind = $_POST[ "kind" ];


        $key = $_GET[ "media_id" ];

        $res = update($media_id, $name, $kind, $key );

        include "../upd_footer.php";

?>

