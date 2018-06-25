<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理中心</title>
</head>
   <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
       <frame name=head src="/lab/index.php/Admin/Manager/head/name/<?php echo ($name); ?>" frameborder=0 noresize scrolling=no>
           <frameset cols="200, *">
               <frame name=left src="/lab/index.php/Admin/Manager/left/name/<?php echo ($name); ?>" frameborder=0 noresize scrolling="no" />
               <frame name=right src="/lab/index.php/Admin/Manager/right" frameborder=0 noresize scrolling=yes />
           </frameset>
   </frameset>
</html>