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
      email: 'fdsdf',
      password: 'sdfsdf',
      name: 'sdfsd'
   }
   handleEmail = (text) => {
      this.setState({ email: text })
   }

   handleName = (text) => {
      this.setState({ email: text })
   }
   handlePassword = (text) => {
      this.setState({ name: text })
   }
   register = (email, pass,name) => {
    
      axios.post('http://192.168.8.101:3000/user', {
         email: email,
         name: name,
         password: pass
       })
       .then(function (response) {
         console.log(response.data.success);
         if(response.data.success){
            alert("Account Created Successfully! Please Login");
             Actions.login()
         }
         else alert("Account Not Created ! Please Try Again")
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
         <Text style={styles.header}>Register</Text>
        <View>
         <Text style={styles.text}>Email</Text>
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "Email"
               placeholderTextColor = "#003f5c"
               autoCapitalize = "none"
               onChangeText = {this.handleEmail}/>

            <Text style={styles.text}>Name</Text>
             <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "Name"
               placeholderTextColor = "#003f5c"
               autoCapitalize = "none"
               onChangeText = {this.handleName}/>
            
            <Text style={styles.text}>Password</Text>
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "Password"
               placeholderTextColor = "#003f5c"
               autoCapitalize = "none"
               onChangeText = {this.handlePassword}/>
            
            <TouchableOpacity
               style = {styles.submitButton}
               onPress = {
                  () => this.register(this.state.email, this.state.password, this.state.name)
               }>
               <Text style = {styles.submitButtonText}>Register</Text>
            </TouchableOpacity>

            
</View>
           
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
      isLogedIn:(id)=>{dispatch({type:'USER_LOGED_IN',value:{id:id,name:'rushan'}})},
      
   }
} 

export default connect(mapStateToProps,mapDispatchToProps)(Login)

const styles = StyleSheet.create({
   container: {
      backgroundColor: '#f6cbd9',
      alignItems: 'center',
      justifyContent: 'center',
   },
   header: {
      fontSize: 40,
      color: '#75003a',
    },
    text: {
      fontSize: 20,
      alignItems: 'center',
      marginBottom: 10,
      color: '#7b003e'
  },
   input: {
      margin: 15,
      height: 40,
      borderColor: '#000',
      borderWidth: 1,
      color: 'white'
   },
   submitButton: {
      backgroundColor: '#e91e63',
      padding: 10,
      margin: 15,
      borderRadius: 30,
      height: 40,
      color: 'white'

   },
   submitButtonText:{
      color: 'white',
      fontSize: 20,
     paddingLeft: '35%'
   },
})