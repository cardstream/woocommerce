<!DOCTYPE html>
<html>
<head>
    <title>3D Secure Verification</title>
    <script language="Javascript">
        function OnLoadEvent() { document.form.submit(); }
    </script>
</head>
<body OnLoad="OnLoadEvent();">
<form name="form" action="<?php echo rawurldecode($_GET[ 'ACSURL' ]); ?>" method="post">
    <input type="hidden" name="threeDSRef" value="<?php echo rawurldecode($_GET[ 'threeDSRef' ]); ?>" />
    <input type="hidden" name="threeDSMethodData" value="<?php echo rawurldecode($_GET[ 'threeDSMethodData' ]); ?>" />
    <noscript>
        <p>Please click</p><input id="to-asc-button" type="submit">
    </noscript>
</form>
</body>
</html>