import { createStore, applyMiddleware } from "redux";
import thunk from "redux-thunk";
import axios from "axios";
import jwtDecode from "jwt-decode";

const middleware = [thunk];

const initialState = {
  loading: false,
  success: false,
  user: [],
  error: "",
};

const LOGIN_USER = "LOGIN_USER";
const LOGIN_USER_SUCCESS = "LOGIN_USER_SUCCESS";
const LOGIN_USER_FALIURE = "LOGIN_USER_FALIURE";

const LOGOUT_USER = "LOGOUT_USER";

const loginUser = () => {
  return {
    type: LOGIN_USER,
  };
};

const loginUserSuccess = (user) => {
  return {
    type: LOGIN_USER_SUCCESS,
    payload: user,
  };
};

const loginUserFaliure = (error) => {
  return {
    type: LOGIN_USER_FALIURE,
    payload: error,
  };
};

const logOutUser = () => {
  return {
    type: LOGOUT_USER,
  };
};

const logIn = (loginInfo) => {
  return function (dispatch) {
    dispatch(loginUser());
    axios
      .post("http://192.168.1.100:9000/api/auth", loginInfo)
      .then((response) => {
        const user = jwtDecode(response.data);
        dispatch(loginUserSuccess(user));
      })
      .catch((error) => {
        dispatch(loginUserFaliure(error.message));
      });
  };
};

const logOut = () => {
  return function (dispatch) {
    dispatch(logOutUser());
  };
};

const authReducer = (state = initialState, action) => {
  console.log(action.type);
  switch (action.type) {
    case LOGIN_USER:
      return {
        ...state,
        loading: true,
      };
    case LOGIN_USER_SUCCESS:
      return {
        loading: false,
        success: true,
        user: action.payload,
        error: "",
      };
    case LOGIN_USER_FALIURE:
      return {
        loading: false,
        user: [],
        error: action.payload,
      };
    case LOGOUT_USER:
      return {
        ...state,
        loading: false,
        success: false,
        user: [],
        error: "",
      };
    default:
      return state;
  }
};

const store = createStore(authReducer, applyMiddleware(...middleware));

// store.subscribe(() => {
//   console.log(store.getState());
// });

export { logIn, logOut };

export default store;
