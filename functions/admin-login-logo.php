<?php
// Add to functions.php
// Change image dimensions to fit your needs.

// Custom login logo
function my_login_logo()
{
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(https://www.yourdomain.com/image/source.png);
        		height:84px;
        		width:84px;
        		background-repeat: no-repeat;
        }
    </style>
<?php
}
add_action('login_enqueue_scripts', 'my_login_logo');

 ?>
