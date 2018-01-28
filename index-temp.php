<!DOCTYPE HTML>
<html lang="en-US" style="height:100%;">
    <head>
        <meta charset="UTF-8">

        <script language=javascript>

        </script>
        <title>Misstine</title>
    </head>
    <body style="text-align:center; background-color: rgb(258,258,258); height:99%;">
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
         <?php
        if (stripos($_SERVER['HTTP_USER_AGENT'],"iPhone") || stripos($_SERVER['HTTP_USER_AGENT'],"iPod") || stripos($_SERVER['HTTP_USER_AGENT'],"iPad")){
            $link = 'itms-services://?action=download-manifest&url=https://app.meevuu.com/ipa/misstine/install.plist';
        }
        // else if (stripos($_SERVER['HTTP_USER_AGENT'],"java") || stripos($_SERVER['HTTP_USER_AGENT'],"android")){
        //     // echo ;
        //     $link = 'https://app.meevuu.com/ipa/filmax/filmax.apk';
        // }
        else{
            $link = "";
        }
        ?>


        <h2>Misstine</h2>

        <!-- <a href="MistineDemo.zip">Source code</a> -->
        <br/>

        <?php if ($link != ""){ ?>
        <a href="<?=$link?>"><img src="../images/btnDownload.png" style="width: 30%; margin-top: 100px;"></a>

        <br/>


        <div style="margin-top: 40px;">
            <label>When you press download button </label> <br/>
            <label>the application process download from homescreen.</label> <br/><br/><br/>
            <label>If you use iOS9 and can't install. <br/> Do this step go to Settings -> General -> Profiles -> tap on your Profile -> <br/> tap on Trust button.</label>
        </div>
        <br/>
        <?php }else{ ?>

        <a href="<?=$link?>"><img src="../images/btnDownload.png" style="width: 30%; margin-top: 100px; display: none;"></a>

        <br/>
        <div style="margin-top: 40px;">
            <h3>This device doesn't support to download application</h3>
        </div>
        <br/>

        <?php } ?>

        <div style="position: fixed; bottom: 0; padding-bottom: 20px; width: 100%; ">
            <img src="../images/logoWisdomlanna.png" style="width: 20%; ">
        </div>

    </body>
</html>
