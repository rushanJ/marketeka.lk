import React, { Component } from 'react'
import { ImageBackground,  View, Text, TouchableOpacity,  StyleSheet,Image,AsyncStorage } from 'react-native'
import { Actions } from 'react-native-router-flux';
import axios from 'axios';
import Icon from 'react-native-vector-icons/FontAwesome';
import TextInput from 'react-native-textinput-with-icons'
import Button from '../components/commen/Button'
import { connect } from "react-redux";

import Card from '../components/Card';


const image = { uri: "https://seohacker.wpengine.com/wp-content/uploads/2019/12/E-Commerce-SEO_Best-Practices-for-a-Successful-Online-Shop-1024x768.jpg" };
class Login extends Component {
   
   state = {
      email: 'rushanthasindu10@gmail.com',
      password: 'rushan'
   }
   handleEmail = (text) => {
      this.setState({ email: text })
   }
   handlePassword = (text) => {
      this.setState({ password: text })
   }
   componentDidMount = () => {
      AsyncStorage.getItem('userId').then((value) =>  Actions.home())
     
   }
   login = (email, pass,props) => {
      
    axios.post('http://192.168.8.101:3000/user/auth', {
            email: email,
            password: pass
      })
      .then(function (response) {
       
        console.log(response.data.dataset[0].id);
        if(response.data.success){
           console.log(response.data.dataset[0]);
         AsyncStorage.setItem('userId', ''+response.data.dataset[0].id);
         AsyncStorage.setItem('userName', response.data.dataset[0].name);
            props.isLogedIn(response.data.dataset[0])
               Actions.home()
        }
        else 
        alert(" Please Try Again")
      })
      .catch(function (error) {
        console.log(error);
      });
      
   }
   render() {
      return (
         <ImageBackground  source={image} style={styles.image}>
         <View style = {styles.container}>
         <Card>
         <Text style={styles.header}>Login</Text>
        <View>
         <Text style={styles.text}>Email</Text>
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "Email"
               placeholderTextColor = "#000"
               autoCapitalize = "none"
               onChangeText = {this.handleEmail}/>
            
            <Text style={styles.text}>Name</Text>
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "Password"
               placeholderTextColor = "#000"
               autoCapitalize = "none"
               onChangeText = {this.handlePassword}/>
            
            <TouchableOpacity
               style = {styles.submitButton}
               onPress = {
                  () => this.login(this.state.email, this.state.password,this.props)
               }>
               <Text style = {styles.submitButtonText}> Submit </Text>
            </TouchableOpacity>

            <TouchableOpacity
               style = {styles.registerButton}
               onPress = {
                  () => Actions.register()
               }>
               <Text style = {styles.registerButtonText}>  New User?  </Text>
            </TouchableOpacity>
            
           </View>
           </Card>
           </View>
         </ImageBackground>
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
      isLogedIn:(data)=>{dispatch({type:'USER_LOGED_IN',value:data})},
      
   }
} 

export default connect(mapStateToProps,mapDispatchToProps)(Login)

const styles = StyleSheet.create({
   container: {
      height: '100%',
      backgroundColor: 'rgba(0,0,0,0.3)',
      alignItems: 'center',
      justifyContent: 'center',
   },
   image: {
      height: '100%',
      width: '100%',
      resizeMode: "cover",
      justifyContent: "center",

        },
   header: {
      
      fontSize: 40,
      color: '#000',
      marginBottom: 20,
      marginLeft: 80,
    },
    text: {
      fontSize: 20,
      alignItems: 'center',
      marginBottom: 10,
      color: '#000'
  },
   input: {
      margin: 15,
      height: 40,
      width: '60%',
      borderRadius: 30,
      color: 'white'
   },
   submitButton: {
      backgroundColor: '#e91e63',
      padding: 10,
      width: '30%',
      marginTop: 10,
      marginLeft: 90,
      marginBottom: 20,
      borderRadius: 30,
      height: 40,
      color: 'white'
   },
   submitButtonText:{
      color: 'white',
      fontSize: 20,
   },
   registerButton: {
      backgroundColor: '#9c27b0',
      padding: 10,
      marginLeft: 80,
      width: '40%',
      borderRadius: 30,
      height: 40,
      color: 'white'
   },
   registerButtonText: {
      color: 'white',
      fontSize: 20,
   }
})