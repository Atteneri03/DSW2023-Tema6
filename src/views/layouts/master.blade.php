<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield("title")</title>
  <style>
    nav {background-color: lightcoral;}
    footer {background-color: lightblue;}

  </style>
</head>
<body>
  <nav>Menú</nav>
  <header>
    <h1>Título de la aplicación</h1>
    <h2>@yield("subtitle")</h2>
  </header>
  <hr>
  <main>
    @section("container")
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum laboriosam corrupti, unde asperiores labore eius molestiae? Saepe sunt, optio sequi, nemo in error omnis tempora dignissimos quisquam officiis molestiae nisi.</p>
  @show
  </main>
  <footer>
    IES Las Galletas &copy;2024
  </footer>
</body>
</html>