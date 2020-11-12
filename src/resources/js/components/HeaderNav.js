import React from 'react'
import {Link} from 'react-router-dom';
import { Button } from '@material-ui/core';
import Box from '@material-ui/core/Box';
import { makeStyles } from '@material-ui/core/styles';

const useButtonStyles = makeStyles({
  root: {
    background: 'linear-gradient(45deg, #6574cd 30%, #AB529F 90%)',
    border: 0,
    borderRadius: 3,
    boxShadow: '0 3px 5px 2px rgba(255, 105, 135, .3)',
    color: 'white',
    height: 40,
    padding: '0 25px',
  },
});

function HeaderNav() {
  const navStyle = {
    color: 'white'
  };
  const buttonStyles = useButtonStyles();

  return (
     
      <nav> 
        <h3 class="logo"> Logo </h3>
          <ul className="nav-links">
            <Link style={navStyle} to="/calendar">
             <li>Calendar</li>
            </Link>
            <Link style={navStyle} to="/news">
             <li>News</li>
            </Link>
            <Link style={navStyle} to="/about">
             <li>About</li>
            </Link>
            <Box m={2}>
              <Button className={buttonStyles.root} variant="outlined" color="primary">Sign Up</Button>
            </Box>

          </ul>
       
      </nav>

  );
}

export default HeaderNav;
