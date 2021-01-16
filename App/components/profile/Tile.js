import React, { Component } from 'react'
import { Text, View,StyleSheet ,TouchableOpacity,Image} from 'react-native'
import { Actions } from 'react-native-router-flux';

const goToView=(action)=>{
    switch (action) {
        case 'orders':
            
            Actions.orders();
            break;
        case 'userPendingPayments':
            
          Actions.userPendingPayments();
              break;
        case 'wishlist':
            
                Actions.wishlist();
                    break;
        default:
            break;

            
    }
}
const PresentationalComponent = (props) => {
   return (
      <View>
        <TouchableOpacity onPress={()=>goToView(props.action)}>
        <Image source = {{uri:props.image}}style = {{ width: 150, height: 150 }}/>
         
            <Text style = {styles.button}>
            {props.text}
            </Text>
         </TouchableOpacity>
      </View>
   )
}
export default PresentationalComponent


const styles = StyleSheet.create({
    container: {
      flex: 1,
      justifyContent: "center",
      paddingHorizontal: 10
    },
    button: {
      alignItems: "center",
      backgroundColor: "#8a2560",
      padding: 10,
      fontSize:18
     
    },
    countContainer: {
      alignItems: "center",
      padding: 10
    }
  });
  