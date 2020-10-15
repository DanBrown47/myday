<html>
    <h1>Hello {{$fname}}</h1>
    His Birthday is on {{$bday}}
    {{$link_pub}}

    <form action="/wished">
        @csrf
        <p>Your Name: </p>
        <input type="text" name="name" required ><br><br>
        <input type="hidden" name="link_pub" value="{{$link_pub}}">
        <button name="default_message" type="submit"  value="Many MAny happy returns of the day {{ $fname }}">Hoi</button><br><br>
        Custom
        <input type="text" name="custom_message"><br><br>
        <input type="submit" value="submit">

    </form>
</html>
