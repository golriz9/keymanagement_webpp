<html>
    <head>
        <link rel="shortcut icon" href="logo56.jpg" type="image/x-icon" />
        <title>Ephemeral Key Pair</title>
        <link href="content/app.css" rel="stylesheet"/>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    </head>

    <body onbeforeunload='resetSelect()'>
        <header class="container-fluid">
            <h1>Ephemeral Key Pair</h1>    
        </header>
        <fieldset>
            <legend>  
                <p>If the key-establishment scheme requires an ephemeral key pair, the
                    owner generates it (as close to the time of use as possible).
                    the owner obtains this key pair.</p>
                    <p>Either the owner or a trusted third party 
                    generates the key pair. If the key pair is generated by a trusted third party,
                    then the key pair shall be transported to the owner in a protected manner (source
                    authenticaton, integrity protection and confidentiality of private key).</p>            

                <ul>
                    <li>Obtain appropriate domain parameters.</li>
                    <li>The owner must have assurance of the validity of these domain parameters.</li>
                    <li>If a key-establishment scheme is used that requires that the owner have a static key pair, the owner obtains this key pair.</li>
                    <li>Either the owner or a trusted third party generates the key pair.</li>
                    <li>If the key pair is generated by a trusted third party, then the key pair shall be transported to the owner in a protected manner.</li>
                </ul>
  
                <p>Please choose the scheme of key establishment:</p>
            </legend>
            <button onclick="history.go(-1);">Back </button> 
            <a href="KeyAgreement.php">
                <button>Key Agreement</button>
            </a>
            <a href="Home.php">
                    <button>Home</button>
            </a>
        </fieldset>

    </body>

</html>