import React, { Component } from 'react';

export default class NewComponent extends Component {
    state = {
        name: 'Kacper',
        age: 24,
        mobile: '123456789',
        skills: ['PHP', 'Laravel', 'React', 'Vue']
    }

    handleClick = (e) => {
        console.log("Button is clicked");
    }

    handleMouseOver = (e) => {
        console.log(e.target, e.pageX, e.pageY);
    }

    handleCopy = (e) => {
        console.log("Text is copied");
    }

    handleChangeState = () => {
        this.setState({
            name: 'Kacper Kozak',
            age: 25,
            mobile: '987654321',
            skills: ['PHP', 'Laravel', 'React', 'Vue', 'Angular']
        });
    }

    render() {
        return (
            <div>
                <h1>My name is {this.state.name}</h1>
                <h2>My age is {this.state.age}</h2>
                <h3>My mobile is {this.state.mobile}</h3>
                <h4>My skills are {this.state.skills.join(',')}</h4>

                <form>
                    Name : <input type="text" name="name" /> <br/>
                    Age : <input type="text" name="age" /> <br/>
                    Mobile : <input type="text" name="mobile" /> <br/>
                    <button type="submit">Submit</button>
                </form>
            </div>
        );
    }
}
