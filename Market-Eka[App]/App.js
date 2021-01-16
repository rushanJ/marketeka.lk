import React from "react";
import { NavigationContainer } from "@react-navigation/native";

import Navigator from "./app/navigation/Navigator";
import navigationTheme from "./app/navigation/navigationTheme";

import { Provider } from "react-redux";
import store from "./app/redux";

export default function App() {
  return (
    <Provider store={store}>
      <NavigationContainer theme={navigationTheme}>
        <Navigator />
      </NavigationContainer>
    </Provider>
  );
}
