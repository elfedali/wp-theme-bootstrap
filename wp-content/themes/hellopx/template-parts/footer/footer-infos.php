<?php
$email = get_option('email_address') ? get_option('email_address') : '';
$address = get_option('client_address') ? get_option('client_address') : '';
$tel = get_option('client_telephone') ? get_option('client_telephone') : '';
?>

<p>
   Email : <a href="mailto:<?php echo $email ?>?subject=Mail from <?= get_bloginfo('name') ?>"><?php echo $email ?></a>
</p>

<p>
   Tel : <a href="tel:<?php echo $tel ?>"><?php echo $tel ?></a>
</p>

<p>
   Address : <address><?php echo $address ?></address>
</p>


