<?php
$languages = icl_get_languages('skip_missing=1&order=dsc&orderby=id');
if(1 < count($languages)){
    if(count($languages)){
     echo '<div class="lang-swicher">';
        echo '<ul>';
        foreach($languages as $l){           
            echo '<li>';
            if(!$l['active']) {
                echo '<a href="'.$l['url'].'">';
            } else {
                echo '<li class="active">';
            }
            if($l['native_name'] !== 'English') {
                echo 'PL';
            } else {       
                echo 'EN';        
            }          
            if(!$l['active']) {
            echo '</a>';
            }
            echo '</li>';          
         }
        echo '</ul>';
    echo '</div>';
    }
}
