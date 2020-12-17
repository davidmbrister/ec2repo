import styled from 'styled-components';
import { Button } from '@material-ui/core';
import Box from '@material-ui/core/Box';
import {Link as LinkR} from 'react-router-dom';
import {Link as LinkS} from 'react-scroll';
/* $ckec-orange: #F3901C;
$ckec-green: #43A049;
$ckec-blue: #55ABD1;
$ckec-purple: #AB529F; */

export const Nav = styled.nav`
  background: #55ABD1;
  height: 80px;
  ${'' /* margin-top: -80px;  */}
  display:flex;
  justify-content: center;
  align-items: center;
  font-size: 1rem;
  position: sticky;
  top: 0;
  z-index:10;

  @media screen and (max-width: 960px) {
    transition: 0.8 all ease;
  }
`

export const NavbarContainer = styled.div`
display: flex;
justify-content: space-between;
align-items: center;
height: 80px;
z-index: 1;
width: 100%;
padding: 0 24px;
max-width:1100;
`

export const NavLogo = styled(LinkR)`
color: #fff;
justify-self: flex-start;
cursor: pointer;
font-wight: bold;
font-size: 1.5rem;
align-items: center;
margin-left: 24px;
font-weight: bold;
text-decoration: none;

&:hover {
  color: #fff;
  text-decoration: none;
  border-bottom: 3px solid #01bf71;
  }
`

export const MobileIcon=styled.div`
display:none;

@media screen and (max-width: 768px) {
  display: block;
  position: absolute;
  top:0;
  right:0;
  transform: translate(-100%, 60%);
  font-size: 1.8rem;
  cursor: pointer;
  color: #fff;
}
`

export const NavMenu = styled.ul`
display:flex;
align-items: center;
list-style: none;
text-align: center;
margin-right: -22px;
margin-top: 0;
margin-bottom: 0;

@media screen and (max-width: 768px) {
  display: none;
}
`

export const NavItem = styled.li`
height: 80px;
`

export const NavLink = styled(LinkR)`
  color: #000;
  font-size: larger;
  font-weight: bold;
  display: flex;
  align-items: center;
  text-decoration: none;
  padding: 0 1rem;
  ${'' /* height: 100%; */}
  cursor: pointer;

  &:hover {
    color: #000;
    text-decoration: none;
    border-bottom: 3px solid #000;
    &:before {
      color: blue;
    }
  }
  &:active {
    color: #000;
    text-decoration: none;
    border-bottom: 3px solid #000;
  }
`

export const NavBtn = styled.nav`
  display: flex;
  align-items: center;

  @media screen and (max-width: 768px) {
    display: none;
  }
`

export const NavBtnLink = styled.a`
  border-radius: 50px;
${'' /*   background: #01bf71; */}
  background: #F3901C;;
  white-space: nowrap;
  padding: 10px 22px;
  color: #010606;
  font-size: 16px;
  outline: none;
  border: none;
  cursor: pointer;
  transition: all 0.2 ease-in-out;
  text-decoration: none;

  &:hover {
    transition: all 0.2s ease-in-out;
    background: #fff;
    color: #010606;
  }
`

export const BtnWrapper = styled(Box)`
  margin: 2em;
`

export const BtnLoginSignup = styled(Button)`
    background: linear-gradient(45deg, #6574cd 30%, #AB529F 90%);
    border: none;
    border-radius: 3px;
    box-shadow: 0 3px 5px 2px rgba(255, 105, 135, .3);
    color: white;
    height: 40px;
    padding: 0 25px;
`

