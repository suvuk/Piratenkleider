<div class="first-footer-widget-area">
    <div class="skin">
        <?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) { ?>
            <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
        <?php } else { 
            
        
         global $default_footerlink_liste;   
         global $defaultoptions;
           $options = get_option( 'piratenkleider_theme_options' );
           if (!isset($options['default_footerlink_key']))                
            $options['default_footerlink_key'] = $defaultoptions['default_footerlink_key'];
           if (!isset($options['default_footerlink_show']))                
            $options['default_footerlink_show'] = $defaultoptions['default_footerlink_show'];
           
           
            if ((is_array($default_footerlink_liste)) && ($options['default_footerlink_show']==1)) {     
                  $bereich = $options['default_footerlink_key'];
                  if (!isset($default_footerlink_liste[$bereich]['sublist'])) {
                      $bereich =  $defaultoptions['default_footerlink_key'];
                  }
                  $title =   $default_footerlink_liste[$bereich]['title'];
                  $url =   $default_footerlink_liste[$bereich]['url'];
                  
                  echo "<h2>".$title."</h2>";
                  if ((isset($url)) && (strlen($url)>5)) {
                    echo '<p class="titelurl"><a href="'.$url.'">'.$url.'</a></p>';
                  }
                  echo '<ul class="default_footerlinks">';
                  
                  foreach($default_footerlink_liste[$bereich]['sublist'] as $i => $value) {
                       echo '<li><a href="'.$value.'">';                                                                                                        
                       echo $i.'</a></li>';
                       echo "\n";
                 }            
                 echo '</ul>';                                          
           }
        } ?>
        
        
        
        
    </div>
</div>
