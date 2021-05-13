<h1>Customers</h1>


<!-- get data (old way) -->
<ul>
	<?php foreach ($customers as $c): ?>
		<li><?= $c ?></li>
	<?php endforeach; ?>
</ul>

<!-- get data (with blade) -->
<ul>
	@foreach($customers as $c)
		<li>{{ $c }}</li>
	@endforeach
</ul

