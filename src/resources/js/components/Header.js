    // resources/assets/js/components/Header.js

    import React from 'react'
    import { Link } from 'react-router-dom'

    const Header = () => (
      <nav className='navbar navbar-expand-md navbar-light navbar-laravel'>
        <div className='container global-header-style'>
          <Link className='navbar-brand' to='/'>CKEC</Link>
        </div>
      </nav>
    )

    export default Header