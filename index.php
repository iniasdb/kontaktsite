<!-- 
                                                                                         
                           .mh+:`                                                                   
                          .mMMMNNdo/`                                                               
                ``       :mMMMMMMMMd`       `-/osyyyyo+:-`         ::----.```                       
         `.-:+sdmy      oNMMMMMMMMy`      -odNMMMMMMMMMMNmy:`      dMNNNNmmmm:      -:----...`      
        `dmNMMMMMM-   `yMMMMMMMMN+      :yNMMMMMMMMMMMMMMMMMd+`   `NMMMMMMMMMN:     yMNNNNNmm/      
         +MMMMMMMMh` `yMMMMMMMMM+     `oNMMMMMMMMMmyMMMMMMMMMMd/  /MMMMMMMMMMMN/    dMMMMMMMM-      
          mMMMMMMMMy.yMMMMMMMMN/     `yMMMMMMMMNN       NMMMMMMN/ /MMMMMMMMMMMMN:  -MMMMMMMMM`      
          +MMMMMMMMMMMMMMMMMMMo      yMMMMMMMN            MMMMMMMoyMMMMMMMMMMMMMN. +MMMMMMMMN       
           mMMMMMMMMMMMMMMMMMMdo.`  -MMMMMMMN             NMMMMMMMMMMMMMMMMMMMMMMd-hMMMMMMMMh       
           :MMMMMMMMMMMMMMMMMMMMMmhshMMMMMMM              MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM+       
            oMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM              MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM.       
             mMMMMMMMMNdMMMMMMMMMMMMMMMMMMMMN            NMMMMMMMMMMMMMMMMd.hMMMMMMMMMMMMMMm        
             :MMMMMMMMM:`/yNMMMMMMMMMMMMMMMMMM          MMMMMMMMMMMMMMMMMMh  hMMMMMMMMMMMMMs        
              dMMMMMMMMN`  `-ohNMMMMMMMMMMMMMMMMN    MMMMMMMMMNhMMMMMMMMMo  .mMMMMMMMMMMMM-        
              :MMMMMMMMMs      `-oymMN+:mMMMMMMMMMMMMMMMMMMMMMh.+MMMMMMMMM.   -NMMMMMMMMMMm         
    `          hMMMMMMMds          `--  `+dMMMMMMMMMMMMMMMMMh:  ohhdmmNMMN     /MMMMMMMMMMo         
   `mmdhyso++//sMMMNs/.`                  `-+ydNMMMMMMMMMm+-`    ````..-::      +dmmmNMMMM.`.-.     
   /MMMMMMMMMMMMMMMNdhyyss+/::                `.-:yMMMMMMNhs`           -        ``.-:+hMMdmmNd     
   oMMMMMMMMMMMMMMMMMMMMMMMMMh    `...-:/o.      `NMMMMMMMMh       `-:sdN+ `..-/+oydmmMMMMMMMMM/    
   yMMMMMMMMMMMMMMMMMMMMMMMMM+  :hdmNNNMMMs      oMMMMMMMMM:   `-+ydNMmddmhhhmMdNNdNMMMMMMMMMMMd    
   ydddmmNNMMMMMMMMMMMMMMMMMM/-sNMMMMMMMMMN`    `mMMMMMMMMs`./sdMMMMMMd/som+dyoyds:d+mMMMMMMMMMM-   
        `.:NMMMMMMMMNNNNNNMMMdNMMMMM NMMMMM+    oMMMMMMMMNodNMMMMMMMMMdNshsNddhmhd/o/MMMMMNNmdyo.   
          .MMMMMMMMMo`.--:/oMMMMMM    MMMMMm`  .NMMMMMMMMMMMMMMMMMMMMmhdmd/sm+sysMMMydMMN/-.`       
          -MMMMMMMMM/     -mMMMMM     MMMMMM/  hMMMMMMMMMMMMMMMMMMMMMdyNMMdNNmhdNMMMMMMMM.          
          +MMMMMMMMN     oMMMMMM      NMMMMMs :MMMMMMMMMMMMMMMMMMMdo/` ++/-.`   NMMMMMMMMh          
          yMMMMMMMMh   `yMMMMMMMMMMMMMMMMMMMd`mMMMMMMMMMMMMMMMMMMh              sMMMMMMMMM/         
          mMMMMMMMMo `oNMMMMMMMMMd.+MMMMMMMMMMMMMMMMMMMomMMMMMMMMMs             `NMMMMMMMMd         
         .MMMMMMMMM::mMMMMMMMMMMd.  dMMMMMMMMMMMMMMMMMh `hMMMMMMMMMh`            oMMMMMMMMM:        
         +MMMMMMMMMoNMMMMMMMMMN+`   +MMMMMMMMMMMMMMMMM-  `yMMMMMMMMMd`           `NMMMMMMMMh        
         sdmmNMMNMMMMMMMMMMMNy-     .MMMMMMMMMoshdNMMs    `yMMMMMMMMMh`           sMMMMMMMMM.       
         ```..--oMMMMMMMMMMh:        mMMMMMMMM:  `.-:`     `sMMMMMMMMMy           .MMMMMMMNd/       
               /NMMMMMMMMNo`         dMMMNNmdh:             `yMMMMMMMmy.           ohso+/-.`        
                -hNMMMMMm/   `-+h/   -:::-..`                `yMNmhs/.                              
                  -/sdNs. .:sdNMMMo                           `+-.                                  
                     `-  +mMMMMMMMMs`                                                               
                         .mMMMMMMMMMy                                                               
                          -NMMMMMMNdo`                                                              
                           -NMNho/.                                                                 
                            .-                                                                      

 -->


<?php
$section = "home";
$base = "./";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
</head>
<body>

    <header>
        <div class="overlay"></div>
        <?php include($base."includes/nav.php");?>
        <div class="logo">
            <img src="<?=$base?>images/logolangwit.png" alt="kontakt logo">
        </div>
    </header>
    
    <main class="home">
        <div class="welkom">
            <h1>Welkom bij Chiro Kontakt</h1>
            <?php $pagina = "home"; include($base."includes/database/getTeksten.php")?>
        </div>
        <div class="nieuws">
            <h1>Nieuws</h1>
            <?php $limit=3; include($base."includes/database/getNieuws.php")?>
        </div>
    </main>

    <?php include($base."includes/footer.php")?>
    
</body>
</html>