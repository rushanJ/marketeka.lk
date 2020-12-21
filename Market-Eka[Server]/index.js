const express = require("express");
const users = require("./routes/users");
const auth = require("./routes/auth");
const config = require("config");
const app = express();

app.use(express.json());

app.use("/api/users", users);
app.use("/api/auth", auth);

const port = process.env.PORT || config.get("port");
app.listen(port, () => {
  console.log(`Server started on port ${port}...`);
});
