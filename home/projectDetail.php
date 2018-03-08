<?php
$Id = $_GET['Id'];
$projects = projects()->get("Id='$Id'");
?>
<br>
<br>
IMAGE: <img class="img-thumbnail" src="../media/<?=$projects->uploadedImage;?>"><br><br>
TITLE: <?=$projects->title;?><br><br>
CONTENT: <?=$projects->content;?><br><br>
POSTED: <?=$projects->createDate;?>
