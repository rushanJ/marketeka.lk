import React, { Component } from 'react'
import { View, Text, TouchableOpacity,  StyleSheet,Image ,ScrollView,AsyncStorage} from 'react-native'
import { Actions } from 'react-native-router-flux';
import axios from 'axios';
import Icon from 'react-native-vector-icons/FontAwesome';
import TextInput from 'react-native-textinput-with-icons'
import Button from '../components/commen/Button'
import { connect } from "react-redux";

class Inputs extends Component {
   state={
      item:{},
    userId: '',
    trollyId: '',

   }
   componentDidMount() {
      AsyncStorage.getItem('userId').then((value) => this.setState({ 'userId': value }))
      AsyncStorage.getItem('trollyId').then((value) => this.setState({ 'trollyId': value }))
      
      this.getItem();
    }
    buyProduct=()=>{
     
      Actions.checkout()
    }

   
    addToCart=()=>{
     
      axios.post('http://192.168.8.101:3000/order', {
         user: this.state.userId,
         item: this.props.item,   
         trollyId: this.state.trollyId,       
       })
       .then(function (response) {
         console.log(response.data.success);
         if(response.data.success){
            alert("Added To Cart");
            // Actions.login()
         }
         else alert("Something Went Wrong")
       })
       .catch(function (error) {
         console.log(error);
       });
    }
     getItem = () => {

      console.log(this.props.item);
       
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
            <View style = {styles.orderContainer}>
                  <TouchableOpacity onPress ={()=>this.buyProduct()}>
                     <Image source = {{uri:'http://critssl.com/marketEka/image/buy-btn.png'}}
                        style = {styles.buyBtnImg}
                        /> 
                  </TouchableOpacity>
                  <TouchableOpacity onPress ={()=>this.addToCart()}>
                     <Image source = {{uri:'http://critssl.com/marketEka/image/add-to-cart-btn.png'}}
                        style = {styles.buyBtnImg}
                        /> 
                  </TouchableOpacity>
            </View>
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
   
   container: {
     
    },
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
       paddingBottom: 0,
       paddingTop: 0,
       borderColor: 'black',
     
    }
    ,
    buyBtnImg: {
      width: 200,
      
       height: 40 
    }
    ,orderContainer: {
      flexDirection: 'row',
      // justifyContent: 'space-between',
      // alignItems: 'flex-end',
      // backgroundColor: 'black',
      // position: 'absolute',
    
   },
})