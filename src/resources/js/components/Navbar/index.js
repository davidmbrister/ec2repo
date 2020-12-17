import React from 'react'
import {FaBars} from 'react-icons/fa';
import {
  Nav,
  NavbarContainer,
  NavLogo, 
  MobileIcon,
  NavMenu,
  NavItem, 
  NavLink,
  NavBtn,
  NavBtnLink,
  BtnWrapper,
  BtnLoginSignup
  } from './NavbarElements';

const Navbar = ({ auth, toggle }) => {
  return (
   <>
    <Nav>
      <NavbarContainer>
        <NavLogo to="/">CKEC</NavLogo>
        <MobileIcon onClick={toggle}>
          <FaBars />
        </MobileIcon>
        <NavMenu>
          <NavItem>
            <NavLink to="camps">Calendar</NavLink>
          </NavItem>
          <NavItem>
            <NavLink to="calendar">Discover</NavLink>
          </NavItem>
         {/*  <NavItem>
            <NavLink to="services">Services</NavLink>
          </NavItem>  */}    
        </NavMenu>
       
        {
        (auth === 'false') 
        ? 
        <NavBtn>
          <NavBtnLink href="/login">Sign in</NavBtnLink>
        </NavBtn>
        :
        <NavBtn>
          <NavBtnLink to="/profile">Profile</NavBtnLink>
        </NavBtn>
        }
        
      </NavbarContainer>
    </Nav>
   </>
  )
}

export default Navbar

