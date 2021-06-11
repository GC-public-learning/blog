<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    	<ul class="nav">
		  <li class="nav-item">
		    <a class="nav-link active" aria-current="page" href="/">Home</a>
		  </li>
		   <li class="nav-item">
		    <a class="nav-link" href="/customers">Customers</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="/contact">Contacts</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="/infos">Infos</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		  </li>
		</ul>
	@yield('content')
    </div>
</body>
</html>