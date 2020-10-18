<html>
    <head><title>Yo</title>
    </head>
    <body>
        @foreach($user_all_msgs as $fields)

        <tr>
            <h5>{{ $fields -> name }}</h5>
            <h5>{{ $fields -> Message }}</h5>
            <br>
        </tr>
        @endforeach

    </body>
</html>
