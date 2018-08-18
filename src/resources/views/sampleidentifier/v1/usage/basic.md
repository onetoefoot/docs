# Basic

First thing is in your app is to setup an auth client. You can do this with one of the two commands below.

```php
php artisan passport:install

php artisan passport:client --password
```

This will create two records in the table oauth_clients.

#### Get an access token

Then with the application you are going to send an api request to get an access token. Below is an example of the payload to send, for the client_id and client_secret select that from the table oauth_clients the one that says 'The Demo Password Grand Client. You would then send the *POST* request to *http://YOUR-DOMAIN.com/oauth/token*

**Example response:**
```php
{
	"grant_type": "password",
	"client_id": CLIENT_ID,
	"client_secret": "CLIENT_SECRET",
	"username": "YOUR-USERNAME",
	"password": "YOUR-PASSWORD",
	"scope": "*"
}
```

If all goes well you should get back a request like below.

**Example response:**
```php
{
    "token_type": "Bearer",
    "expires_in": 31536000,
    "access_token": "REALLY_LONG_ACCESS_TOKEN",
    "refresh_token": "REALLY_LONG_REFRESH_TOKEN"
}
```

#### Retrieve all records

Next we can test retrieving all the records in the sample identifier table. Send a *GET* request to *http://YOUR_DOMAIN.com/api/sampleidentifier* the return results should look like the below records.

In the header of the request you must add *Bearer* with the value of the *access_token* you received from above.

**Example response:**
```php
Get All Data
{
    "data": [
        {
            "id": 21,
            "user_id": 1,
            "identifier": "qwer",
            "sample": "1234",
            "session": "zxcv",
            "created_at": "2018-08-17 23:07:48",
            "updated_at": "2018-08-17 23:07:48"
        },
        {
            "id": 22,
            "user_id": 1,
            "identifier": "qwert",
            "sample": "2345",
            "session": "zxcv",
            "created_at": "2018-08-17 23:07:48",
            "updated_at": "2018-08-17 23:07:48"
        },
        {
            "id": 23,
            "user_id": 1,
            "identifier": "qwer",
            "sample": "3456",
            "session": "zxcv",
            "created_at": "2018-08-17 23:07:48",
            "updated_at": "2018-08-17 23:07:48"
        }
    ]
}
```

#### Posting new records

To add a new record send a *POST* request to *http://YOUR-DOMAIN.com/api/sampleidentifier*

In the header of the request you must add *Bearer* with the value of the *access_token* you received from above.

**Example response:**
```php
{
    "data": {
        "status": "success"
    }
}
```