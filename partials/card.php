<?php 
include __DIR__.'../index.php'; 

?>
        
        
<main class="bg-c">
    <div class="row">
        
        <div class="col-6 col-md-4 col-lg-2 gy-5">
            <div class="card my-5 text-center">
                <img :src="item.poster" alt="">
                <h4>{{item.title}}</h4>
                <div class="sub">{{item.author}}</div>
                <div class="sub">{{item.year}}</div>
            </div>
            
          </div>
      </div>
    </div>
</main>
    
    
    
