import React from "react";
import { useDispatch, useSelector } from "react-redux";
import Constants from "expo-constants";
import { StyleSheet, TouchableOpacity, View } from "react-native";

import ListItem from "../components/ListItem";
import colors from "../config/colors";
import Icon from "../components/Icon";
import Screen from "../components/Screen";
import { logOut } from "../redux";

function AccountScreen({ navigation }) {
  const userName = useSelector((state) => state.user.name);
  const userEmail = useSelector((state) => state.user.email);
  const dispatch = useDispatch();

  const logOutHandler = () => {
    dispatch(logOut());
    navigation.pop();
  };

  return (
    <Screen style={styles.screen}>
      <View style={styles.container}>
        <ListItem
          title={userName}
          subTitle={userEmail}
          image={require("../assets/user.png")}
        />
      </View>
      <View style={[styles.container, { marginBottom: 150 }]}>
        <ListItem
          title="Become a seller"
          IconComponent={<Icon name="cash" backgroundColor="#4ecdc4" />}
        />
      </View>
      <TouchableOpacity onPress={logOutHandler}>
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
