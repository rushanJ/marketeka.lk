CREATE TABLE [user] (
  id int NOT NULL IDENTITY(1,1) PRIMARY KEY  ,
  name varchar(30) NOT NULL,
  email varchar(40) NOT NULL UNIQUE ,
  tp1 INT NOT NULL,
  tp2 INT NOT NULL,
  address varchar(50) NOT NULL,
  district varchar(30) NOT NULL,
  nearestTown varchar(30) NOT NULL,
  pass varchar(50) NOT NULL,
  trolleyId INT NOT NULL,
  status INT NOT NULL DEFAULT 0
)


CREATE TABLE shop (
  id int NOT NULL IDENTITY(1,1) PRIMARY KEY  ,
  name varchar(30) NOT NULL,
  contactNo INT NOT NULL,
  address text NOT NULL,
  district varchar(20) NOT NULL,
  nearestTown varchar(30) NOT NULL,
  deliveryChargeType varchar(10) NOT NULL,
  charge decimal(5,2) NOT NULL,
  email varchar(40) NOT NULL UNIQUE ,
  pass varchar(30) NOT NULL,
  ownerName varchar(30) NOT NULL,
  ownerAddress text NOT NULL,
  NIC varchar(12) NOT NULL,
  br_no varchar(20) NOT NULL,
  ownerEmail varchar(40) NOT NULL,
  status varchar(30) NOT NULL
)



CREATE TABLE item (
  id int NOT NULL IDENTITY(1,1) UNIQUE,
  itemCode varchar(30) NOT NULL,
  shop INT NOT NULL,
  name varchar(70) NOT NULL,
  description text NOT NULL,
  qty INT NOT NULL,
  measuringUnit varchar(10) NOT NULL,
  unitPrice decimal(11,2) NOT NULL,
  minPrice decimal(11,2) NOT NULL,
  purchasePrice decimal(11,2) NOT NULL,
  itemLock INT NOT NULL,
  imgType varchar(5) NOT NULL,CONSTRAINT item_ibfk_1 FOREIGN KEY (shop) REFERENCES shop (id)
) ;


CREATE TABLE info (
  trolleyId INT NOT NULL PRIMARY KEY
)

CREATE TABLE stats (
  id int NOT NULL IDENTITY(1,1) UNIQUE,
  date date NOT NULL PRIMARY KEY,
  orders INT NOT NULL,
  shops INT NOT NULL,
  users INT NOT NULL,
  items INT NOT NULL
)

CREATE TABLE itemStat (
  id int NOT NULL IDENTITY(1,1) UNIQUE,
  date date NOT NULL,
  item INT NOT NULL,
  orderCount INT NOT NULL,
  viewCount INT NOT NULL,
  CONSTRAINT itemStat_ibfk_1 FOREIGN KEY (item) REFERENCES item (id)
);

CREATE TABLE orders (
  id int NOT NULL IDENTITY(1,1) UNIQUE,
  item INT NOT NULL,
  qty DECIMAL(5,2) NOT NULL,
  trolleyId INT NOT NULL,
  address varchar(100) NOT NULL,
  status varchar(30) NOT NULL,
  remarks varchar(70) NOT NULL,
  timeStamp datetime2(0) NOT NULL DEFAULT GETDATE(),
  [user] INT NOT NULL,
   CONSTRAINT orders_ibfk_1 FOREIGN KEY (item) REFERENCES item (id),
  CONSTRAINT orders_ibfk_2 FOREIGN KEY ([user]) REFERENCES [user] (id)
);

ALTER TABLE item
  ADD PRIMARY KEY (itemCode,shop);

ALTER TABLE itemStat
  ADD PRIMARY KEY (date,item);


ALTER TABLE orders
  ADD PRIMARY KEY (item,trolleyId);


CREATE  PROCEDURE addItem @itemCode VARCHAR(30) ,@shop INT, @name VARCHAR(70), @description TEXT, @qty INT, @measuringUnit VARCHAR(10), @unitPrice DECIMAL(11,2), @minPrice DECIMAL(11,2), @purchasePrice DECIMAL(11,2), @imgType VARCHAR(5)
AS
INSERT INTO  item(itemCode, shop, name, description, qty, measuringUnit, unitPrice, minPrice, purchasePrice,itemLock,imgType) VALUES (@itemCode,@shop,@name,@description,@qty,@measuringUnit,@unitPrice,@minPrice,@purchasePrice,0,@imgType)
GO


