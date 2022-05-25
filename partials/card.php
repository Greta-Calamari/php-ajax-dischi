
        
        
<main class="bg-c">
    <div class="container">
        <div class="row d-flex">
            <?php foreach($dischi as $disco){?> 
            <div class="col-2">
                <div class="card my-5 text-center">
                    <img class="img2" src="<?php echo $disco['poster'] ?> " alt=""  class="w-50">
                    <h4> <?php echo $disco['title'] ?></h4>
                    <div class="sub"> <?php echo $disco['author'] ?></div>
                    <div class="sub"><?php echo $disco['year'] ?></div>
                </div>
                
            </div>
            <?php } ?>
          </div>
        </div>

    </div>
</main>
    
    
    
