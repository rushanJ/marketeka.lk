import React, { useState } from "react";
import { ScrollView, StyleSheet } from "react-native";
import * as Yup from "yup";

import Screen from "../components/Screen";
import usersApi from "../api/users";
import {
  ErrorMessage,
  Form,
  FormField,
  SubmitButton,
} from "../components/forms";
import useApi from "../hooks/useApi";
import Loading from "../components/loadingAnim";
import { logIn } from "../redux";
import { useDispatch } from "react-redux";

const validationSchema = Yup.object().shape({
  firstname: Yup.string().required().label("First Name"),
  lastname: Yup.string().required().label("Last Name"),
  phone: Yup.number().required().min(10).label("Phone"),
  address: Yup.string().required().label("Adress"),
  email: Yup.string().required().email().label("Email"),
  password: Yup.string().required().min(5).label("Password"),
});

function RegisterScreen() {
  const dispatch = useDispatch();
  const registerApi = useApi(usersApi.register);
  const [error, setError] = useState();

  const handleSubmit = async (userInfo) => {
    const result = await registerApi.request(userInfo);

    if (!result.ok) {
      if (result.data) setError(result.data.error);
      else {
        setError("An unexpected error occurred.");
        console.log(result);
      }
      return;
    }

    dispatch(logIn({ email: userInfo.email, password: userInfo.password }));
  };

  return (
    <>
      <Loading visible={registerApi.loading} />
      <ScrollView>
        <Screen style={styles.container}>
          <Form
            initialValues={{
              firstname: "",
              lastname: "",
              phone: "",
              address: "",
              email: "",
              password: "",
            }}
            onSubmit={handleSubmit}
            validationSchema={validationSchema}
          >
            <ErrorMessage error={error} visible={error} />
            <FormField
              autoCorrect={false}
              icon="account"
              name="firstname"
              placeholder="First Name"
            />
            <FormField
              autoCorrect={false}
              icon="account"
              name="lastname"
              placeholder="Last Name"
            />
            <FormField
              autoCorrect={false}
              icon="phone"
              keyboardType="phone-pad"
              name="phone"
              placeholder="Phone"
            />
            <FormField
              autoCorrect={false}
              icon="mailbox"
              name="address"
              placeholder="Address"
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
            <SubmitButton title="Register" />
          </Form>
        </Screen>
      </ScrollView>
    </>
  );
}

const styles = StyleSheet.create({
  container: {
    padding: 10,
  },
});

export default RegisterScreen;