CREATE   PROCEDURE addShop @name VARCHAR(70), @contactNo INT, @address TEXT, @district VARCHAR(20), @nearestTown VARCHAR(30), @deliveryChargeType VARCHAR(10), @charge INT, @email VARCHAR(30), @pass VARCHAR(30), @ownerName VARCHAR(20), @ownerAddress TEXT, @NIC INT, @br_no VARCHAR(20), @ownerEmail VARCHAR(20)
AS
INSERT INTO shop(name, contactNo, address, district, nearestTown,deliveryChargeType,charge, email, pass, ownerName, ownerAddress, NIC, br_no, ownerEmail, status)
                VALUES (@name,@contactNo,@address,@district,@nearestTown,@deliveryChargeType,@charge,@email,@pass,@ownerName,@ownerAddress,@NIC,@br_no,@ownerEmail,1)
GO


CREATE  PROCEDURE getItemInfo @id INT
AS
BEGIN
IF EXISTS (SELECT * FROM itemStat WHERE date =CONVERT(date, getdate()) AND item =@id) 
BEGIN
  UPDATE itemStat SET viewCount = viewCount+1 WHERE date =CONVERT(date, getdate()) AND item =@id
END
ELSE
BEGIN
    INSERT INTO itemStat( date, item, orderCount, viewCount) VALUES (GETDATE(),@id,0,1)
END

SELECT * FROM itemStat;


SELECT item.id,item.itemCode,item.shop,item.name,item.description,item.qty,item.measuringUnit, item.unitPrice ,item.imgType ,shop.name as sName,shop.nearestTown FROM item,shop WHERE shop.id=item.shop AND item.id = @id  ORDER BY item.id;
END
GO







INSERT INTO [user] (name, email, tp1, tp2, address, district, nearestTown, pass, trolleyId, status) VALUES
('Ashwini Ranathunge', 'ashwini@gmail.com', 775865135, 712583694, 'Palapathwala, Matale', 'Matale', 'Matale', 'Ashwini', 16, 0),
('Asuni Jayawickrama', 'Asuni@gmail.com', 785421695, 771791685, 'Gampaha, Kadawatha', 'Gampaha', 'Gampaha', 'Asuni', 9, 0),
( 'Binari Chandrasiri', 'Binari@gmail.com', 754286354, 712554354, 'No37/4, Padiayapelalla, NuwaraEliya', 'NuwaraEliya', 'Padiyapelalla', 'Bina', 8, 0),
('Channa Jayawickrama', 'channa@gmail.com', 712546983, 771548692, 'NO.37, Muwandeniya, Matale', 'Matale', 'Matale', 'Channa', 1, 1),
('Sawan Gamage', 'communicationhms@gmail.com', 776109979, 776109979, 'No 22/B, Athkamniwasa', 'moaeragala', 'Thanamalwila', 'abc123', 22, 1),
('Dhananjaya Harischandra', 'dhana@gmail.com', 712254896, 712584339, 'No35, Abdulla Road, Negambo', 'Negambo', 'Negambo', 'Dhana', 19, 0),
('Sawan Gamage', 'kgssgamage@gmail.com', 2147483647, 2147483647, 'No 22/B, Athkamniwasa', 'Colombo', 'asbbtg', 'abc123', 26, 1),
('Mithila Dissanayake', 'mithila@gmail.com', 785421695, 758423698, 'Watagoda Road, Matale', 'Matale', 'Matale', 'Mithila', 13, 0),
('Nadeesha Dhanapala', 'Nadeesha@gmail.com', 713255612, 773355668, 'No.18, Vihara Road, Matale', 'Matale', 'Matale', 'Nadeesha', 14, 0),
('Navoda Kakuladara', 'Navoda@gmail.com', 778542369, 712569834, 'No.36, Kiula,Matale', 'Matale', 'Matale', 'Navo', 10, 0),
('Nayomi Somarathne', 'nayomi@gmail.com', 77556895, 71258436, 'Owilikanda, Matale', 'Matale', 'Matale', 'Nayomi', 18, 0),
('Nipun Dabare', 'Nipun@gmail.com', 721548963, 778952413, 'Mahaiyawa, Katugastota, Kandy', 'Kandy', 'Katugastota', 'Dabare', 5, 0),
('Oshada Karunarathne', 'oshada@gmail.com', 712548963, 777758692, 'Ginigathhena, Hatton', 'NuwaraEliya', 'Ginigathhena', 'Oshada', 6, 0),
('Pankaja Wijesena', 'Pankaja@gmail.com', 771253658, 785469243, 'No.25, Alwatta, Matale', 'Matale', 'Matale', 'Pankaja', 3, 0),
('Praveen Palihena', 'praveen@gmail.com', 778956423, 712546989, '3rd Lane, Kaluthara', 'Kaluthara', 'Kaluthara', 'Praveen', 4, 0),
('Radhika Weerarathne', 'radhika@gmail.com', 772583694, 771245863, 'Alwaththa, Neluwakanda, Matale', 'Matale', 'Matale', 'Radhika', 17, 0),
('Rushan Thasindu Jayasundara', 'rushanthasindu10@gmail.com', 2147483647, 2147483647, 'B 34/1, Yataththawala, Imbulgasdeniya', 'Colombo', 'Kegalle', 'rushan', 20, 1),
('Sahan Rathnayake', 'sahan@gmail.com', 752486936, 77253694, 'No5, Welimada, Badulla', 'Badulla', 'Badulla', 'Sahan', 11, 0),
('Sara Pinto', 'sara@gmail.com', 789456123, 758423698, 'No.52, St.Jhoseph Lane, Negambo', 'Negambo', 'Negambo', 'Sara', 7, 0),
('Sewwandi Samarasinghe', 'Sewwandi@gmail.com', 662458756, 712685943, 'No.9, 2nd Lane, Rathnapura Road, Awissawella', 'Awissawella', 'Awissawella', 'Sewwandi', 2, 0),
('Vimukthi Wijesinghe', 'vimukthi@gmail.com', 775428652, 775825536, 'Godagama, Kottawa', 'Kottawa', 'Godagama', 'Vimukthi', 12, 0);



