<?php
if(!isset($MCEtoken)){
	exit();
}
?>
<script>tinymce.init({ selector:'textarea' });</script>
<style>
.mce-branding{
	display:none;
}
</style>