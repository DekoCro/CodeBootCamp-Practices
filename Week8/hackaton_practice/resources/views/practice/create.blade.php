<form action="/city" method="POST">
    @csrf

    <div>
        <input type="text" name="Name" placeholder="City name">
    </div>
    <div>
        <input type="text" name="Population" placeholder="City population">
    </div>
    <div>
        <button type="submit">Add city</button>
    </div>
   
</form>