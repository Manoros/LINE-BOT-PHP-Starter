<script>

POST https://api.line.me/v2/oauth/verify

curl -v -X POST https://api.line.me/v2/oauth/verify \
-H 'Content-Type: application/x-www-form-urlencoded' \
--data-urlencode 'access_token=vy8HJfvArEB4xKxlNISLjWpavOlz47xfShEYWu5CKhFP3upSOcBHO8lRpvv/MPJuMKXFFsEEDCufUfXnZkBrKEdIj8ujCI/rA45gDXv0K5DRbs+vx411nsNv31jfdNUJSEQmECkmmEvoBnwYCx3uIQdB04t89/1O/w1cDnyilFU='

{
   "scope":"P",
   "client_id":"1350031035",
   "expires_in":2591965
}


{
    "error": "invalid_request",
    "error_description": "access_token invalid"
}

</script>