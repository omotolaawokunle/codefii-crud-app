<main>
	<div class="container">
		<h1>Add Product</h1>
		<form action="/add" method="post">
			<?php if($data['msg']){?>
				<p class="alert success"><?=$msg;?></p>
			<?php } ?>
			<div class="row">
				<div class="input col-m-8">
					<label>Name</label>
					<input type="text" name="name" placeholder="Name" />
				</div>
				<div class="input col-m-8">
					<label>Description</label>
					<textarea name="description" col="50" rows="10" placeholder="Enter Description"></textarea>
				</div>
				<div class="input col-m-8">
					<label>Price</label>
					<input type="number" name="price" placeholder="Price" />
				</div>
			</div>
			<div class="input">
				<button type="submit" class="btn lighten-4 info-text btn-large" name="submit" value="1">Register</button>
			</div>
		</form>
	</div>
</main>