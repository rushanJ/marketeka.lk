import React from 'react'
import { TouchableOpacity, Text,View ,ScrollView } from 'react-native';
import { Actions } from 'react-native-router-flux';
import ScreenContent from "../ScreenContents/SellerDashboard";
const Home = () => {
   const goToRegister = () => {
      Actions.register()
   }
   return (
       <View  style={{backgroundColor:'#fff'}}>
           <ScrollView>
             <ScreenContent/>
             </ScrollView>
       </View>
   )
}
export default Home