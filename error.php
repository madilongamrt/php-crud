<?php if(count($error) >0 ):  ?>

    <di>
        
        <?php foreach($errors as $error): ?>
        <p><?php echo $error ?> </p>
        
        <?php endforeach ?>
    </di>


<?php endif ?>