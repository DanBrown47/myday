<html>
    <h1>Hello {{$fname}}</h1>
    His Birthday is on {{$bday}}
    {{$link_pub}}

    <form action="/wished">
        @csrf
        <p>Your Name: </p>
        <input type="text" name="name" required ><br><br>
        <button name="Message" type="submit"  value="Many MAny happy returns of the">Hoi</button><br><br>
        <button name="Message" type="submit" value="Message2">Hol</button><br><br>
        Custom
        <input type="text" name="Message"><br><br>
        <input type="submit" value="submit">

    </form>
</html>
