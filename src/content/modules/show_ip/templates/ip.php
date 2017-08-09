<h2 class="accordion-header"><?php
translate("ip_address_and_hostname");
?></h2>
<div class="accordion-content">
	<strong><?php Template::escape(get_ip());?></strong> <?php
if (function_exists("gethostbyaddr")) {
    ?>(<?php translate("hostname");?>: <?php Template::escape(gethostbyaddr($_SERVER['REMOTE_ADDR']));?>)
<?php }?>
</div>