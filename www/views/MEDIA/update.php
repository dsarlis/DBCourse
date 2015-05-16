<?php include "../../views/form_header.php" ?>
                <img id="top" src="http:/images/top.png" alt="">
                <div id="form_container">
                <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="../../controllers/MEDIA/updated.php?media_id=<?echo $media_id?>">
                                        <div class="form_description">
                        <h2>MME</h2>
                        <p>Επεξεργαστείτε την καταχώρηση που επιλέξατε</p>
                </div>
                        <ul >

                <li id="li_1" >
                <label class="description" for="media_id">Κωδικός Μέσου</label>
                <div>
                        <input id="element_1" name="media_id" class="element text medium" type="text" maxlength="255" value="<?echo $media_id?>"/>
                </div>
                </li>
                <li id="li_2" >
                <label class="description" for="name">Όνομα Μέσου</label>
                <div>
                        <input id="element_1" name="name" class="element text medium" type="text" maxlength="255" value="<?echo $name?>"/>
                </div>
                </li>
                <li id="li_2" >
                <label class="description" for="kind">Είδος</label>
                <div>
                        <input id="element_1" name="kind" class="element text medium" type="text" maxlength="255" value="<?echo $kind?>"/>
                </div>
                </li>



                <? include "../../views/up_del_footer.php" ?>

