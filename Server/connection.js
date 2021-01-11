const mysql = require("mysql");
var mysqlConnection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "marketEka",
    multipleStatements: true

});
mysqlConnection.connect((err) => {
    if (!err) console.log("Connection Success ...");
    else console.log("Connection Error ...");
});

module.exports = mysqlConnection;