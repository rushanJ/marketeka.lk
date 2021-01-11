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
      key: 'et'
   }
   handleKey = (text) => {
      this.setState({ key: text })
   }
   
   search = (key,props) => {
      
     props.storeSearchKey(key);
        Actions.searchResult();     
   }
   render() {
      return (
         <View style = {styles.container}>
            <TextInput style = {styles.input}
               underlineColorAndroid = "transparent"
               placeholder = "Key"
               placeholderTextColor = "#9a73ef"
               autoCapitalize = "none"
               onChangeText = {this.handleKey}/>
            
           
            
            <TouchableOpacity
               style = {styles.submitButton}
               onPress = {
                  () => this.search(this.state.key,this.props)
               }>
               <Text style = {styles.submitButtonText}> Submit </Text>
            </TouchableOpacity>

            
           
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
      storeSearchKey:(data)=>{dispatch({type:'SEARCH_KEY',value:data})},
      
   }
} 

export default connect(mapStateToProps,mapDispatchToProps)(Login)

const styles = StyleSheet.create({
   container: {
      paddingTop: 0,
      paddingBottom: 100,
   },
   input: {
      margin: 15,
      height: 40,
      borderColor: '#FFF',
      borderWidth: 1,
      color: 'white'
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
   }
})