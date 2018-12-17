<main>
	<div class="container">
		<h1>Add Product</h1>
		<?php $d = $data['data']; ?>
		<form action="/edit/<?=$d->{'id'};?>" method="post">
			<?php if($data['msg']){?>
				<p class="alert success"><?=$msg;?></p>
			<?php } ?>
			<div class="row">
				<div class="input col-m-8">
					<label>Name</label>
					<input type="text" name="name" value="<?=$d->{'name'};?>" />
				</div>
				<div class="input col-m-8">
					<label>Description</label>
					<textarea name="description" col="50" rows="10"><?=$d->{'description'};?></textarea>
				</div>
				<div class="input col-m-8">
					<label>Price</label>
					<input type="number" name="price" value="<?=$d->{'price'};?>" />
				</div>
			</div>
			<div class="input">
				<button type="submit" class="btn lighten-4 info-text btn-large" name="submit" value="1">Register</button>
			</div>
		</form>
	</div>
</main>