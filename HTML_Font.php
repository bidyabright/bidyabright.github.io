<!-- SQL TABLE :html_sql_table_font
TABLE ROW : Font_Heading,Font_Paragraph,Font_Code,Font_Output,Font_Note
SQL LINK ID : $FontHeading,$FontParagraph,$FontCode,$FontOutput,$FontNote
TEXTBOX :Font_Heading,Font_Paragraph,Font_Code,Font_Output,Font_Note
FOME NAME : newfont -->
<?php
require('db.php');
?>
<!DOCTYPE html>
<style type="text/css">
.register_Font_widget{padding: 1px 0px;
    box-shadow: 0 1px 1px 0 #C7C7C7 inset;
    background: none repeat scroll 0 0 #E9E9E9;}
</style>
<body>
	<div>
		<div class="register_Font_widget"> <!-- HTML Font START -->
		<?php
			$count=1; //repert row start
			$sel_query="Select * from html_sql_Table_Font ORDER BY id desc;"; //SQL QUERY ALL IS REQUIRYED id is important
			$result = mysqli_query($con,$sel_query); //$con database connect ID and $sel_query SQL connection ID
		while($row = mysqli_fetch_assoc($result)) { ?>
		<div class="html_tutorial">
			<h3><?php echo $row["Font_Heading"]; ?></h3> <!-- SQL Font Row name ID -->
			<p><?php echo $row["Font_Paragraph"]; ?></p> <!-- SQL Font Row age ID -->
			<div class="code-section">
				<div class="code-box">
					<div class="sub-heading">CODE</div>
					<?php echo $row["Font_Code"]; ?>
					</div> <!-- SQL Font Row age ID -->
					<div class="output-box">
						<div class="sub-heading">CODE</div>
						<?php if($row['Font_Heading'] != ""): ?>
						<img src="uploads/<?php echo $row['Font_Output']; ?>" width="100%" height="auto">
						<?php else: ?>
						<img src="images/default.png" width="auto" height="400px" style="border:1px solid #333333;">
						<?php endif; ?>
						
						</div> <!-- SQL Font Row age ID -->
					</div>
					<div class="note-box"><?php echo $row["Font_Note"]; ?></div> <!-- SQL Font Row age ID -->
				</div>
				<?php $count++; } //repert row end
				?>
			</div>
		</div>
	</body>
</html>