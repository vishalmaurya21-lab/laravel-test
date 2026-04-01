<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // $url="https://chatgpt.com/?utm_source=google&utm_medium=paid_search&utm_campaign=GOOG_C_SEM_GBR_Core_CHT_BAU_ACQ_PER_MIX_ALL_APAC_IN_EN_032525&c_id=22370388714&c_agid=177344203135&c_crid=741704613486&c_kwid={keywordid}&c_ims=&c_pms=9061746&c_nw=g&c_dvc=c&gad_source=1&gad_campaignid=22370388714&gbraid=0AAAAA-I0E5f-yXXA7g9bLxdqpNVw8W3fP&gclid=EAIaIQobChMIr-nO_ujkkgMVLftMAh3vAjPuEAAYASAAEgLJVPD_BwE";
        $url="http://localhost/Prectice/Filters/filter_url.php";
        $url=filter_var($url, FILTER_SANITIZE_URL);
        if(!filter_var($url, FILTER_VALIDATE_URL)===false){
            echo "Valid url";
        }else{
            echo "Invalid Url";
        }

    ?>
</body>
</html>