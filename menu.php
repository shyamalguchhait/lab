<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="./index.php">
                <img src="./image/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex flex-row-reverse">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <div class="nav-item-hover">
                                <a class="nav-link" href="./index.php">Home</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-item-hover">
                                <a class="nav-link" href="./research.php">Research</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-item-hover">
                                <a class="nav-link" href="./members.php">Team</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-item-hover">
                                <a class="nav-link" href="./publications.php">Publications</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-item-hover">
                                <a class="nav-link" href="./achievement.php">Achievement</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-item-hover">
                                <a class="nav-link" href="./extra.php">Extra</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-item-hover">
                                <a class="nav-link" href="./lightbox.php">Lightbox</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-item-hover">
                                <a class="nav-link" href="./contact.php">Contact</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="switch">
                <input class="toggle" type="checkbox" id="switch" name="mode">
                <label for="switch"> Toggle </label>
            </div>
        </div>
    </nav>
    <script src="./static/bootstrap-5.0.2-dist/carhartl-jquery-cookie/jquery.cookie.js" type="text/javascript"></script>
    <link rel="stylesheet" href="./static/css/menu.css" type="text/css">
    <script src="./static/js/menu.js" type="text/javascript"></script>
</body>

<?php include 'footer.php'; ?>