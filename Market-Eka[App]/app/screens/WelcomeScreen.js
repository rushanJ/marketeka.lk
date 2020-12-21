import React from "react";
import { ImageBackground, StyleSheet, View, Image, Text } from "react-native";

import Button from "../components/Button";

function WelcomeScreen({ navigation }) {
  return (
    <ImageBackground
      blurRadius={20}
      style={styles.background}
      source={require("../assets/background.jpg")}
    >
      <View style={styles.logoContainer}>
        <Image style={styles.logo} source={require("../assets/logo.png")} />
        <Text style={styles.tagline1}>Creative IT Solutions</Text>
        <Text style={styles.tagline2}>Market</Text>
      </View>
      <View style={styles.buttonsContainer}>
        <Button title="Login" onPress={() => navigation.navigate("Login")} />
        <Button
          title="Register"
          color="secondary"
          onPress={() => navigation.navigate("Register")}
        />
      </View>
    </ImageBackground>
  );
}

const styles = StyleSheet.create({
  background: {
    flex: 1,
    justifyContent: "flex-end",
    alignItems: "center",
  },
  buttonsContainer: {
    padding: 20,
    width: "100%",
  },
  logo: {
    width: 100,
    height: 100,
  },
  logoContainer: {
    borderRadius: 40,
    backgroundColor: "white",
    padding: 20,
    position: "absolute",
    top: 100,
    alignItems: "center",
  },
  tagline1: {
    color: "rgb(0,130,0)",
    fontSize: 20,
    paddingTop: 30,
    paddingBottom: 2,
  },
  tagline2: {
    color: "rgb(0,80,0)",
    fontSize: 30,
    fontWeight: "bold",
    paddingTop: 2,
  },
});

export default WelcomeScreen;
