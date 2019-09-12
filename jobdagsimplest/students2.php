<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro|Roboto&display=swap" rel="stylesheet">
    <!-- own CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Students Simplest 2</title>
    <style>
        .round2 {
            border: 3px solid skyblue;
            background-color: darkorange;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo"><a href="home.html"><img src="images/logo_kleur.png" alt="logo"></a></div>
        <h1>Hello, Students!</h1>
    </header>
    <main class="container flexd2">
        <p class="intro">
            <h3>Thanks for the lovely input <?php echo $_SESSION['voornaam']?>.</h3>
        </p>
        <div class="idinput">
            <form action="verwerk2.php" method="POST">
                <p class="title">Gelieve op volgende vragen een bondig antwoord te geven.</p>
                
                <section class="waarom">
                    <p class="title">Ik kies voor webdevelopment omdat...</p><input type="textarea" name="waarom" placeholder="Waarom kiest u webdevelopment ?" required>
                </section>
                <section class="wat">
                    <p class="title">Wat zoekt u in een bedrijf ?...</p><input type="textarea" name="wat" placeholder="Wat zoekt u ?" required>
                </section>
                <section class="waardes">
                    <p class="title">Welke waardes zijn voor u belangrijk ?...</p><input type="textarea" name="waarde" placeholder="Welke waardes acht u !important in een bedrijf ?" required>
                </section>

                <section class="skills">
                    
                <p class="title">Zet je <span class="vet">DRIE</span> sterkste punten in de verf</p>
                <div class="selectcontainer">
                <div>
                <select class="firstskill" name="skill1">
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="jQuery">jQuery</option>
                    <option value="Wordpress">Wordpress</option>
                    <option value="PHP">PHP</option>
                    <option value="MySQL">MySQL</option>
                    <option value="Bootstrap">Bootstrap</option>
                    <option value="Python">Python</option>
                </select>
                </div>
                <div>
                <select class="secondskill" name="skill2">
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="jQuery">jQuery</option>
                    <option value="Wordpress">Wordpress</option>
                    <option value="PHP">PHP</option>
                    <option value="MySQL">MySQL</option>
                    <option value="Bootstrap">Bootstrap</option>
                    <option value="Python">Python</option>
                </select>
                </div>
                <div>
                <select class="thirdskill" name="skill3">
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="jQuery">jQuery</option>
                    <option value="Wordpress">Wordpress</option>
                    <option value="PHP">PHP</option>
                    <option value="MySQL">MySQL</option>
                    <option value="Bootstrap">Bootstrap</option>
                    <option value="Python">Python</option>
                </select>
                </div>
                </div>
                </section>
                <section><input type="submit" name="submit2"></section>
            </form>
            
        </div>
    </main>
    <footer>
        <section class=progressSection>
            <span>progress</span>
            <div class="proGress">
                <div class="round1 round"></div>
                <div class="round2 round"></div>
                <div class="round3 round"></div>
            </div>
        </section>
        <p>&copy;2019 Students WebOntwikkeling Leuven</p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>