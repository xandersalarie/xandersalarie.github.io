<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/404.css">

</head>
<body>
<main class="container">
  <div class="container__left venn" role="img" aria-label="404 Venn Diagram">
    <div class="venn__bubble venn__bubble--left" aria-hidden="true"></div>
    <div class="venn__bubble venn__bubble--right" aria-hidden="true"></div>
    <p class="venn__text venn__text--left" aria-describedby="venn-left">We broke Something</p>
    <p class="venn__text venn__text--center" aria-describedby="venn-center">404</p>
    <p class="venn__text venn__text--right" aria-describedby="venn-right">You cannot type</p>
    <span id="venn-left" class="sr-only">Left side of venn diagram</span>
    <span id="venn-center" class="sr-only">Intersect side of venn diagram</span>
    <span id="venn-right" class="sr-only">Right side of venn diagram</span>
  </div>
  <div class="container__right desc">
    <h1 class="desc__head">Error: 404 - Page Not Found</h1>
    <div class="desc__body">
      <p>You might be here because:</p>
      <ul>
        <li>The page has moved</li>
        <li>The page no longer exists</li>
        <li>You were looking for your kittens and got lost</li>
        <li>You like 404 pages</li>
      </ul>
    </div>
  </div>
</main>
<script src="js/404.js"></script>
</body>
</html>
