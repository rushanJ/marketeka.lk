const express = require("express");
// const { Router } = require("express");
const mysqlConnection = require("../connection");
const Router = express.Router();
var bodyParser = require('body-parser');
var urlencodedParser = bodyParser.urlencoded({ extended: false })

Router.get("/", (req, res) => {

    mysqlConnection.query("SELECT * FROM `item`", (err, rows, fields) => {
        if (!err) res.send(rows);
        else console.log(err)
    })
})
Router.get("/:item", urlencodedParser, (req, res) => {

     console.log(req.params.id);
    item = req.params.item;

    mysqlConnection.query("SELECT `item`.`id`,`item`.`serialNo`,`item`.`name`,`item`.`qty`,`item`.`sellingPrice`,`item`.`description`,`store`.`name` AS `store` FROM `item` ,`store` WHERE `item`.`shop`=`store`.`id` AND `item`.`id`='" + item + "'", (err, rows, fields) => {
        if (!err) res.send(rows);
        else console.log(err)
    })
})

Router.post("/search", urlencodedParser, (req, res) => {
    res.setHeader('Content-Type', 'application/json');

    key = req.body.key;
    console.log(key );
    mysqlConnection.query("SELECT * FROM `item` WHERE `name` LIKE '%" + key + "%'; ", (err, rows, fields) => {
        if (!err && rows[0] != undefined ) {
            response = {
                success: true,
                dataset: rows
            };
        
            console.log(rows[0] );
            res.end(JSON.stringify(response));
        } else {console.log(err)
            response = {
                success: false
               
            };
            res.end(JSON.stringify(response));
        }
    })
})


Router.post("/", urlencodedParser, (req, res) => {
    res.setHeader('Content-Type', 'application/json');
     console.log(req.body);
    trollyId = req.body.trollyId;
    userId = req.body.user;
    item = req.body.item;
    qty = 1;
    price = 1500;
   

    mysqlConnection.query("INSERT INTO `order_item` (`trollyId`, `userId`, `item`, `qty`, `price`,  `status`)     VALUES (  '" + trollyId + "', '" + userId + "', '" + item + "', '" + qty + "', '" + price + "', 'PENDING'); ", (err, rows, fields) => {
        if (!err) {
            response = {
                success: true,
            };
            console.log(response);
            res.end(JSON.stringify(response));
        } else {
            response = {
                success: false,
            };
            console.log(err);
            res.end(JSON.stringify(response));
        };
    })

})   
Router.post("/wishlist", urlencodedParser, (req, res) => {
    res.setHeader('Content-Type', 'application/json');
    console.log(req.body);
    // shop = req.body.shop;
    // serialNo = req.body.serialNumber;
    // name = req.body.name;
    // qty = req.body.qty;
    // supplierPrice = req.body.supplierPrice;
    // retailPrice = req.body.retailPrice;
    // sellingPrice = req.body.sellingPrice;
    // description = req.body.description;
    // supplier = req.body.supplier;

    // mysqlConnection.query("INSERT INTO `item`(`id`, `shop`, `serialNo`, `name`, `qty`, `supplierPrice`, `retailPrice`, `sellingPrice`, `description`, `supplier`) VALUES  (NULL, '" + shop + "', '" + serialNo + "', '" + name + "', '" + qty + "', '" + supplierPrice + "', '" + retailPrice + "', '" + sellingPrice + "', '" + description + "', '" + supplier + "');", (err, rows, fields) => {
    //     if (!err) {
    //         response = {
    //             success: true,
    //         };
    //         console.log(response);
    //         res.end(JSON.stringify(response));
    //     } else {
    //         response = {
    //             success: false,
    //         };
    //         console.log(err);
    //         res.end(JSON.stringify(response));
    //     };
    // })
})
module.exports = Router;