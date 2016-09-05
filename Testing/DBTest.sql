-- Se crea y busca restaurante
insert into oferente 
values (99, "TouchFood", 1234, "Admin");
select * from oferente where razon_social = "TouchFood";

-- Se crea y busca la mesa recién creada.
insert into mesa values (99, 99);
select * from mesa where numero_mesa = 99;

-- Sencilla prueba que muestra las bebidas con precio menor a 100--
select * from bebidas where precio < 100;

-- Se prueba que retornen todos los pedidos-- 
Select  * from pedidos;

-- Se prueba la inserción de un pedido--
insert into pedidos 
values (4, 6, 5, 5, 4, "4");

-- Se comprueba que el pedido fue creado exitosamente --
select * from pedidos where id_pedido = 4;

-- Con esta consulta se pueden saber las comidas que fueron pedidas --
select nombre 
from comidas 
join pedidos
where comidas.id_plato = pedidos.id_plato;