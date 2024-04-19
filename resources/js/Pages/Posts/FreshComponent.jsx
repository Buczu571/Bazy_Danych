import React, { Component } from 'react';

export default class NewComponent extends Component {
    state = {
        id: '',
        start_city: '',
        end_city: '',
        date: '',
        time: '',
        submitted: false,
        error: null
    }

    handleChange = (e) => {
        this.setState({
            [e.target.name]: e.target.value
        });
    }

    handleSubmit = async (e) => {
        e.preventDefault();
        const { id, start_city, end_city, date, time } = this.state;

        try {
            // Wysyłanie danych do bazy danych (przykład dla fetch API)
            const response = await fetch('url/do/zapisu/danych', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    id,
                    start_city,
                    end_city,
                    date,
                    time
                })
            });

            if (!response.ok) {
                throw new Error('Wystąpił problem podczas wysyłania danych do bazy.');
            }

            // Zmiana stanu, aby pokazać komunikat o pomyślnym zapisie
            this.setState({
                submitted: true,
                id: '',
                start_city: '',
                end_city: '',
                date: '',
                time: '',
                error: null
            });
        } catch (error) {
            // Obsługa błędów
            this.setState({ error: error.message });
        }
    }

    render() {
        return (
            <div>
                <form onSubmit={this.handleSubmit}>
                    <label>
                        Podaj numer/ID pociągu:
                        <input type="number" name="id" value={this.state.id} onChange={this.handleChange} />
                    </label><br/>
                    <label>
                        Podaj miasto początkowe:
                        <input type="text" name="start_city" value={this.state.start_city} onChange={this.handleChange} />
                    </label><br/>
                    <label>
                        Podaj miasto końcowe:
                        <input type="text" name="end_city" value={this.state.end_city} onChange={this.handleChange} />
                    </label><br/>
                    <label>
                        Podaj datę:
                        <input type="date" name="date" value={this.state.date} onChange={this.handleChange} />
                    </label><br/>
                    <label>
                        Podaj godzinę:
                        <input type="time" name="time" value={this.state.time} onChange={this.handleChange} />
                    </label><br/>
                    <button type="submit">Submit</button>
                </form>

                {this.state.submitted && <p>Dane zostały pomyślnie zapisane.</p>}
                {this.state.error && <p>Błąd: {this.state.error}</p>}
            </div>
        );
    }
}
