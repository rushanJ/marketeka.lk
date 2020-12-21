import React from "react";
import { StyleSheet } from "react-native";

import colors from "../config/colors";
import Screen from "../components/Screen";

//implement a Home Screen
function HomeScreen() {
  return <Screen style={styles.screen}></Screen>;
}

const styles = StyleSheet.create({
  screen: {
    padding: 20,
    backgroundColor: colors.light,
  },
});

export default HomeScreen;
