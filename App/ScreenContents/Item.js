import React, { Component } from 'react'
import { View, Text, TouchableOpacity,  StyleSheet,Image } from 'react-native'
import { Actions } from 'react-native-router-flux';
import axios from 'axios';
import Icon from 'react-native-vector-icons/FontAwesome';
import TextInput from 'react-native-textinput-with-icons'
import Button from '../components/commen/Button'
import { connect } from "react-redux";

class Inputs extends Component {
   state={
      item:{}
   }
   componentDidMount() {
     
      this.getItem();
    }
     getItem = () => {
        
         axios
             .get("http://192.168.8.113:3000/item/"+this.props.item)
             .then(data => {
               console.log(data.data.length);
               //this.setState(item,data.data)
               this.setState({ item: data.data[0] })
               console.log(this.state.item);
          })
             .catch(err => {
                 console.log(err);
                 return null;
             });
  
      };

   
   render() {
      return (
         <View style = {styles.container}>
            {/* <Text  style={styles.titleText}>{this.props.item}</Text> */}
            <Image source = {{uri:'http://192.168.8.113/marketEka/images/Products/'+this.state.item.id+'.jpg'}}style = {{ width: 370, height: 370 }}/>
            <Text  style={styles.titleText}>{this.state.item.name}</Text>
            <Text  style={styles.titleText}>LKR {this.state.item.sellingPrice}</Text>
            <Text  style={styles.titleText}> {this.state.item.qty} left</Text>
            <Text  style={styles.titleText}> Seller : {this.state.item.shop}</Text>
            <Text  style={styles.titleText}> description : {this.state.item.description}</Text>
            <Button text = {"Button Text"} />
            
         </View>
      )
   }
} 

function mapStateToProps(state){
   return {
      item:state.item
   }
} 
function mapDispatchToProps(dispatch){
   return {
      increseCounter:()=>{dispatch({type:'INCRESE'})},
      
   }
} 

export default connect(mapStateToProps,mapDispatchToProps)(Inputs)

const styles = StyleSheet.create({
   titleText: {
      color:'black',
      fontSize: 40,
      fontWeight: "bold"
    }
})