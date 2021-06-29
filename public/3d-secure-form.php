<!DOCTYPE html>
<html>
<head>
    <title>3D Secure Verification</title>
    <script language="Javascript">
        function OnLoadEvent() { document.form.submit(); }
    </script>
</head>
<body OnLoad="OnLoadEvent();">
Invoking 3-D secure form, please wait ...
<form name="form" action="<?php echo rawurldecode($_GET[ 'ACSURL' ]); ?>" method="post">
    <input type="hidden" name="PaReq" value="<?php echo rawurldecode($_GET[ 'PaReq' ]); ?>">
    <input type="hidden" name="TermUrl" value="<?php echo rawurldecode($_GET[ 'TermUrl' ]); ?>">
    <input type="hidden" name="MD" value="<?php echo rawurldecode($_GET[ 'MD' ]); ?>">
    <noscript>
        <p>Please click</p><input id="to-asc-button" type="submit">
    </noscript>
</form>
</body>
</html>