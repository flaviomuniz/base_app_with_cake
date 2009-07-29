<script type="text/javascript">
    $ (document).ready(function(){
        $("#UserPassword").attr("value", "");
    });
</script>
<?php
	echo $form->input("id");
	echo $form->input("username", array("class" => "required login"));
#	if ($this->action == "add")
#	{
	echo $form->input("password", array("class" => "required"));
#	}
	echo $form->input("name", array("class" => "required"));
	echo $form->input("email", array("class" => "required email"));
?>
<div id="optionUser">
<?php
	echo $form->input("Group", array("multiple" => "checkbox"));
?>
</div>
