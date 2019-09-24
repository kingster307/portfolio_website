<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The King's Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- main css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/829adc92fd.js"></script>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500|Oswald:400,700&display=swap"
        rel="stylesheet">

</head>

<body>
    <!-- <section class="blueBackground"> -->
    <div class="container-fluid">

        <div class="row">
            <!-- this is why the padding changes && is a liitle off see p-0 -->
            <div class="col-lg-11 p-0 px-sm-3 b-0 blueBackground min-vh-100 overflow-hidden" id="backgroundColorChecker">
                <h1 class="pl-3 pt-2 headingText font-weight-bold sectionHeading">-<br>Résumé</h1>
                <!-- needs to be cards  -->
                <!-- button -->
                <!-- need to have file that can bed downloaded -->
                <!-- want to use spinner -->

                <!-- topRow -->
                <div class="container p-0 px-sm-3">
                    <div class="row mt-3 text-center">

                        <div class="col-12 col-sm-6 col-md-4 p-0 mt-4 mt-md-0">

                            <div class="card d-inline-block cardText b-0 cardSizing" id="cardShadow">
                                <img class="card-img-top" src="img/adult-brainstorming-businesspeople-1532191.png"
                                    alt="Card image cap">
                                <div class="card-body" id="cardBodyMarginFix">
                                    <h5 class="card-title">Project Manager</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">C2 Consulting</h6>
                                </div>
                            </div>
                            <!-- <div class="cardFlipBack">
                                <h5>Job Responsibilities</h5>
                                <p>1</p>
                                <p>2</p>
                                <p>3</p>
                            </div> -->

                        </div>

                        <div class="col-12 col-sm-6 col-md-4 p-0 mt-4 mt-md-0">

                            <div class="card d-inline-block cardText b-0 cardSizing" id="cardShadow">
                                <img class="card-img-top" src="img/close-up-code-coding-160107.png"
                                    alt="Card image cap">
                                <div class="card-body" id="cardBodyMarginFix">
                                    <h5 class="card-title">Freelance Developer</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Self Employed</h6>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-4 p-0 mt-4 mt-md-0">

                            <div class="card d-inline-block cardText b-0 cardSizing" id="cardShadow">
                                <img class="card-img-top" src="img/iconSv.jpg" alt="Card image cap">
                                <div class="card-body" id="cardBodyMarginFix">
                                    <h5 class="card-title">Owner</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Shredrville</h6>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-4 p-0 mt-4">

                            <div class="card d-inline-block cardText b-0 cardSizing" id="cardShadow">
                                <img class="card-img-top" src="img/ball-baseball-brown-54330.png" alt="Card image cap">
                                <div class="card-body" id="cardBodyMarginFix">
                                    <h5 class="card-title">ball field technician</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">City of Kissimmee</h6>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="mb-4 mt-5 mt-md-2 mt-lg-0 mb-lg-3 btn-lg hoverEffect" id="downloadBtnContainer">
                        <a href="documents/peterKingResume.pdf" class="text-capitalize whiteLinkText resumeButtonClick"
                            download="peterKingResume.pdf" target="_blank">Download Resume</a>
                    </div>

                </div>

                <!-- hamburger responsive nav -->
                <div id="nav-icon2" class="d-block d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>

            <!-- consider doing with flexbox -->
            <!-- consider doing with flexbox -->
            <!-- verticalNav -->
            <?php include 'navBar.php';?>

        </div>
    </div>

    <!-- </section> -->

    <!-- stack -->
    <!-- bootstrap / jquery  -->


    <!-- need to file to load from local if cdn fails -->

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- customScript -->
    <script src="js/main.js"></script>

    <!-- bootstrap 4  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>