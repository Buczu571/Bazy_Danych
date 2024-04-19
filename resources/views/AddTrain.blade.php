<h1>Dodaj pociąg do rozkładu</h1>
<div>
    <form action="add" method="POST">
        @csrf
        <label>
            Podaj numer/ID pociągu:
            <input type="number" name="id"/>
        </label><br/>
        <label>
            Podaj miasto początkowe:
            <input type="text" name="start_city"/>
        </label><br/>
        <label>
            Podaj miasto końcowe:
            <input type="text" name="end_city"/>
        </label><br/>
        <label>
            Podaj datę (RRRR-MM-DD):
            <input type="date" name="departure_date"/>
        </label><br/>
        <label>
            Podaj godzinę odjazdu (GG:MM):
            <input type="time" name="departure_time" />
        </label><br/>
        <button type="submit">Submit</button>
    </form>
</div>
