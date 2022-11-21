<form method="POST" class="" action="processnow" autocomplete="off" >
<p class="txt">Select Courses / Subjects:</p>
<select id="slect" class="form-control slect" name="cat">
<option value="">Choose Categories.....</option>
<?php include("course_categories.php");?>
</select>
<p class="txt">Enter Questions:</p>
<textarea class="form-control tarea" name="q"></textarea>



<input type="hidden" name="getitnow" value="<?php x_print(sha1(uniqid()));?>"/>
<input type="hidden" name="posted" value="<?php x_print($_SESSION["IQGAMES_MATRIC_2018_VISION"]);?>"/>

<p class="txt">Select Correct option:</p>
<select id="slect" class="form-control" required name="correct">
<option value="T">True</option>
<option value="F">False</option>
</select>

<input type="hidden" name="examtype" value="true_false"/>
<button type="submit" class="btn btn-primary btn-lg guo"><i class="fa fa-cloud-upload"></i> POST DATA</button>

</form>
