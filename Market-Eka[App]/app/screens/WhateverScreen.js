import React from "react";
import { StyleSheet } from "react-native";

import colors from "../config/colors";
import Screen from "../components/Screen";

//Implement something (or remove)
//Just two things in the bottom-tab-navigator is ugly (so added this :P)
function WhateverScreen() {
  return <Screen style={styles.container}></Screen>;
}

const styles = StyleSheet.create({
  container: {
    padding: 20,
    backgroundColor: colors.light,
  },
});
export default WhateverScreen;
