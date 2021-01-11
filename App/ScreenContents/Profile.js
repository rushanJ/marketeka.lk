import React, { Component } from 'react'
import { View, Text, TouchableOpacity,  StyleSheet,Image } from 'react-native'
import { Actions } from 'react-native-router-flux';
import axios from 'axios';
import Icon from 'react-native-vector-icons/FontAwesome';
import TextInput from 'react-native-textinput-with-icons'
import Button from '../components/commen/Button'
import Tile from '../components/profile/Tile'
import { connect } from "react-redux";
import { FlatGrid } from 'react-native-super-grid';
class Inputs extends Component {
   
state={
   tiles:[
      { name: 'Orders', code: '#1abc9c' ,image:'https://icon-library.com/images/my-orders-icon/my-orders-icon-22.jpg',action:'orders'},
      { name: 'Pending Payments', code: '#2ecc71' ,image:'https://icon-library.com/images/my-orders-icon/my-orders-icon-22.jpg',action:'home'},
      { name: 'Wishlist', code: '#3498db' ,image:'https://icon-library.com/images/my-orders-icon/my-orders-icon-22.jpg',action:'profile'},
      { name: 'Shipped', code: '#9b59b6' ,image:'https://icon-library.com/images/my-orders-icon/my-orders-icon-22.jpg',action:'orders' }
    ]
}
   sellerAccount = (props) => {
      axios
           .post('http://192.168.8.113:3000/user/store', {
            user: this.props.user.id
               })
           .then(data => {
             console.log(data.data.success);
             props.hasStore(data.data.dataset[0])
             Actions.sellerDashboard();
        })
           .catch(err => {
               console.log(err);
               return null;
           });
     // 
   }
   render() {
      return (
         <View style = {styles.container}>
            <Text  style={styles.titleText}>{this.props.user.name}</Text>
            <TouchableOpacity onPress ={()=>this.sellerAccount(this.props)}>
            <Text style = {styles.button}>
          Seller Account
            </Text>
         </TouchableOpacity>  
         
            <FlatGrid
               itemDimension={130}
               data={this.state.tiles}
               style={styles.gridView}
               // staticDimension={300}
               // fixed
               spacing={10}
               renderItem={({ item }) => (
               <View style={[styles.itemContainer, { backgroundColor: item.code }]}>
                  <Tile text = {item.name} image={item.image} action={item.action}/>
                  
               </View>
               )}
            />
         
         </View>
      )
   }
} 

function mapStateToProps(state){
   return {
      count:state.count,
      user:state.user
   }
} 
function mapDispatchToProps(dispatch){
   return {
      hasStore:(data)=>{dispatch({type:'USER_STORE',value:data})},
      
   }
} 


export default connect(mapStateToProps,mapDispatchToProps)(Inputs)

const styles = StyleSheet.create({
   titleText: {
      color:'black',
      fontSize: 70,
      fontWeight: "bold"
    }, 
    gridView: {
      marginTop: 10,
      flex: 1,
    },
    itemContainer: {
      justifyContent: 'flex-end',
      borderRadius: 5,
      padding: 10,
   
    },
    itemName: {
      fontSize: 16,
      color: '#fff',
      fontWeight: '600',
    },
    itemCode: {
      fontWeight: '600',
      fontSize: 12,
      color: '#fff',
    },
})