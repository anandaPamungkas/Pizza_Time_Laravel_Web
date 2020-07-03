@extends('layouts.app')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a new Pizza</h1>
        <form action="/pizzas" method="POST">
        @csrf    
        <label for="name">Your Name:</label>
            <input type="text" id="name" name="name">
            <label for="type">Choose pizza type</label>
            <select name="type" id="type">
                <option value="margheritha">Margheritha</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="verg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="type">Choose base type</label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">thin & crispy</option>
                <option value="thick">Thick</option>
            </select>
            <fieldset>
                <label for="Extra Toppings"></label>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br />
                <input type="checkbox" name="toppings[]" value="peppers">peppers <br />
                <input type="checkbox" name="toppings[]" value="garlic">Garlic <br />
                <input type="checkbox" name="toppings[]" value="olives">Olives <br />
            </fieldset>
            <input type="submit" value="submit">
        </form>
    </div>
@endsection