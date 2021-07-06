<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Video Facebook</title>
        <link
            rel="icon"
            type="image/icon type"
            href="https://images.vexels.com/media/users/3/223136/isolated/lists/984f500cf9de4519b02b354346eb72e0-facebook-icon-social-media.png"
        >
        <link
            rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
            crossorigin="anonymous"
        >
    </head>

    <body>
        <div class="row justify-content-center">
            <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"/>
        </div>
        <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

        <!-- Your embedded video player code -->
        <div class="fb-video" data-href="https://fb.watch/63UQUvjQ4Q/" data-width="1280" data-show-text="false">
            <div class="fb-xfbml-parse-ignore"/>
        </div>
    </body>
</html>
