@include('admin.header')



<div class="row">

          <div class="col-md-2 navigation ">

            @include('admin.sidebar') 

          </div>

          <div class="col-md-10">

            <table border="3px" class="table table-bordered">

	<tr>

		<th>Id</th>
		<th>Image</th>
		<th>Hotel Title</th>
		<th>Sort Description</th>
		<th>Action</th>

	</tr>

	<?php

	foreach($user as $user){

		$id    = $user->id;
		$image    = $user->image;
		$title  = $user->title;
		$description = $user->description;
		

	?>

	<tr>

		<td><?php echo $id;?></td>
		<td><img src="../public/uploads/logo/<?php echo $image;?>"></td>
		<td><?php echo $title;?></td>
		<td><?php echo $description;?></td>
		<td>
			<a href="<?php echo url('deletes');?>/<?php echo $id;?>">delete</a>
			<a href="<?php echo url('edit');?>/<?php echo $id;?>">update</a>

		</td>

	</tr>

	  <?php } ?>
 
	



</table>
            

          </div>

      </div>

    </div>
