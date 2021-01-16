import React, { useEffect, useState } from "react";
import { StyleSheet, Image, ScrollView, View } from "react-native";
import { useSelector, useDispatch } from "react-redux";
import * as Yup from "yup";

import Screen from "../components/Screen";
import {
  ErrorMessage,
  Form,
  FormField,
  SubmitButton,
} from "../components/forms";
import Button from "../components/Button";
import { logIn } from "../redux";

const validationSchema = Yup.object().shape({
  email: Yup.string().required().email().label("Email"),
  password: Yup.string().required().min(4).label("Password"),
});

function LoginScreen({ navigation }) {
  const [loginFailed, setLoginFailed] = useState(false);

  const loginSuccess = useSelector((state) => state.success);
  const loginError = useSelector((state) => state.error);
  const dispatch = useDispatch();

  useEffect(() => {
    setLoginFailed(false);
    if (loginSuccess) getIn();
    else if (loginError !== "") setLoginFailed(true);
  }, [loginSuccess, loginError]);

  const handleSubmit = async ({ email, password }) => {
    dispatch(logIn({ email, password }));
  };

  const getIn = () => navigation.navigate("Inside");

  return (
    <ScrollView>
      <Screen style={styles.container}>
        <View style={styles.imageContainer}>
          <Image style={styles.logo} source={require("../assets/logo.png")} />
        </View>
        <Form
          initialValues={{ email: "", password: "" }}
          onSubmit={handleSubmit}
          validationSchema={validationSchema}
        >
          <ErrorMessage
            error="Invalid email and/or password."
            visible={loginFailed}
          />
          <FormField
            autoCapitalize="none"
            autoCorrect={false}
            icon="email"
            keyboardType="email-address"
            name="email"
            placeholder="Email"
            textContentType="emailAddress"
          />
          <FormField
            autoCapitalize="none"
            autoCorrect={false}
            icon="lock"
            name="password"
            placeholder="Password"
            secureTextEntry
            textContentType="password"
          />
          <SubmitButton title="Login" />
        </Form>
        <View style={styles.buttonsContainer}>
          <Button
            title="Register"
            color="secondary"
            onPress={() => navigation.navigate("Register")}
          />
        </View>
      </Screen>
    </ScrollView>
  );
}

const styles = StyleSheet.create({
  container: {
    padding: 10,
  },
  buttonsContainer: {
    paddingVertical: 100,
  },
  imageContainer: {
    paddingVertical: 50,
  },
  logo: {
    width: 80,
    height: 80,
    alignSelf: "center",
    marginTop: 50,
    marginBottom: 20,
  },
});

export default LoginScreen;
