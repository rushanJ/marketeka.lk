import React from 'react'
import { Router, Scene } from 'react-native-router-flux'
import Login from './Screens/Login.js'
import Register from './Screens/Register.js'
import Home from './Screens/Home.js'
import Profile from './Screens/Profile.js'
import UserOrders from './Screens/UserOrders.js'
import Item from './Screens/Item.js'
import Search from './Screens/Search.js'
import SearchResult from './Screens/SearchResult.js'
import Wishlist from './Screens/WishList.js' 
import SellerDashboard from './Screens/SellerDashboard.js'
 import SellerItems from './Screens/SellerItems.js'
 import SellerNewItems from './Screens/SellerNewItems.js'
// import SearchResult from './Screens/SearchResult.js'
// import SearchResult from './Screens/SearchResult.js'
// import SearchResult from './Screens/SearchResult.js'
// import SearchResult from './Screens/SearchResult.js'


const Routes = () => (
   <Router>
      <Scene key = "root">
         <Scene key = "login" component = {Login}  initial = {true}   backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/> 
         <Scene key = "register" component = {Register} title = "Register" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#ffffff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/> 
         <Scene key = "home" component = {Home}   title = "Home" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>
         <Scene key = "profile" component = {Profile}     title = "Profile" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/> 
         <Scene key = "orders" component = {UserOrders}  title = "Orders" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>  
          <Scene key = "item" component = {Item}   title = "Item" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>                                                                      
         <Scene key = "search" component = {Search}   title = "Search" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/> 
         <Scene key = "searchResult" component = {SearchResult}   title = "SearchResult" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>
         <Scene key = "wishlist" component = {Wishlist}   title = "Wishlist" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>
         <Scene key = "sellerDashboard" component = {SellerDashboard}   title = "SellerDashboard" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>
         <Scene key = "sellerItems" component = {SellerItems}  title = "SellerItems" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>
          <Scene key = "sellerNewItems" component = {SellerNewItems} title = "SellerNewItems" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>
        {/* <Scene key = "sellerDashboard" component = {SellerDashboard}   title = "SellerDashboard" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>
         <Scene key = "sellerDashboard" component = {SellerDashboard}   title = "SellerDashboard" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>
         <Scene key = "sellerDashboard" component = {SellerDashboard}   title = "SellerDashboard" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>
         <Scene key = "sellerDashboard" component = {SellerDashboard}   title = "SellerDashboard" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>
         <Scene key = "sellerDashboard" component = {SellerDashboard}   title = "SellerDashboard" backButtonTextStyle = {{color:'#fff'}}
                                                                                barButtonIconStyle={{ tintColor: '#fff' }}
                                                                                titleStyle = {{color : '#fff'}}
                                                                                navigationBarStyle = {{backgroundColor : '#fff'}}
                                                                                backButtonTintColor = '#fff'/>
                                                                                 */}



      </Scene>
   </Router>
)
export default Routes