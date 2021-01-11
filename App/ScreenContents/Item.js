import React, { Component } from 'react'
import { View, Text, TouchableOpacity,  StyleSheet,Image ,ScrollView} from 'react-native'
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
             .get("http://192.168.8.101:3000/item/"+this.props.item)
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
            <ScrollView>
            {/* <Text  style={styles.titleText}>{this.props.item}</Text> */}
            <Image source = {{uri:'http://192.168.8.101/marketEka/images/Products/'+this.state.item.id+'.jpg'}} style = {styles.img} />
            <Text  style={styles.titleText}>{this.state.item.name}</Text>
            <Text  style={styles.priceText}><Image source = {{uri:'http://critssl.com/marketEka/image/money-icon.png'}}
                  style = {styles.icon}
                  /> LKR {this.state.item.sellingPrice} ({this.state.item.qty} left)</Text>
            
            <Text  style={styles.titleText}><Image source = {{uri:'http://critssl.com/marketEka/image/seller-icon.png'}}
                  style = {styles.icon}
                  /> Seller : {this.state.item.store}</Text>

            <TouchableOpacity>
               <Text style = {styles.buyBtn}>
               <Image source = {{uri:'http://critssl.com/marketEka/image/buy-btn.png'}}
                  style = {styles.buyBtnImg}
                  /> 
               </Text>
            </TouchableOpacity>
            <Text  style={styles.titleText}> <Image source = {{uri:'http://critssl.com/marketEka/image/description-icon.png'}}
                  style = {styles.icon}
                  />  Description : 
                  {this.state.item.description}</Text>
            
            </ScrollView>
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
      color:'gray',
      fontSize: 20,
      fontWeight: "bold",
      padding:10
    },
    priceText: {
      color:'red',
      fontSize: 20,
      fontWeight: "bold",
      paddingLeft:10
    },
    
    icon:{
      width: 20,
      margin:10,
       height: 20 
    },

    
    img:{
      width: 370,
      margin:10,
       height: 370 
    },
    buyBtn: {
       borderWidth: 1,
       padding: 25,
       borderColor: 'black',
     
    }
    ,
    buyBtnImg: {
      width: 200,
      margin:10,
       height: 20 
    }
})