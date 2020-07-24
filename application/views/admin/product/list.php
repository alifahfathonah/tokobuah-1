<table class="table table-hover" id="dataTable" width="100%" cellspacing="0" border="1">
								<thead>
									<tr>
										<th>Name</th>
										<th>Price</th>
										<th>Photo</th>
										<th>Description</th>
										
									</tr>
								</thead>
								<tbody>
									<?php foreach ($products as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->name ?>
										</td>
										<td>
											<?php echo $product->price ?>
										</td>
										<td>
											<?php echo $product->image ?>
										</td>
										<td>
											<?php echo $product->description ?>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
