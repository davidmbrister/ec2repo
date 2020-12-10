import React from 'react'
import ReactDOM from 'react-dom'

const Profile = () => {
  return (
    <div style={{marginTop: '25%'}}>
      Hello, this is private profile, which can get private data. 
    </div>
  )
}

ReactDOM.render(<Profile />, document.getElementById('profile'))
