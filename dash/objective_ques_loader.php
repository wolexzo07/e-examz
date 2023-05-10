
<form method="POST" class="" action="processnow" autocomplete="off" >

	<div class="row">
				
				<div class="col-md-6">
				<p class="txt">Select Courses / Subjects: 
				</p>
				<select id="slect" class="form-control" name="cat">
				<option value="">Choose Categories.....</option>
				<?php include("course_categories.php");?>
				</select>
				
				<a id="addnewsub" class="btn btn-sm btnstyle">
				<i class="fa fa-plus-circle"></i>&nbsp;&nbsp; NEW COURSE</a>
				
				<a class="btn btn-sm btnstyle"><i class="glyphicon glyphicon-circle-arrow-down"></i>&nbsp;&nbsp; PIN DOWN</a>
				
				<a onclick="window.location='post_questions'" class="btn btn-sm btnstyle"><i class="glyphicon glyphicon-circle-arrow-up"></i>&nbsp;&nbsp; REFRESH</a>

				</div>
				
				<div class="col-md-6">
				
				<p class="txt">Assign mark / score point: </p>
				<select id="slect" class="form-control" name="score">
				<?php
				$range = range(1,20);
				foreach($range as $key){
					?>
				<option value="<?php echo $key;?>"><?php echo $key;?></option>
						<?php
				}
				?>
				</select>
				
				</div>
				
	</div>


<p class="txt">Enter Questions:</p>
<textarea class="form-control tarea" name="q"></textarea>

		<div class="row">
				<div class="col-md-6">
					<p class="txt">Enter Option A:</p>
					<textarea  class="form-control tarea" name="a"></textarea>
				</div>
				<div class="col-md-6">
				<p class="txt">Enter Option B:</p>
				<textarea  class="form-control tarea" name="b"></textarea>
				</div>
				
				<div class="col-md-6">
					<p class="txt">Enter Option C:</p>
					<textarea  class="form-control tarea" name="c"></textarea>
				</div>
				<div class="col-md-6">
				
				<p class="txt">Enter Option D:</p>
				<textarea  class="form-control tarea" name="d"></textarea>

				</div>
				
				<?php
				if(x_count("controllerbase","user_id='$userid' AND enable_option_e='1' LIMIT 1") > 0){
					?>
				<div class="col-md-6">
				<p class="txt">Enter Option E:</p>
				<textarea class="form-control tarea" name="e"></textarea>
				</div>
					<?php
				}
				?>
				
				
				<div class="col-md-6">
				
				<p class="txt">Select Correct option:</p>
				<select id="slect" class="form-control" required name="correct">
				<option value="">Choose correct option</option>
				<option value="a">A</option>
				<option value="b">B</option>
				<option value="c">C</option>
				<option value="d">D</option>
				<?php
				if(x_count("controllerbase","user_id='$userid' AND enable_option_e='1' LIMIT 1") > 0){
				?>
				<option value="e">E</option>
				<?php	
				}
				?>
				
				</select>
				
				<button type="submit" class="btn btn-primary btn-lg guo mt-3" ><i class="fa fa-cloud-upload"></i> POST DATA</button>
								
				</div>
		</div>





<input type="hidden" name="getitnow" value="<?php x_print(sha1(uniqid()));?>"/>


<input type="hidden" name="examtype" value="obj"/>

</form>
