import React, { Component } from 'react'
import { View, Text, TouchableOpacity,  StyleSheet,Image } from 'react-native'
import { Actions } from 'react-native-router-flux';
import axios from 'axios';
import Icon from 'react-native-vector-icons/FontAwesome';
import TextInput from 'react-native-textinput-with-icons'
import Button from '../components/commen/Button'
import Tile from '../components/seller/Tile'
import { connect } from "react-redux";
import { FlatGrid } from 'react-native-super-grid';

import { Chart, Line, Area, HorizontalAxis, VerticalAxis } from 'react-native-responsive-linechart'


class Inputs extends Component {
   
state={
   tiles:[
      { name: 'Items', code: '#1abc9c' ,image:'http://critssl.com/marketEka/image/items-icon.jpg',action:'items'},
      { name: 'Orders', code: '#3498db' ,image:'http://critssl.com/marketEka/image/order-icon.png',action:'home'},
      { name: 'Invoice', code: '#2ecc71' ,image:'http://critssl.com/marketEka/image/deliver-man-icon.png',action:'profile'},
      { name: 'History', code: '#9b59b6' ,image:'http://critssl.com/marketEka/image/history-icon.png',action:'orders' },
      { name: 'Supplier', code: '#3498db' ,image:'https://icon-library.com/images/my-orders-icon/my-orders-icon-22.jpg',action:'profile'},
      { name: 'QR', code: '#9b59b6' ,image:'https://icon-library.com/images/my-orders-icon/my-orders-icon-22.jpg',action:'orders' }
    ]
}


   sellerAccount = () => {
      Actions.sellerDashboard();
   }
   render() {
      return (
         <View style = {styles.container}>
            <Text onPress ={()=>this.props.increseCounter()} style={styles.titleText}>{this.props.store.name} </Text>

            <Chart
  style={{ height: 200, width: 400 }}
  data={[
    { x: -2, y: 15 },
    { x: -1, y: 10 },
    { x: 0, y: 12 },
    { x: 1, y: 7 },
  

  ]}
  padding={{ left: 20, bottom: 20, right: 20, top: 20 }}
  xDomain={{ min: -2, max: 10 }}
  yDomain={{ min: 0, max: 20 }}
>
  <VerticalAxis tickCount={5} theme={{ labels: { formatter: (v) => v.toFixed(2) } }} />
  <HorizontalAxis tickCount={5} />
  <Area theme={{ gradient: { from: { color: '#ffa502' }, to: { color: '#ffa502', opacity: 0.4 } }}} />
  <Line theme={{ stroke: { color: '#ffa502', width: 5 }, scatter: { default: { width: 4, height: 4, rx: 2 }} }} />
</Chart>
            <FlatGrid
               itemDimension={130}
               data={this.state.tiles}
               style={styles.gridView}
               // staticDimension={300}
               // fixed
               spacing={20}
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
      store:state.store
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
      color: '#000',
      fontWeight: '600',
    },
    itemCode: {
      fontWeight: '600',
      fontSize: 12,
      color: '#000',
    },
})