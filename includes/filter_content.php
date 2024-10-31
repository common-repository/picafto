<?php

  function picafto_findImgTags($matches){

    foreach ($matches as $key => $match) {
      // Avoid targeting images opted out of lazy loading
      if (!strpos($match, 'data-picafto-off')) {
        $match = preg_replace_callback('/src="(.*?)"/', function($matches) {
          foreach ($matches as $key => $match) {
            $match = preg_replace('/src=|"/', '', $match);
            return "data-picafto-load='" . $match . "'";
          }
        }, $match);
        // Check if has srcset attribute
        if (strpos($match, 'srcset')) {
          $match = preg_replace_callback('/srcset="(.*?)"/', function($matches) {
            foreach ($matches as $key => $match) {
              $match = preg_replace('/srcset=|"/', '', $match);
              return "data-picafto-load-src-set='" . $match . "'";
            }
          }, $match);
        }
        return $match;
      } else {
        return $match;
      }
    }
  }

  function picafto_filter_img($content){
    return preg_replace_callback('/<img(.*?)>/', 'picafto_findImgTags' , $content);
  }

  add_filter('acf_the_content', 'picafto_filter_img');
  add_filter('the_content', 'picafto_filter_img');