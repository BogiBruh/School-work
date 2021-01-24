USE bazabike
/*SELECT first_name, last_name
FROM sales.customers
WHERE last_name LIKE 'Pope'
ORDER BY first_name desc;*/
/*
SELECT --*
product_name, model_year, list_price
FROM production.products
--WHERE list_price < 1000;
WHERE model_year between 2016 AND 2018
ORDER BY list_price DESC
;*/
/*
SELECT /* * */ first_name, last_name, email, phone
FROM sales.customers
/*WHERE first_name LIKE '_a_'
ORDER BY first_name
*/
WHERE phone IS NULL*/
/*
SELECT SUM(list_price) AS ukupna_suma,
		COUNT(product_name) as br_proizvoda,
		AVG(list_price) AS OsrednjaCena,
		MIN(list_price) AS MinCena,
		MAX(list_price) AS MAXCena
FROM production.products*//*
SELECT product_id, SUM(quantity) AS kolicina_produkta
FROM production.stocks
GROUP BY product_id
ORDER BY product_id*/
/*
select customer_id, YEAR(order_date) AS godina,
					Count(order_id) As UGodini
from sales.orders
where customer_id in(7,287,351,438)
Group by customer_id, YEAR(order_date)
order by customer_id*/
/*
select city, count(customer_id) as glupani
from sales.customers
group by city
order by glupani desc
*/
/*
select brand_name,/* product_name*/ count(brand_name) as kolkoSePonavlja, MIN(list_price) as MinCena, MAX(list_price) as MaxPlaca
from production.products AS p
inner join production.brands as b
on p.brand_id = b.brand_id
group by brand_name
order by MinCena
*/
/*
SELECT 
	customer_id,
	count (customer_id) as kolkoPuta,
	YEAR (order_date) as yrord 
FROM sales.orders
where customer_id in (7, 51, 3)
GROUP BY customer_id, YEAR(order_date)
ORDER BY customer_id*/
/*
SELECT	
		concat(first_name,' ', last_name) as [puno ime],
		kustomyers.customer_id,
		yorders.order_id
FROM sales.customers as kustomyers
inner join sales.orders as yorders
ON kustomyers.customer_id = yorders.customer_id
ORDER BY first_name
*/


/*
SELECT city, first_name, last_name
FROM sales.customers
order by city desc, first_name asc
*/

/*
SELECT product_name, category_id, model_year
FROM production.products
--WHERE category_id in (1)
--WHERE category_id in (1) AND model_year in (2018)
WHERE list_price  AND model_year in (2018)
*/

/*
--SELECT product_name, list_price
SELECT product_name, brand_id, list_price
FROM production.products
--WHERE list_price > 200 AND list_price < 6000
WHERE brand_id in (1, 2) AND list_price > 500
--ORDER BY list_price
order by  brand_id
*/

/*
--SELECT city, state, zip_code
SELECT customer_id, first_name, last_name
FROM sales.customers
--WHERE first_name like '_u%'
WHERE last_name like '[A, B, C]%'
--group by city, state, zip_code
--order by city, state, zip_code
--order by first_name
Order by last_name
*/

/*
CREATE TABLE sales.feedbacks (
	feedback_id INT IDENTITY(1, 1) PRIMARY KEY,
	comments VARCHAR(255) NOT NULL
);
*/

/*
INSERT INTO sales.feedbacks(comments) VALUES('Can you give me 20% discount?'),
											('May i get 30USD off?'),
											('Is this having a 30% discount today?')
*/

/*
SELECT 
FROM sales.feedbacks
*/

/*
if exists drop table sales.feedbacks
*/

/*
CREATE SCHEMA HR
go

CREATE TABLE HR.candidates (
	id INT IDENTITY(1,1) PRIMARY KEY,
	fullname varchar(100) NOT NULL
)

CREATE TABLE HR.employees (
	id INT IDENTITY(1,1) PRIMARY KEY,
	fullname varchar(100) NOT NULL
)
*/

/*
INSERT INTO HR.employees(fullname) VALUES('Thanos Simpson'),
										  ('Eric Andre'),
										  ('Hannibal lecter'),
										  ('Waltart Whute'),
										  ('Gus Tavo Fringo')
*/
/*
SELECT *
FROM hr.employees
*/















































































































































































































;