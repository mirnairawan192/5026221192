<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="mt-4 p-5 bg-warning text-white rounded">
            <h1>My First Bootstrap Page</h1>
        </div>
        <div class="alert alert-success">
            <p>This part is inside a .container class.</p>
        </div>
        <p>The .container class provides a responsive fixed width container.</p>

        <div class="row">
            <div class="col-lg-1">
                <p>kiri</p>
            </div>
            <div class="col-lg-10 border border-1">
                <p>tengah</p>
                <div class="row">
                    <div class="col-lg-8 border border-1">
                        <p>ini isinya 8</p>
                    </div>
                    <div class="col-lg-4 border border-1">
                        <p>ini isinya 4</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="https://www.its.ac.id"><button class="btn btm-danger">Bahaya !</button></a>
                        button></a>
                        <button class="btn">Custom !</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
                <p>kanan</p>
            </div>
        </div>

    </div>
</body>

</html>