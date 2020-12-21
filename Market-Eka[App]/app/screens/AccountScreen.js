import React from "react";
import Constants from "expo-constants";
import { StyleSheet, TouchableOpacity, View } from "react-native";

import ListItem from "../components/ListItem";
import colors from "../config/colors";
import Icon from "../components/Icon";
import Screen from "../components/Screen";
import useAuth from "../auth/useAuth";

function AccountScreen() {
  const { user, logOut } = useAuth();

  return (
    <Screen style={styles.screen}>
      <View style={styles.container}>
        <ListItem
          title={user.name}
          subTitle={user.email}
          image={require("../assets/user.png")}
        />
      </View>
      <View style={[styles.container, { marginBottom: 150 }]}>
        <ListItem
          title="Become a seller"
          IconComponent={<Icon name="cash" backgroundColor="#4ecdc4" />}
        />
      </View>
      <TouchableOpacity onPress={() => logOut()}>
        <ListItem
          title="Log Out"
          IconComponent={<Icon name="logout" backgroundColor="rgb(240,78,0)" />}
        />
      </TouchableOpacity>
    </Screen>
  );
}

const styles = StyleSheet.create({
  screen: {
    backgroundColor: colors.light,
    paddingTop: Constants.statusBarHeight,
  },
  container: {
    marginVertical: 10,
  },
});

export default AccountScreen;
