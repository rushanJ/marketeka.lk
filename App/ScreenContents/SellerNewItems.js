import React, { Component } from 'react'
import { View, Text, TouchableOpacity,  StyleSheet,Image } from 'react-native'
import { Actions } from 'react-native-router-flux';
import axios from 'axios';
import Icon from 'react-native-vector-icons/FontAwesome';
import TextInput from 'react-native-textinput-with-icons'
import Button from '../components/commen/Button'
import { connect } from "react-redux";

class Login extends Component {
   
   state = {
      user: this.props.store.id,
      serialNumber: '500',
      name: 'sfgdfg',
      qty: 10,
      supplierPrice:20,
      retailPrice:20,
      sellingPrice:40,
      description:'dfgdf gsdfgghhjkhiouyfj gdf54g 5sdfgsdg sdrty561dfg dfgsdfh fnfghefgh fghdfh dfhfgh',
      supplier:1

   }
   handleSerialNumber = (text) => {
      this.setState({ serialNumber: text })
   }
   handleName = (text) => {
      this.setState({ name: text })
   }
   handleQty = (text) => {
      this.setState({ qty: text })
   }
   handleSupplierPrice = (text) => {
      this.setState({ supplierPrice: text })
   }

   handleRetailPrice = (text) => {
      this.setState({ retailPrice: text })
   }
   handleSellingPrice= (text) => {
      this.setState({ sellingPrice: text })
   }
   handleDescription= (text) => {
      this.setState({ description: text })
   }
   handleSupplier= (text) => {
      this.setState({ supplier: text })
   }
   srote = (serialNumber, user,name, qty,supplierPrice, retailPrice,sellingPrice,description,supplier) => {
      
   console.log(serialNumber);
      axios.post('http://192.168.8.101:3000/item', {
         serialNumber: serialNumber,
         shop: user,
         name: name,
         qty: qty,
         supplierPrice: supplierPrice,
         retailPrice: retailPrice,
         sellingPrice: sellingPrice,
         description: description,
         supplier: supplier
       })
       .then(function (response) {
         console.log(response.data.success);
         if(response.data.success){
            alert("Item Created Successfully");
             Actions.sellerItems()
         }
         else alert("Item Not Created ! Please Try Again")
       })
       .catch(function (error) {
         console.log(error);
       });
      //Actions.home()
   }

   goToRegister = () => {
           Actions.register()
   }

   //  function goToRegister = () => {
   //    alert('email: ' );

   //    Actions.register()
   // }
   
   render() {
      return (
         <View style = {styles.container}>
            {/* <Text > { this.state.user }</Text> */}
            <View style={styles.inputView} >
            <Image source = {{uri:'https://img.icons8.com/ios/452/numbers-input-form.png'}}
                  style = {styles.imgHome}
                  />
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "Serial Number"
               placeholderTextColor = "white"
               autoCapitalize = "none"
               onChangeText = {this.handleSerialNumber}/>
               </View>
            <View style={styles.inputView} >
            <Image source = {{uri:'https://cdn.iconscout.com/icon/free/png-512/label-name-text-tag-filter-item-price-7-3240.png'}}
                  style = {styles.imgHome}
                  />
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "name"
               placeholderTextColor = "#000"
               autoCapitalize = "none"
               onChangeText = {this.handleName}/>
              </View>
            <View style={styles.inputView} >
            <Image source = {{uri:'https://image.flaticon.com/icons/png/128/2104/2104046.png'}}
                  style = {styles.imgHome}
                  />
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "Qty "
               placeholderTextColor = "#000"
               autoCapitalize = "none"
               onChangeText = {this.handleQty}/>
  </View>
            <View style={styles.inputView} >
            <Image source = {{uri:'https://image.flaticon.com/icons/png/512/8/8817.png'}}
                  style = {styles.imgHome}
                  />
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "Supplier Price "
               placeholderTextColor = "#000"
               autoCapitalize = "none"
               onChangeText = {this.handleSupplierPrice}/> 
  </View>
            <View style={styles.inputView} >
            <Image source = {{uri:'https://image.flaticon.com/icons/png/512/8/8817.png'}}
                  style = {styles.imgHome}
                  />
             <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "retailPrice"
               placeholderTextColor = "#fff"
               autoCapitalize = "none"
               onChangeText = {this.handleRetailPrice}/>
            
            </View>
            <View style={styles.inputView} >
            <Image source = {{uri:'https://image.flaticon.com/icons/png/512/8/8817.png'}}
                  style = {styles.imgHome}
                  />
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "Selling Price"
               placeholderTextColor = "#9a73ef"
               autoCapitalize = "none"
               onChangeText = {this.handleSellingPrice}/>
  </View>
            <View style={styles.inputView} >
            <Image source = {{uri:'https://cdn0.iconfinder.com/data/icons/free-daily-icon-set/512/TaskStroke-512.png'}}
                  style = {styles.imgHome}
                  />
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "description "
               placeholderTextColor = "#9a73ef"
               autoCapitalize = "none"
               onChangeText = {this.handleDescription}/>
  </View>
            <View style={styles.inputView} >
            <Image source = {{uri:'https://img.icons8.com/plasticine/2x/supplier.png'}}
                  style = {styles.imgHome}
                  />
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "Supplier "
               placeholderTextColor = "#9a73ef"
               autoCapitalize = "none"
               onChangeText = {this.handleSupplier}/>
              </View>
            <View style={styles.inputView} >

            <TouchableOpacity
               style = {styles.submitButton}
               >
               <Text style = {styles.submitButtonText}> Upload Image  </Text>
            </TouchableOpacity>
            <TouchableOpacity
               style = {styles.submitButton}
               onPress = {
                  () => this.srote(this.state.serialNumber, this.state.user, this.state.name, this.state.qty, this.state.supplierPrice, this.state.retailPrice, this.state.sellingPrice, this.state.description, this.state.supplier)
               }>
               <Text style = {styles.submitButtonText}> Add </Text>
            </TouchableOpacity>

            

            </View>
         </View>
      )
   }
} 

function mapStateToProps(state){
   return {
      count:state.count,
      store:state.store
   }
} 
function mapDispatchToProps(dispatch){
   return {
      isLogedIn:(id)=>{dispatch({type:'USER_LOGED_IN',value:{id:id,name:'rushan'}})},
      
   }
} 

export default connect(mapStateToProps,mapDispatchToProps)(Login)

const styles = StyleSheet.create({
   container: {
      paddingTop: 23,
      marginLeft:20,
      height:750
   },
   input: {
      margin: 15,
      height: 40,
      borderColor: '#000',
      borderWidth: 1,
      color: 'black',
   },
   submitButton: {
      backgroundColor: '#7a42f4',
      padding: 10,
      margin: 15,
      height: 40,
      color: 'white'
   },
   submitButtonText:{
      color: 'white'
   },imgHome:{
      width: 30, 
      marginRight:10,
      height: 30 ,
      resizeMode:"stretch"
   },
   inputView:{
      width:"80%",
      flexDirection: 'row',
      justifyContent: 'space-between',
      alignItems: 'flex-end',
      // backgroundColor:"#465881",
      // borderRadius:25,
      // height:50,
      // marginBottom:20,
      // justifyContent:"center",
      // padding:20
    }
})