INSERT INTO item (itemCode, shop, name, description, qty, measuringUnit, unitPrice, minPrice, purchasePrice, itemLock, imgType) VALUES
( '', 1, 'iPhone 7 Plus', 'Released 2016, September\r\n3GB RAM\r\n188g, 7.3mm thickness\r\niOS 10.0.1, up to iOS 13.2\r\n32GB/128GB storage, no card slot', 10, 'Device', '50000.00', '50000.00', '50000.00', 0, 'jpg'),
( '113414', 1, 'iphone 11 pro max', 'Released 2019, September\r\n4GB RAM\r\n226g, 8.1mm thickness\r\niOS 11.1.1, up to iOS 13.4\r\n64GB storage, no card slot', 10, 'Device', '200000.00', '200000.00', '200000.00', 0, 'jpg'),
('12312312', 1, 'iPhone 5s', 'Released 2013, September1GB RAM112g, 7.6mm thicknessiOS 7, up to iOS 12.432GB storage, no card slot', 10, 'Device', '14000.00', '15000.00', '0.00', 0, 'jpg'),
('13123', 1, 'iPhone 7', 'Released 2016, September\r\n1GB RAM\r\n138g, 7.1mm thickness\r\niOS 10.0.1, up to iOS 13.2\r\n32GB/128GB storage, no card slot', 10, 'Device', '38000.00', '38000.00', '38000.00', 0, 'jpg'),
( '2262', 1, 'kota bina', 'Eki kotama kotai', 1, 'value bina', '100.00', '80.00', '70.00', 0, 'jpg'),
('234234', 1, 'iPhone 8', 'Released 2017, September\r\n2GB RAM\r\n148g, 7.3mm thickness\r\niOS 11, up to iOS 13.2\r\n32GB storage, no card slot', 10, 'Device', '60000.00', '60000.00', '60000.00', 0, 'jpg'),
( '235235', 1, 'iPhone 8 Plus', 'Released 2017, September\r\n3GB RAM\r\n202g, 7.5mm thickness\r\niOS 11, up to iOS 13.2\r\n64GB storage, no card slot', 10, 'Device', '68000.00', '68000.00', '68000.00', 0, 'jpg'),
('24234', 1, 'iPhone SE', 'Released 2016, March2GB RAM113g, 7.6mm thicknessiOS 9.3.2, up to iOS 13.232GB storage, no card slot', 10, 'Device', '25000.00', '26000.00', '26000.00', 0, 'jpg'),
( '345345', 1, 'iPhone 6 Plus', 'Released 2014, September\r\n1GB RAM\r\n172g, 7.1mm thickness\r\niOS 8, up to iOS 12.4\r\n16GB/32GB/128GB storage, no card slot', 10, 'Device', '28000.00', '28000.00', '28000.00', 0, 'jpg'),
('546456', 1, 'iphone SE 2', 'Released 2020, May\r\n3GB RAM\r\n148g, 7.3mm thickness\r\niOS 11.1.1, up to iOS 13.4\r\n64GB storage, no card slot', 10, 'Device', '80000.00', '80000.00', '80000.00', 0, 'jpg'),
('iPhone 6s', 1, 'iPhone 6s', 'Released 2015, September2GB RAM143g, 7.1mm thicknessiOS 9, up to iOS 13.216GB/32GB storage, no card slot', 10, 'Device', '24000.00', '24000.00', '24000.00', 0, 'jpg');
