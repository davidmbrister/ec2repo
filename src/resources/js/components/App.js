  // resources/assets/js/components/App.js
    import React, { Component } from 'react'
    import ReactDOM from 'react-dom'
    import { BrowserRouter, Route, Switch } from 'react-router-dom'
    import HeaderNav from './HeaderNav'
    import CourseList from './CourseList'
 
    class App extends Component {

      render () {
        return (
          
              <BrowserRouter>
                <div className="root-app-div">
                  <HeaderNav />
                  {/* Course list does not currently take any props, it's the same data for any user at any time */}
                </div>
                <CourseList />
                 
              </BrowserRouter>
         
        )
      }
    }

    ReactDOM.render(<App />, document.getElementById('app'))
