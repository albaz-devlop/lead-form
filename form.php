<html>
<head>
    <title>Charter Request Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="http://styles.lagooner.com/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="http://styles.lagooner.com/pageResponsive.css" type="text/css" />
    <!-- JQUERY SCRIPTS -->
    <script src="http://javascripts.lagooner.com/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="http://javascripts.lagooner.com/jquery-ui.min.js" type="text/javascript"></script>
</head>
<body>

    <div id="charterForm">
        <img src="http://www.lagooner.com/images/gina-pointing.png" style="width:45%; height:auto; margin-left:0; top:7px; position:relative; z-index:2;" />
        <form id="signupForm" method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
            <fieldset class="ui-widget ui-widget-content ui-corner-all">
                <legend class="ui-widget ui-widget-header ui-corner-all">Fill Out Form for Charter Fishing Information</legend>
                <p>Request information about a fishing trip with a Lagooner Fishing Guide by filling out and submitting this form</p>
                <p>
                    <label for="firstname">Firstname</label>
                    <input placeholder="<? echo $firstnamePlaceholderErr; ?>" id="firstname" class="input ui-state-<?php echo $ui_state_firstname; ?>" name="firstname" type="text" value="<? echo $firstname; ?>">
                    <? echo $firstnameErr; ?>
                </p>
                <p>
                    <label for="lastname">Lastname</label>
                    <input placeholder="<? echo $lastnamePlaceholderErr; ?>" id="lastname" class="input ui-state-<?php echo $ui_state_lastname; ?>" name="lastname" type="text" value="<? echo $lastname; ?>">
                    <? echo $lastnameErr; ?>
                </p>
                <p>
                    <label for="email">Email</label>
                    <input placeholder="<? echo $emailPlaceholderErr; ?>" id="email" class="input ui-state-<?php echo $ui_state_email; ?>" name="email" type="email" value="<? echo $email; ?>">
                    <? echo $emailErr; ?>
                </p>
                <p>
                    <label for="telephone">Telephone</label>
                    <input placeholder="<? echo $telephonePlaceholderErr; ?>" id="telephone" class="input ui-state-<?php echo $ui_state_telephone; ?>" name="telephone" type="tel" value="<? echo $telephone; ?>">
                    <? echo $telephoneErr; ?>
                </p>
                <p>
                    <input type="checkbox" checked class="checkbox" id="newsletter" name="newsletter" value="Please Subscribe Me to Your Newsletter" name="newsletter">
                    <label for="newsletter">Subscribe to Newsletter</label>
                </p>
                <div id="captchaStyling" class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                <p style="margin-bottom:14px;">
                    <button class="submit" type="submit" id="button">Submit</button>
                </p>
            </fieldset>
        </form>
    </div>

</body>
</html>
