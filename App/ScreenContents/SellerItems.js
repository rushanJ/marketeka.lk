import React, { Component } from 'react'
import { View, Text, ScrollView,  StyleSheet,TouchableOpacity } from 'react-native'
import { Actions } from 'react-native-router-flux';
import axios from 'axios';
import Icon from 'react-native-vector-icons/FontAwesome';
import TextInput from 'react-native-textinput-with-icons'
import Button from '../components/commen/Button'
import Tile from '../components/home/Tile'
import { connect } from "react-redux";
import { FlatGrid } from 'react-native-super-grid';
class Inputs extends Component {
   
state={
   items:[
  
   ]
}
   goToRegister = () => {
   Actions.register()
   }
   componentDidMount() {
     
    this.getItem();
  }
   getItem = () => {
      var letters = '0123456789ABCDEF';
       axios
           .post('http://192.168.8.113:3000/user/wishlist', {
            user: this.props.user.id
               })
           .then(data => {
             //console.log(data.data.dataset[0]);
             for (var i = 0; i < data.data.dataset.length; i++) {
                 this.state.items.push({ name: data.data.dataset[i].name,description: data.data.dataset[i].description,qty: data.data.dataset[i].qty,price: data.data.dataset[i].sellingPrice, code: '#dce3e3' ,image:'http://192.168.8.113/marketEka/images/Products/'+data.data.dataset[i].id+'.jpg',id:data.data.dataset[i].id});
             }
             console.log(this.state.items);
        })
           .catch(err => {
               console.log(err);
               return null;
           });

    };

    newItem = () => {
      
             Actions.sellerNewItems();
        
   }

   render() {
      return (
         <View style = {styles.container}>
            
            {/* <Text style={styles.titleText}>Wishlist</Text> */}
            {/* <Button text = {"Seller Area"} /> */}
            <TouchableOpacity onPress ={()=>this.newItem()}>
            <Text style = {styles.button}>
          New Item
            </Text>
         </TouchableOpacity>  
            <ScrollView>
            <FlatGrid
               itemDimension={130}
               data={this.state.items}
               style={styles.gridView}
               // staticDimension={300}
               // fixed
               spacing={10}
               renderItem={({ item }) => (
               <View style={[styles.itemContainer, { backgroundColor: item.code }]}>
                  <Tile text = {item.name} image={item.image} id={item.id} price={item.price} qty={item.qty} description={item.description}/>
                  
               </View>
               )}
            />
         </ScrollView>
         </View>
      )
   }
} 

function mapStateToProps(state){
   return {
      user:state.user
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