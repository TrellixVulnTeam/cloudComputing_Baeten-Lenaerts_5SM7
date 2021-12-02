@extends("master")
@section("pagina","Homebrew spells")

@section("content")
    <body class="spellList">
        <div style="position:fixed; margin-bottom: 500px; margin-left: 500px">
            <h2>Welcome to D&amp;D&nbsp; 5e homebrew creator</h2>
            <p>Name:  <input type="string" name="name" value="" id="name"/></p>
            <p>Casting Time:  <input type="string" name="castingTime" value="" id="castingTime"/></p>
            <p>Level:  <input type="int" name="level" value="" id="level"/></p>  
            <button type="button" onclick="saveSpell()"><strong>Save</strong></button> 
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div style="margin-top: 200px; ">
            <ul class="spellList">
                @if(isset($homebrewSpells))
                    @foreach ($homebrewSpells as $id)
                        <li><strong><a href = "showHomebrewSpell/{{$id->name}}" >{{$id->name}}</a></strong></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </body>
@stop
