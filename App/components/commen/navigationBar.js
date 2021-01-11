import React,{ Component } from 'react'
import { TouchableOpacity, Text,View  ,StyleSheet} from 'react-native';
import { Actions } from 'react-native-router-flux';


const Home = () => {
   const goToRegister = () => {
      Actions.register()
   }

  
   
   return (
       
             <View style = {styles.container}>
         <TouchableOpacity style = {styles.redbox} onPress={Actions.home} ></TouchableOpacity>
         <TouchableOpacity style = {styles.blackbox} onPress={Actions.search} ></TouchableOpacity>
         <TouchableOpacity style = {styles.bluebox} onPress={Actions.wishlist} ></TouchableOpacity>
         <TouchableOpacity style = {styles.redbox} onPress={Actions.profile} ></TouchableOpacity>
      </View>
       
   )
   
}
export default Home


const styles = StyleSheet.create ({
   container: {
      flexDirection: 'row',
      justifyContent: 'space-between',
      alignItems: 'flex-end',
      backgroundColor: 'white',
      position: 'absolute',
    bottom: 0,
    left: 0,
    right: 0,
    paddingTop:5
   },
   redbox: {
      width: 100,
      height: 50,
      backgroundColor: 'red'
   },
   bluebox: {
      width: 100,
      height: 50,
      backgroundColor: 'blue'
   },
   blackbox: {
      width: 100,
      height: 50,
      backgroundColor: 'black'
   },
})