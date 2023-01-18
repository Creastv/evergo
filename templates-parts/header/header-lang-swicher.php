<?php $languages = icl_get_languages('skip_missing=0&order=dsc&orderby=id');
                        if(count($languages)){
                            echo '<div class="lang-swicher">';
                            echo '<ul>';
                            foreach($languages as $l){
                                if(!$l['active']) {
                                echo '<li>';
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
                            echo '<ul>';
                            echo '</div>';
                        }
                    ?>
