<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../../includes/views/head.php'); ?>
    <title>{NAME} | Summer Hoax Club!</title>
</head>

<body>
    <div class="container">
        <?php include_once('../../includes/views/navbar.php'); ?>
        <div class="jumbotron">
            <h1 class="display-4">{HOST OR NAME}</h1>
            <p class="lead">{Description 1}</p>
            <p class="lead">{Description 2 -- Not needed}</p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- INFO -->
                        <h3>Info:</h3>
                        <p>{Paragraph 1}</p>
                        <!-- HEADING1 (Copy and Paste as necessary) -->
                        <h3>Example Heading:</h3>
                        <p>Important Content... <a href="https://github.com/summerhoax/summerhoax.github.io/wiki/Creating-a-Vault-Information-page.">Oh hey it's a link!</a> <strong>Woah, bold!</strong> <em>Italics? WHAT IS THIS</em> <u>Underline? Why</u></p>
                        <br>
                        <!-- PROOF -->
                        <h3>Proof:</h3>
                        <p>{Proof Description}</p>
                        <p>Oh look, an image below!</p>
                        <img alt="SummerHoax Logo" src="https://summerhoax.com/assets/logo.png" style="max-width: 100%;margin: 0 auto;display: block;">
                        <br>
                        <br>
                        <p>Some Cool image, we totally didn't steal from the internet for SkyBomb.</p>
                        <img alt="Cool SkyBomb image from online." src="../assets/skybomb/skybomb.png" style="max-width: 100%;margin: 0 auto;display: block;">
                    </div>
                    <h5 class="text-muted text-center">All information on this website is publically available,<br>
                        therefore it doesn't violate any laws.
                    </h5>
                </div>
                <br>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Quick links:</h5>
                        <p class="text-muted">{Link Description}
                        </p>
                        <hr>
                        <ul>
                            <li>
                                <a tabindex="0" data-toggle="popover" title="Information" data-content="{Woah, A popover!}" href="https://summerhoax.com" target="_blank" id="popover">SummerHoax Website!</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h5>Example Side Container:</h5>
                        <p class="text-muted">Pretty much the same as above.
                            <a tabindex="0" data-toggle="popover" data-trigger="focus" title="Information" data-content="{Woah, A popover!}" href="https://w3schools.com/html" target="_blank" id="popover">W3School's Guide to HTML</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('../../includes/views/scripts.php'); ?>
</body>

</html>
