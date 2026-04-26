```html
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu Makanan Sederhana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<div class="container">

    <div class="jumbotron text-center">
        <h1>Menu Makanan</h1>
        <h1>Nusantara</h1>
    </div>

    <!-- FILTER BUTTON -->
    <div class="text-center mb-4">
        <button class="btn btn-primary" onclick="filterSelection('all')">Semua</button>
        <button class="btn btn-success" onclick="filterSelection('berat')">Makanan Berat</button>
        <button class="btn btn-warning" onclick="filterSelection('ringan')">Makanan Ringan</button>
        <button class="btn btn-info" onclick="filterSelection('minuman')">Minuman</button>
    </div>

    <!-- MENU -->
    <div class="row">

        <div class="col-4 filterDiv berat">
            <div class="border p-3">
                <h5>Nasi Goreng</h5>
                <p>Makanan berat dengan nasi dan telur.</p>
            </div>
        </div>

        <div class="col-4 filterDiv berat">
            <div class="border p-3">
                <h5>Mie Ayam</h5>
                <p>Mie dengan topping ayam.</p>
            </div>
        </div>

        <div class="col-4 filterDiv ringan">
            <div class="border p-3">
                <h5>Roti Bakar</h5>
                <p>Cemilan roti dengan coklat.</p>
            </div>
        </div>

        <div class="col-4 filterDiv ringan">
            <div class="border p-3">
                <h5>Kentang Goreng</h5>
                <p>Cemilan kentang renyah.</p>
            </div>
        </div>

        <div class="col-4 filterDiv minuman">
            <div class="border p-3">
                <h5>Es Teh</h5>
                <p>Minuman teh dingin.</p>
            </div>
        </div>

        <div class="col-4 filterDiv minuman">
            <div class="border p-3">
                <h5>Jus Mangga</h5>
                <p>Minuman jus buah segar.</p>
            </div>
        </div>

    </div>

</div>

<script>
filterSelection("all")

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");

    if (c == "all") c = "";

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
        if (x[i].className.indexOf(c) > -1) {
            x[i].style.display = "block";
        }
    }
}
</script>

</body>
</html>
```
