  // resources/assets/js/components/App.js

    import React, { Component } from 'react'
    import ReactDOM from 'react-dom'
    import { BrowserRouter, Route, Switch } from 'react-router-dom'
    import Header from './Header'
    import CourseList from './CourseList'
    import Course from './Course'
    import {Provider, defaultTheme, Button, Meter} from '@adobe/react-spectrum';

    class App extends Component {
      render () {
        return (
          <Provider theme={defaultTheme}>
              <BrowserRouter>
                <div className="root-app-div">
                  <Header />
                  {/* Course list does not currently take any props, it's the same data for any user at any time */}
                </div>
                <Meter label="Seats taken" variant="positive" value={75} />
                
                <Button variant="cta" margin="size-160">Get started</Button>
                <CourseList />
              </BrowserRouter>
          </Provider>
        )
      }
    }

    ReactDOM.render(<App />, document.getElementById('app'))
