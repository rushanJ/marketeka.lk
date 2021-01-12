import React, { Component } from 'react'
import { Text, View,StyleSheet ,TouchableOpacity,Image} from 'react-native'
import { Actions } from 'react-native-router-flux';
import { connect } from "react-redux";
const goToView=(props,id)=>{
   
                props.setItem(id);
            Actions.item();
            
}
function mapStateToProps(state){
    return {
        count:state.count,
       item:state.item
    }
 } 
 function mapDispatchToProps(dispatch){
    return {
       setItem:(data)=>{dispatch({type:'ITEM',value:data})},
       
    }
 } 
const PresentationalComponent = (props) => {
   return (
      <View>
        <TouchableOpacity onPress={()=>goToView(props,props.id)}>
            <Image source = {{uri:props.image}}style = {{ width: 150, height: 150 }}/>
            <Text style = {styles.button}>{props.text}</Text>
            <Text style = {styles.button}> LKR {props.price}</Text>
            <Text style = {styles.button}>{props.qty} left</Text>
           
         </TouchableOpacity>
      </View>
   )
}
export default  connect(mapStateToProps,mapDispatchToProps)(PresentationalComponent) 


const styles = StyleSheet.create({
    container: {
      flex: 1,
      justifyContent: "center",
      paddingHorizontal: 10
    },
    button: {
      alignItems: "center",
      backgroundColor: "#DDDDDD",
      padding: 10
    },
    countContainer: {
      alignItems: "center",
      padding: 10
    }
  });
  