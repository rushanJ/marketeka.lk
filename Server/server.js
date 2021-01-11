const express = require("express");
const bodyParser = require("body-parser");
const mySqlConnection = require("./connection");
const userRouts = require("./routes/user");
const itemRouts = require("./routes/item");



var app = express();
app.use(bodyParser.json());

app.use("/user", userRouts);
app.use("/item", itemRouts);



app.listen(3000)