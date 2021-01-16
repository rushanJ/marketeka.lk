import React from "react";
import { createStackNavigator } from "@react-navigation/stack";
import { createBottomTabNavigator } from "@react-navigation/bottom-tabs";
import { MaterialCommunityIcons } from "@expo/vector-icons";

import LoginScreen from "../screens/LoginScreen";
import RegisterScreen from "../screens/RegisterScreen";
import AccountScreen from "../screens/AccountScreen";
import HomeScreen from "../screens/HomeScreen";
import WhateverScreen from "../screens/WhateverScreen";

const Stack = createStackNavigator();
const Tab = createBottomTabNavigator();

const AppNavigator = () => (
  <Tab.Navigator
    initialRouteName="Account"
    tabBarOptions={{
      style: { height: 80, paddingBottom: 10, paddingTop: 15 },
      labelStyle: { fontSize: 15, paddingTop: 5 },
    }}
  >
    <Tab.Screen
      name="Whatever"
      component={WhateverScreen}
      options={() => ({
        tabBarIcon: ({ color }) => (
          <MaterialCommunityIcons name="plus-circle" color={color} size={30} />
        ),
      })}
    />
    <Tab.Screen
      name="Home"
      component={HomeScreen}
      options={{
        tabBarIcon: ({ color }) => (
          <MaterialCommunityIcons name="home" color={color} size={30} />
        ),
      }}
    />
    <Tab.Screen
      name="Account"
      component={AccountScreen}
      options={{
        tabBarIcon: ({ color }) => (
          <MaterialCommunityIcons name="account" color={color} size={30} />
        ),
      }}
    />
  </Tab.Navigator>
);

const Navigator = () => (
  <Stack.Navigator>
    <Stack.Screen
      name="Login"
      component={LoginScreen}
      options={{ headerShown: false }}
    />
    <Stack.Screen name="Register" component={RegisterScreen} />
    <Stack.Screen
      name="Inside"
      component={AppNavigator}
      options={{ headerShown: false }}
    />
  </Stack.Navigator>
);

export default Navigator;
