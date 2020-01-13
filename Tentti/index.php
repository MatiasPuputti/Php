<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Harjoitus 3</title>

</head>

<body>

  <div>

    <div>
      <button onclick='window.location.href = "Data.php?Category=Työkalut"'>Kategoria testi (Kategoria = Työkalut)</button>
    </div>

    <div>
      <button onclick='window.location.href = "Data.php?Id=1"'>Id Testi (Id = 1)</button>
    </div>

    <div>
      <button onclick='window.location.href = "Data.php?Price=300"'>Hinta Testi (Hinta < 300)</button>
    </div>

    <div>
      <button onclick='window.location.href = "Data.php?Id=1&Category=Työkalut"'>Haku Id:llä ja kategorialla</button>
    </div>

    <div>
      <button onclick='window.location.href = "Data.php?Price=601&Category=Työkalut"'>Haku kategorialla ja hinnalla</button>
    </div>

    <div>
      <button onclick='window.location.href = "Data.php?"'>Ei parametreja</button>
    </div>

  </div>

</body>
</html>
