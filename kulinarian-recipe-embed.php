<?php if (!defined('ABSPATH')) die;

/*
Plugin Name: Kulinarian Recipe Embed
Plugin URI:  https://www.kulinarian.com/help/recipe-embed-wordpress
Description: Embed Kulinarian.com recipes on your wordpress website
Version:     1.0
Author:      Nate Martin
Author URI:  https://github.com/etan-nitram
*/

if (!function_exists('kulinarian_recipe_embed'))
{
    function kulinarian_recipe_embed()
    {
        /**
         * Nowdoc concatenation syntax
         * requires PHP 5.3.0
         * http://php.net/manual/en/language.types.string.php#language.types.string.syntax.nowdoc
         * http://stackoverflow.com/a/1848974
         */
echo <<<'EOL'
    <script>
    /* Kulinarian Recipe Embed */
    !function(e,n,t,a,i,c){
        function o(){getEmbed(typeof config == "undefined"?{}:config,a)}i=n.createElement(t),c=n.getElementsByTagName(t)[0],i.id="kaembed",
        i.async=1,i.src=a,c.parentNode.insertBefore(i,c),i.addEventListener?i.addEventListener("load",function(){o()},!1)
        :i.attachEvent&&i.attachEvent("onload",function(){o()})
    }(window,document,"script","https://www.kulinarian.com/js/embed.js");
    </script>
EOL;
    }
}

add_action('wp_footer', 'kulinarian_recipe_embed');
