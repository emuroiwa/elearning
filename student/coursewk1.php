<link rel="stylesheet" href="tabs.css" type="text/css" media="screen, projection"/>

<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.7.custom.min.js"></script><?php 
 
  if(!isset($_SESSION['reg'])){
	  session_start();
$_SESSION['reg']=$_GET['reg'];}
  $result111 = mysql_query("SELECT * FROM marksbook ,student ,student_class WHERE marksbook.reg = student.reg AND term ='$_SESSION[term]' AND marksbook.session ='$_SESSION[year]' AND  marksbook.reg = '$_SESSION[reg]'   AND student.reg = student_class.student and subject_id='maths' and marksbook.date='$_GET[date]'  ")or die(mysql_query());
     $rows1 = mysql_num_rows($result111);
	 if($rows1==0){
		 
		 echo "<center><strong><font color='red'><br><br><br><br><br>Your marksbook for $_GET[date] are currently being proccessed . Please keep checking........<br><br><br><br><br><br><br><br><br><br><br>
</font></strong></center>";
		 exit;
		 }
		 else{

  
  
  
   ?>
<script type="text/javascript">
	function move(index){
		var $tabs = $('#tabs').tabs();
	   $tabs.tabs('select', index);
	   return false;
	}

	$(function() {

		var $tabs = $('#tabs').tabs();

		$(".ui-tabs-panel").each(function(i){

		  var totalSize = $(".ui-tabs-panel").size() - 1;
		  
			 
		  if (i != totalSize) {
			  next = i + 2;
			 // $(this).append("<a href='#' class='next-tab mover' rel='" + next + "'>Next Page &#187;</a>");
		  }
  
		  if (i != 0) {
			  prev = i;
			  //$(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'>&#171; Prev Page</a>");
		  }
	
		});

		$('.next-tab, .prev-tab').click(function() { 
			   $tabs.tabs('select', $(this).attr("rel"));
			   return false;
		   });
   

	}); 
</script>


<script type="text/javascript">
	document.write('<style type="text/css">.tabber{display:none;}<\/style>');
</script>


<style type="text/css">
<!--
.style1 {color: #003399}
-->
</style>

1) Click on the Tabs to view results for a particular subject, for example - click on the [ Content ] to View content results.<br>
<center>

<strong>Marks Book for <?php echo "$_GET[name] $_GET[surname] ($_SESSION[reg])" ?></strong></center>
            <center><!--<img src="../scripts/images/postprinticon.png"</a>--></a></center>
<div id="page-wrap">
	<div id="tabs">
	
		<ul>
			<li><a href="#maths">Maths </a></li>
			<li><a href="#english">English</a></li>			
			<li><a href="#content">Content</a></li>
            <li><a href="#shona">Shona</a></li>
            <li><a href="#other">Other Subjects</a></li> 
           
	
		</ul>
		<div id="maths" class="ui-tabs-panel">
		   [ <a href="#" onclick="move(1);">English&gt;&gt; </a> ]
		   <br />
		   <br /><hr />
		   <p><?php include('mathsnow.php');?>
		   
		   </p>
	  </div>

		<div id="english" class="ui-tabs-panel">
			[ <a href="#" onclick="move(0);">&lt;&lt; Maths </a> ]
			[ <a href="#" onclick="move(2);">Content &gt;&gt; </a> ]
		   <br />
		   
		   <p><?php include('englishnow.php');?>
		   
		   </p>
	  </div>
	
<div id="content" class="ui-tabs-panel ui-tabs-hide">
			[ <a href="#" onclick="move(1);">&lt;&lt; English</a> ]
			[ <a href="#" onclick="move(3);">Shona &gt;&gt; </a> ]
		    <br />
		    <br /><hr />
    <p><?php include('contentnow.php');?>
		   </p>
    </div><div id="shona" class="ui-tabs-panel ui-tabs-hide">
			[ <a href="#" onclick="move(2);">&lt;&lt; Content</a> ]
			[ <a href="#" onclick="move(4);">Other Subjects &gt;&gt; </a> ]
		    <br />
		    <br /><hr />
		    <p><?php include('shonanow.php');?></p>
	  </div>
<div id="other" class="ui-tabs-panel ui-tabs-hide">
			[ <a href="#" onclick="move(3);">&lt;&lt; Shona</a> ]
		
		    <br />
		   <br /><hr />
		    <p><?php include('othernow.php');?></p>
	  </div>
     
	
	</div>
</div>
<?php  if(isset($_SESSION['reg'])){
	  session_start();
 unset($_SESSION['reg']);} } ?>



