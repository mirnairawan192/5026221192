<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linktree Style Page</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1Wl8NqV9M91Q6Bt" crossorigin="anonymous">
    <link href="https://snapnet-cdn.storage.googleapis.com/fonts/avenir-next/AvenirNext-DemiBold.ttf"  rel="stylesheet">


    <style>
        body {
    background: linear-gradient(180deg, #d22d2d, #710000);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
    font-family: AvenirNext; /* Menggunakan font Inter */
    color: #fff;
}


        .container {
            text-align: center;
            max-width: 500px;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        }

        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
        }

        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            font-size: 22px;
            font-weight: bold;
            color: #fff;
        }

        .btn-linktree {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 50px;
            padding: 15px;
            width: 100%;
            font-size: 18px;
            border: none;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }
        .btn-linktree {
    position: relative; /* Important to position the dots relative to the button */
    padding-right: 40px; /* Ensure there's space for the dots */
}

.btn-linktree::after {
    content: '⋮'; /* Vertical three dots */
    font-size: 1.5rem;
    color: #ccc6b3;
    position: absolute;
    right: 10px; /* Position the dots 10px from the right edge */
    top: 50%; /* Start the centering process */
    transform: translateY(-50%); /* Adjust position to exactly center the dots vertically */
}

}

        }

        .btn-linktree:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Foto Profil -->
    <div class="profile-pic">
        <img src="profile-pic.webp" alt="Profile Picture">
    </div>

    <!-- Nama pengguna -->
    <h1>@artists</h1>

    <!-- Links -->
    <div class="d-grid gap-2">
        <button class="btn btn-linktree">ArtistsAgainstCOVID Official Website</button>
        <button class="btn btn-linktree">Sticker Shop!</button>
        <button class="btn btn-linktree">GoFundMe</button>
        <button class="btn btn-linktree">ArtistsAgainstCOVID Application Form</button>
        <button class="btn btn-linktree">ArtistsAgainstCOVID TikTok</button>
        <button class="btn btn-linktree">ArtistsAgainstCOVID Carrd</button>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Bergabung dengan artists di Linktree</p>
    </div>
</div>

<!-- Bootstrap JS (optional for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GZ6Uk7aY6Qpi0wxqS40dhTIkv81Q+OYIAZdp8JbSc6hkM81GE0IGcAiSn2mP" crossorigin="anonymous"></script>
</body>
</html>
