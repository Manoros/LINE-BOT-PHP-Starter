<?php  

$access_token = 'vy8HJfvArEB4xKxlNISLjWpavOlz47xfShEYWu5CKhFP3upSOcBHO8lRpvv/MPJuMKXFFsEEDCufUfXnZkBrKEdIj8ujCI/rA45gDXv0K5DRbs+vx411nsNv31jfdNUJSEQmECkmmEvoBnwYCx3uIQdB04t89/1O/w1cDnyilFU=';
        $url = 'https://api.line.me/v1/oauth/verify';
        
        $headers = array('Authorization: Bearer ' . $access_token);
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        
        echo $result;



?>

<script>


</script>


