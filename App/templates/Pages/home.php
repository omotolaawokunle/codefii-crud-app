<main>
	<div class="container">
		<h1>Products <span><a href="/add" class="btn info-text">+ Add</a></span></h1>
		<?php if($data['data'] == []){ ?>
			<p class="alert error">No products added yet!</p>
		<?php }else{ ?>
		<?php $datas = $data['data'];?>
			<table>
				<thead>
					<tr>
						<th>S/N</th>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php $sn = 1;
					foreach($datas as $d){?>
					<tr>
						<td><?=$sn;?></td>
						<td><?=$d->{'name'};?></td>
						<td><?=$d->{'price'};?></td>
						<td><?=$d->{'description'};?></td>
						<td><a href="/edit/<?=$d->{'id'};?>" class="info-text">Edit</a></td>
						<td><a href="/delete/<?=$d->{'id'};?>" class="error-text">Delete</a></td>
					</tr>
					<?php $sn++;} ?>
				</tbody>
			</table>
		<?php
	} ?>
	</div>
</main>