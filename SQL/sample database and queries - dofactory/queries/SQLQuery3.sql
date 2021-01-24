/*===============================================*
1) odrediti broj narudzbina i ukupnu vrednost prodaje izmedju 1. januara 2013 do 31. januara 2013
2)izlistati sve dobavljace iz japana, uk i usa
3)izlistati sve proizvode koje nemaju istu vrednost cene iz skupa (10, 20, 30, 40, 50)
4)navesti spisak kupaca koji su iz iste zemlje dobavljaca
5)ispisati sve proizvode cije ime pocinje sa 'Ca'
6)ispisati sve proizvode cije imne pocinje sa 'Cha' ili 'chan' gde jos sadrzi 1 karakter u imenu
7)navesti sve dobavljace koji nemaju broj fax-a
*===============================================*/

use [1830fabrika]

/*----------------------------------------------*/

/* -prvi zadatak-

select count(id) as [broj porudzbina], SUM(TotalAmount) as [ukupna cena]
from [dbo].[Order]
where OrderDate between('2013-01-01') and ('2013-1-31') 
*/

/* -drugi zadatak-

select CompanyName
from supplier
where country in ('Japan', 'UK', 'USA')
*/

/* -treci zadatak-

select ProductName
from product
where UnitPrice NOT IN ('10', '20', '30', '40', '50')
*/

/* -cetvrti zadatak-

select firstname, lastname
from customer
where country in (select country from supplier)
*/

/* -peti zadatak-

select ProductName
from product
where ProductName like 'Ca%'
*/

/* -sesti zadatak-

select ProductName
from product
where ProductName like 'Cha_' or ProductName like 'Chan_'
*/

/* -sedmi zadatak-

select CompanyName
from supplier
where fax is null
*/

/* -osmi zadatak-

select CompanyName
from supplier
where fax is not null
*/

/* -deveti zadatak-

select Country, count(country) as [koliko puta se ponovilo]
from Customer
group by Country
*/

/* -deseti zadatak-

select Country, count(Country) as [kolko kupaca]
from Customer
group by Country
order by [kolko kupaca] desc
*/

/* -jedanaesti zadatak-

select CustomerId as [id kupca], count(CustomerId) as [kolko porudzbina]
from [Order]
group by CustomerId
*/

/* -dvanaesti zadatak-

select Country, count(Id) as BrKupaca
from Customer
group by Country
having count(Id) > 10
*/

/* -trinaesti zadatak-

select count(id) as [Broj kupaca], Country
from Customer
where country not like 'USA'
group by Country
having count(id) >= 9
order by count(id) desc
*/

/* -cetrnaesti zadatak-

select CustomerId
from [Order]
group by CustomerId
having avg(TotalAmount) >= 1000 and avg(TotalAmount) <= 1200 <!postoji between!>
*/

/* -petnaesti zadatak-

select country as zemlja, count(id) as [broj korisnika]
from customer
group by country
*/

/* -sesnaesti zadatak- nije resen

select customer.Id, CONCAT(FirstName, ' ', LastName, ', ') as [puno ime], sum(TotalAmount) as [ukupno placeno]
from customer
join [order] on customer.Id = [order].CustomerId
group by customer.id
*/

--/* -sedamnaesti zadatak-

select productname
from Product
where id in (select productid from OrderItem where Quantity > 100)
--*/

--/* - zadatak-


--*/

--/* - zadatak-


--*/

--/* - zadatak-


--*/



































































































































;