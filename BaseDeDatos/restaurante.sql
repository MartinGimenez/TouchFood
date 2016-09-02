create database restaurante;


create table restaurante.oferente
(	id_rest int not null,		
	razon_social varchar(50) not null,  /*para login*/
    contraseña varchar(30) not null,	/*para login*/
    rol varchar(15) not null,           /*mozo o administrador*/      /* admin tiene boton agregar mesa , agregar plato*/  /*mozo puede ver pedidos y cuanto tiempo va*/
    primary key(id_rest)
);

insert into restaurante.oferente values (1,"la Estancia", "admin1905","administrador");
insert into restaurante.oferente values (2,"la Estancia", "user1905","mozo");



create table restaurante.mesa
(	numero_mesa int not null,
	capacidad int,						    		/*el oferente deberia poder agregar mas mesas segun su gusto o quitar*/
    primary key(numero_mesa)
);

insert into restaurante.mesa values (1, 4);
insert into restaurante.mesa values (2, 14);
insert into restaurante.mesa values (3, 4);
insert into restaurante.mesa values (4, 8);
insert into restaurante.mesa values (5, 10);
insert into restaurante.mesa values (6, 2);
insert into restaurante.mesa values (7, 4);
insert into restaurante.mesa values (8, 2);
insert into restaurante.mesa values (9, 1);
insert into restaurante.mesa values (10, 1);
insert into restaurante.mesa values (11, 6);
insert into restaurante.mesa values (12, 2);
insert into restaurante.mesa values (13, 1);
insert into restaurante.mesa values (14, 14);
insert into restaurante.mesa values (15, 4);
insert into restaurante.mesa values (16, 6);
insert into restaurante.mesa values (17, 8);
insert into restaurante.mesa values (18, 1);
insert into restaurante.mesa values (19, 2);
insert into restaurante.mesa values (20, 10);
insert into restaurante.mesa values (21, 8);
insert into restaurante.mesa values (22, 4);
insert into restaurante.mesa values (23, 6);
insert into restaurante.mesa values (24, 1);
insert into restaurante.mesa values (25, 2);


create table restaurante.comidas
(	id_plato int not null  auto_increment,
	nombre varchar(50) not null,
    ingredientes varchar(110) not null,
    categoria varchar(20) not null,                   /* pollos, carnes,cerdos,vegetales, pescados,pastas,pizzas,picadas,minutas,sopas,ensaladas,especiales*/
    precio int not null,
    celiaco boolean,
    tiempo_coccion time,
    primary key(id_plato)
);
    
    insert into restaurante.comidas values (1, "pollo con fritas","pollo/papas/pimienta/aceite/oregano","pollos",135,true,30);
    insert into restaurante.comidas values (2, "pollo con pure de papas","pollo/pure de papas/leche/aceite/","pollos",112,true,20);
    insert into restaurante.comidas values (3, "pollo con pure de zapallo","pollo/pure de zapallo/aceite/oregano","pollos",112,true,20);
    insert into restaurante.comidas values (4, "pollo grille","pollo hervido/pimienta/aceite/tomillo","pollos",96,true,25);
    insert into restaurante.comidas values (5, "pollo al ajillo","pollo/ajo/pimienta/nuez moscada/aceite","pollos",189,true,35);
    insert into restaurante.comidas values (6, "brocheta de pollo con salsa de champiñon","pollo/salsa champiñon/morrones","pollos",176,true,43);
    insert into restaurante.comidas values (7, "pollo relleno","pollo/huevo/jamon/panceta/queso/mayonesa","pollos",220,true,45);
    insert into restaurante.comidas values (8, "pollo con papas noiset","pollo/papas/manteca/leche/oregano/tomillo","pollos",156.20,true,34);
    insert into restaurante.comidas values (9, "pechuga mediterranea","pechuga/ala/marinado en limon/aceite/oregano/ajo","pollos",278,true,42);
    insert into restaurante.comidas values (10, "carne al horno con papas","carne horneada/papas/aceite oliva/aji","carnes",196,true,24);
    insert into restaurante.comidas values (11, "bife de chorizo mixto","bife/morron/cebolla/zanahoria/oregano/tomillo","carnes",210,true,50);
    insert into restaurante.comidas values (12, "bife de chorizo con pure","bife/pure a eleccion/pimienta/aceite/oregano","carnes",194,true,47);
    insert into restaurante.comidas values (13, "asado de tira completo","asado/morron/cebolla/aji","carnes",200,true,50);
    insert into restaurante.comidas values (14, "asado de tira","asado","carnes",140,true,50);
    insert into restaurante.comidas values (15, "parrillada para 2","chorizo/vacio/asado/costilla","carnes",250,true,52);
    insert into restaurante.comidas values (16, "parrillada para 2 completa","chorizo/vacio/asado/costilla/batatas/molleja/riñon/chinchulin","carnes",330,true,55);
    insert into restaurante.comidas values (17, "bistec a la plancha","/bistec/aceite/pimienta/nuez moscada","carnes",100,true,20);
    insert into restaurante.comidas values (18, "brocheta de ternera","trozos de ternera/cebolla/aji/morron","carnes",68,true,15);
    insert into restaurante.comidas values (19, "carne rellena","carne/zanahoria/tocino/jamon","carnes",126,true,45);
    insert into restaurante.comidas values (20, "albondigas con pure","albondigas/pure a eleccion/manteca/leche/aceite/oregano","carnes",140,true,40);
    insert into restaurante.comidas values (21, "lechon asado para 2 ","lechon/pimienta/tomillo","cerdos",300,true,50);
    insert into restaurante.comidas values (22, "lechon asado para 4","lechon/pimienta/tomillo","cerdos",500,true,50);
    insert into restaurante.comidas values (23, "lomo de cerdo aumado ","cerdo/tocino/oregano","pollos",200,true,56);
    insert into restaurante.comidas values (24, "chuleta de cerdo con huevos fritos","cerdo/huevos fritos/pimienta","cerdos",240,true,44);
    insert into restaurante.comidas values (25, "chuleta de cerdo al limon","cerdo/limon/","cerdos",150,true,32);
    insert into restaurante.comidas values (26, "espinaca con salsa blanca","espinaca/salsa blanca","vegetales",114,true,23);
    insert into restaurante.comidas values (27, "croquetas mixtas","croquetas de brocoli/soja/arroz","vegetales",105,true,41);
    insert into restaurante.comidas values (28, "milanesas de soja","soja/cereales","vegetales",94,true,30);
    insert into restaurante.comidas values (29, "brotes varios con salsa de soja","brotes de soja/semillas/repollo/zukni/salsa de soja","vegetales",160,true,35);
    insert into restaurante.comidas values (30, "escabeche de berenjenas","berenjenas/vinagre/ajos/aceite","vegetales",136,true,50);
    insert into restaurante.comidas values (31, "picles","ajo/zanahoria/pepino/morron/aji","vegetales",105,true,20);
    insert into restaurante.comidas values (32, "filet de merluza con pure","filet/pure a eleccion","pescados",140,true,38);
    insert into restaurante.comidas values (33, "filet de salmon con salsa 4 quesos","salmon/roquefort/cheddar/reggiano/grugere","pescados",175,true,25);
    insert into restaurante.comidas values (34, "filet de salmon con pure","salmon/pure a eleccion","pescados",140,true,20);
    insert into restaurante.comidas values (35, "merluza al olivo grillado con aceitunas verdes","merluza/aceitunas/aceite oliva/oregano","pescados",240,true,39);
    insert into restaurante.comidas values (36, "pescado al pesto","merluza/albahaca/aceite oliva/queso parmesano","pescados",123.50,true,34);
    insert into restaurante.comidas values (37, "filet de merluza a la provenzal","merluza/provenzal/pimienta","pescados",100,true,41);
    insert into restaurante.comidas values (38, "filet a la naranja","merluza/jugo de naranja","pescados",110,true,18);
    insert into restaurante.comidas values (39, "camarones mixtos","camarones/aji/morron/pimienta","pescados",148,true,38);
    insert into restaurante.comidas values (40, "camarones al ajillo","camarones/limon/ajo/perejil","pescados",121.90,true,22);
    insert into restaurante.comidas values (41, "langostinos pelados","langostinos/limon/ajo/","pollos",185,true,16);
    insert into restaurante.comidas values (42, "revuelto de mariscos","calamar/pulpo/mejillon/almeja/kanicama/salsa al vino","pescados",247,true,47);
    insert into restaurante.comidas values (43, "cazuela de mariscos","calamar/mejillon/almejas/salsa tomate","pescados",215,true,34);
    insert into restaurante.comidas values (44, "rabas","rabas/limon","pescados",160,true,15);
    insert into restaurante.comidas values (45, "rabas a la provenzal","rabas/limon/provenzal","pescados",190,true,17);
    insert into restaurante.comidas values (46, "pulpo a la gallega","pulpo/papas/batatas/aceite/pimenton","pescados",290,true,49);
    insert into restaurante.comidas values (47, "almejas marineras","almejas/vino blanco/limon","pescados",200,true,11);
    insert into restaurante.comidas values (48, "spaghetti con bolognesa","spaghetti/carne/fileto","pastas",90,false,17);
    insert into restaurante.comidas values (49, "spaghetti con fileto","spaghetti/fileto","pastas",80,false,15);
    insert into restaurante.comidas values (50, "spaghetti con salsa de mar","spaghetti/camarones/mejillones/almejas/fileto","pastas",159,false,28);
    insert into restaurante.comidas values (51, "spaghetti con pesto","spaghetti/albahaca/ajo/perejil","pastas",120,false,20);
	insert into restaurante.comidas values (52, "ñoquis con bolognesa","ñoquis/carne/fileto","pastas",100,false,18);
	insert into restaurante.comidas values (53, "ñoquis con salsa de camarones","ñoquis/camarones/crema/salsa golf","pastas",182,false,35);
	insert into restaurante.comidas values (54, "ñoquis con salsa rosa","ñoquis/fileto/crema","pastas",114.60,false,26);
	insert into restaurante.comidas values (55, "ravioles con bolognesa","ravioles/fileto/carne","pastas",111.50,false,17);
	insert into restaurante.comidas values (56, "ravioles  con salsa blanca","ravioles/crema/vino","pastas",131,false,27);
	insert into restaurante.comidas values (57, "ravioles con fileto","ravioles/fileto","pastas",99,false,22);
	insert into restaurante.comidas values (58, "lasagna con fileto","lasagna/fileto","pastas",155,false,30);
	insert into restaurante.comidas values (59, "lasagna con bolognesa","lasagna/carne/fileto","pastas",170,false,30);
	insert into restaurante.comidas values (60, "lasagna a la parisienne","lasagna/jamon/pollo/crema","pastas",215.90,false,38);
	insert into restaurante.comidas values (61, "pizza muzarella","tomate/muzarella/aceitunas verdes","pizzas",80,false,20);
    insert into restaurante.comidas values (62, "pizza especial","tomate/jamon/morron/queso/aceitunas verdes","pizzas",110,false,25);
    insert into restaurante.comidas values (63, "pizza napolitana","queso/tomate/ajo/aceitunas verdes","pizzas",94,false,25);
	insert into restaurante.comidas values (64, "pizza de champigñones","queso/champgiñones","pizzas",120,false,30);
    insert into restaurante.comidas values (65, "pizza de jamon y huevo","jamon/hurvo/muzarella/tomate/aceitunas verdes","pizzas",105,false,24);
    insert into restaurante.comidas values (66, "pizza fugazzetta","muzarella/cebolla","pizzas",98,false,15);
    insert into restaurante.comidas values (67, "pizza calabresa","muzarella/salsa de tomate/longaniza/aceitunas verdes","pizzas",136,false,30);
    insert into restaurante.comidas values (68, "pizza de anchoas","muzarella/salsa de tomate/anchoas/aceitunas verdes","pizzas",145,false,18);
    insert into restaurante.comidas values (69, "pizza de rucula y jamon crudo","muzarella/salsa de tomate/rucula/jamon crudo/aceitunas verdes","pizzas",143.20,false,39);
    insert into restaurante.comidas values (70, "pizza humita","mozarella/salsa de tomate/chocolo desgranado","pizzas",118,false,26);
    insert into restaurante.comidas values (71, "picada de mar para 2 personas","langostinos/pulpo/camarones/berberechos/almejas/kanicama/calamar/mejillones/cornalitos","picadas",300,false,40);
    insert into restaurante.comidas values (72, "picada de fiambres","jamon crudo/jamon/bondiola/salame/longaniza/queso/leber","picadas",150,false,12);
    insert into restaurante.comidas values (73, "tablita caliente ","bombas de papa/cuadrados de queso/tomates cherry/trozos de tortilla/salchichas copetin/croquetas de espinaca","picadas",200,false,35);
    insert into restaurante.comidas values (74, "picada verde","faina/milanesa de berenjena/albondigas de quinoa/ramas de alcaucil","picadas",144,true,37);
    insert into restaurante.comidas values (75, "milanesa de carne con fritas","papas/milanesa de carne","minutas",120,true,18);
    insert into restaurante.comidas values (76, "milanesa de pollo con fritas","papas/milanesa de pollo","minutas",110,true,18);
    insert into restaurante.comidas values (77, "milanesa completa de carne","milanesa carne/jamon/queso/cheddar/tomate/lechuga/panceta","minutas",150,true,20);
	insert into restaurante.comidas values (78, "milanesa completa de pollo","milanesa pollo/jamon/queso/cheddar/tomate/lechuga/panceta","minutas",138,true,20);
	insert into restaurante.comidas values (79, "milanesa napolitana carne","milanesa carne/jamon/queso/tomate","minutas",130,true,16);
	insert into restaurante.comidas values (80, "milanesa napolitana pollo","milanesa pollo/jamon/queso/tomate","minutas",129,true,16);
	insert into restaurante.comidas values (81, "hamburguesa","carne/queso/cebolla","minutas",72,true,15);
	insert into restaurante.comidas values (82, "hamburguesa completa","carne/queso/cebolla/pepino/panceta/tomate/lechuga","minutas",120,true,18);
	insert into restaurante.comidas values (83, "pancho","salchicha/pan/papas pay","minutas",55,true,12);
	insert into restaurante.comidas values (84, "omelette","huevo/jamon/queso","minutas",98,false,15);
	insert into restaurante.comidas values (85, "tortilla de papa","papa/huevo","minutas",85,true,20);
	insert into restaurante.comidas values (86, "tortilla de arroz","arroz/cereales/huevo","minutas",78,false,20);
	insert into restaurante.comidas values (87, "sopa de pollo","pollo trozado/caldo/zapallito verde/zanahoria","sopas",137,true,36);
	insert into restaurante.comidas values (88, "sopa de pescado","merluza negra/caldo/esparragos/cebolla/puerro","sopas",175,true,36);
	insert into restaurante.comidas values (89, "sopa de brocoli","caldo/brocoli/aceite oliva/tomillo/albahaca","sopas",103,true,25);
	insert into restaurante.comidas values (90, "sopa de verduras","caldo/zanahoria/patatas/puerro/guisantes/pimienta negra/aceite oliva","sopas",129,true,25);
	insert into restaurante.comidas values (91, "crema de calabaza","cebolla/caldo/mantequilla/calabaza/pimienta negra","sopas",141,true,20);
	insert into restaurante.comidas values (92, "sopa clasica","caldo/cabello de angel","sopas",84,true,20);
	insert into restaurante.comidas values (93, "ensalada mixta","tomate/lechuga/cebolla/aceite oliva","ensaladas",49,true,15);
	insert into restaurante.comidas values (94, "ensalada clasica","tomate/lechuga/aceite oliva","ensaladas",39,true,15);
	insert into restaurante.comidas values (95, "ensalada cesar","trozos de pan tostado/lechuga/queso parmesano/salsa blanca","ensaladas",110,false,25);
	insert into restaurante.comidas values (96, "ensalada griega","tomate/pepino/pimienta/cebolla/aceitunas negras/aceite oliva/oregano","ensaladas",96,true,20);
    insert into restaurante.comidas values (97, "ensalada waldorf","manzana verde/apio/mayonesa/crema/nuez/vinagre/limon","ensaladas",100,true,22);
    insert into restaurante.comidas values (98, "ensalada caprese","tomates/muzarella/albahaca/aceite oliva/pimienta","ensaladas",77,true,18);
    insert into restaurante.comidas values (99, "ensalada criolla","aji verde/aji rojo/cebolla/tomates/aceite oliva/vinagre","ensaladas",81,true,22);
    insert into restaurante.comidas values (100, "ensalada de champiñones","champiñones/jugo de limon/perejil/pimienta/aceite oliva","ensaladas",136,true,30);
    insert into restaurante.comidas values (101, "ensalada de repollo","repollo/vinagre/mayonesa/aceitunas negras/crema","ensaladas",128,true,26);
    insert into restaurante.comidas values (102, "ensalada de chauchas","chauchas/papas/tomate/rucula/cebollita verdeo/vinagre/aceite oliva/perejil","ensaladas",109,true,23);
	insert into restaurante.comidas values (103, "conejo estofado","conejo/cebolla/zanahoria/vino tinto","especiales",230,true,35);
	insert into restaurante.comidas values (104, "mollejas al vino blanco","mollejas/limon/puerro/vino blanco","especiales",125,true,24);
	insert into restaurante.comidas values (105, "paella","arroz/azafran/kanicama/calamar/camaron/aceite/caldo","especiales",198,true,39);
	insert into restaurante.comidas values (106, "tapas para 2 ","calentitos varios/tortilla/croquetas de jamon y queso","especiales",174,true,37);
	insert into restaurante.comidas values (107, "chapatas con anchoas","pimientos rojos/berenjenas/tomates/anchoas","especiales",140,true,30);
	insert into restaurante.comidas values (108, "sushis variados","sushi camaron/sushi arroz con pepino/sushi arroz con salmon crudo/sushi cereales y zukini","especiales",181,true,27);
	insert into restaurante.comidas values (109, "sushis variados para 2","sushi camaron/sushi arroz con pepino/sushi arroz con salmon crudo/sushi cereales y zukini","especiales",230,true,30);
    insert into restaurante.comidas values (110, "risotto de pavo","aceite oliva/ajo/arroz/vino blanco/azafran/pavo/queso parmesano","especiales",286,true,40);
    insert into restaurante.comidas values (111, "calabaza rellena de pollo","calabaza/pollo/cebolla/morron/aceitunas negras/huevo/muzarella","especiales",198,true,33);
    insert into restaurante.comidas values (112, "chow fan","arroz/zanahoria/pimientos rojos/aceite/huevo/trozos de pollo/cebollita de verdeo","especiales",204.80,true,45);
    insert into restaurante.comidas values (113, "musaka especial","berenjenas/cebolla/carne picada/queso rallado/vino blanco","especiales",161,true,31);
    insert into restaurante.comidas values (114, "calzone de pollo","pechuga de pollo/cebolla/morron/salsa de tomate","especiales",173,false,38);
    insert into restaurante.comidas values (115, "calzone mediterraneo","albahaca/ajo/pimienta/queso parmesano/jamon/tomates cherry/huevo/aceite","especiales",233,false,47);
    insert into restaurante.comidas values (116, "taco de pollo","pechuga de pollo/pimiento rojo/pimiento verde/pimienta negra/masa/tabasco/guacamole","especiales",79,false,17);
    insert into restaurante.comidas values (117, "taco de carne","carne de terneta/pimientos rojos/pimientos verdes/cebolla/salsa tabasco/guacamole/masa","especiales",90,false,17);
    insert into restaurante.comidas values (118, "taco de pescado","merluza/salmon/masa/cebolla/zanahoria/palta/repollo/huevo duro/tabasco","especiales",100,false,24);
    
    


create table restaurante.postres
(	id_postre int not null auto_increment,
	nombre varchar(50) not null,
    ingredientes varchar(80) not null,
    categoria varchar(20) not null,						/*cafeteria y postres*/
    precio int not null,
    celiaco boolean,
    tiempo_preparacion time,
    primary key(id_postre)
);
    
    
	insert into restaurante.postres values (1, "bocha helado chocolate","chocolate","postres",33,false,7);
    insert into restaurante.postres values (2, "bocha helado vainilla","vainilla","postres",33,true,7);
    insert into restaurante.postres values (3, "bocha helado frutilla","frutilla","postres",33,true,7);
    insert into restaurante.postres values (4, "bocha helado dulce de leche","dulce de leche","postres",33,true,7);
    insert into restaurante.postres values (5, "bocha helado menta granizadoa","menta","postres",33,true,7);
    insert into restaurante.postres values (6, "bocha helado americana","crema americana","postres",33,true,7);
    insert into restaurante.postres values (7, "bocha helado limon","mouse limon","postres",33,true,7);
	insert into restaurante.postres values (8, "tarta helada","choholate/almendra","postres",58,false,12);
	insert into restaurante.postres values (9, "lemon pie","limon/mouse de merengue/masa/harina/manteca/huevo/leche","postres",65,true,16);
	insert into restaurante.postres values (10, "souffle de chocolate","leche/chocolate/huevo/cacao/dulce de leche","postres",54,false,15);
	insert into restaurante.postres values (11, "budin de pan","huevos/vainillin/pan/leche/nueces","postres",50,false,22);
	insert into restaurante.postres values (12, "flan","leche condensada/huevos/azucar/vainillin","postres",47,true,20);
	insert into restaurante.postres values (13, "tiramisu","vainilla/azucar/huevos/harina/macarpone/crema/chocolate espolvoreado","postres",55,false,18);
	insert into restaurante.postres values (14, "selva negra","huevo/harina/cacao/fecula de maiz/manteca","postres",72,false,23);
	insert into restaurante.postres values (15, "cheese cake","frutillas/crema/gelatina sin sabor/manteca/queso/azucar","postres",85,true,30);
	insert into restaurante.postres values (16, "queso y dulce","queso/batata/membrillo","postres",40,true,13);
	insert into restaurante.postres values (17, "ensalada de frutas","kiwi/banana/narnaja/manzana/pera/mandarina","postres",28,true,15);
	insert into restaurante.postres values (18, "cafe express","cafe","cafeteria",30,false,9);
	insert into restaurante.postres values (19, "cortado","cafe/leche","cafeteria",38,false,9);
	insert into restaurante.postres values (20, "capuccino","cafe/leche/cacao","cafeteria",40,false,9);
	insert into restaurante.postres values (21, "submarino","leche/barra de chocolate","cafeteria",40,false,7);
	insert into restaurante.postres values (22, "leche manchada","leche/gotita de cafe","cafeteria",35,true,7);
	insert into restaurante.postres values (23, "te hierbas","tilo/manzanilla/anis","cafeteria",30,true,8);
    
    

create table restaurante.bebidas
(	id_bebida int not null auto_increment,
	nombre varchar(40),
    ingredientes varchar(80),
    categoria varchar(20),						/*bebida sin alcohol y con alcohol*/
    precio int not null,
    celiaco boolean,
    tiempo_servicio time,
    primary key(id_bebida)
);


	insert into restaurante.bebidas values (1, "agua","agua","bebida s/alcohol",25,true,5);
    insert into restaurante.bebidas values (2, "agua gasificada","agua/gas","bebida s/alcohol",28,true,5);
    insert into restaurante.bebidas values (3, "Coca-Cola","agua/gas/colorantes/conservantes/etc","bebida s/alcohol",38,true,5);
    insert into restaurante.bebidas values (4, "seven-up","agua/gas/jugo de limon/colorantes/conservantes/etc","bebida s/alcohol",38,true,5);
    insert into restaurante.bebidas values (5, "fanta","agua/gas/jugo de naranja/colorantes/conservantes/etc","bebida s/alcohol",38,true,5);
    insert into restaurante.bebidas values (6, "agua tonica","agua/gas/quinina/conservantes","bebida s/alcohol",38,true,5);
    insert into restaurante.bebidas values (7, "agua saborizada naranja","agua/jugo de naranja","bebida s/alcohol",40,true,5);
    insert into restaurante.bebidas values (8, "agua saborizada manzana","agua/jugo de manzana","bebida s/alcohol",40,true,5);
    insert into restaurante.bebidas values (9, "agua saborizada pomelo","agua/jugo de pomelo","bebida s/alcohol",40,true,5);
    insert into restaurante.bebidas values (10, "agua saborizada pera","agua/jugo y pulpa de pera","bebida s/alcohol",40,true,5);
    insert into restaurante.bebidas values (11, "cerveza stella artois","malta/cebada/agua/lupulo/levadura","bebida c/alcohol",100,false,5);
    insert into restaurante.bebidas values (12, "cerveza quilmes","malta/cebada/agua/lupulo/levadura","bebida c/alcohol",85,false,5);
    insert into restaurante.bebidas values (13, "cerveza brahma","malta/cebada/agua/lupulo/levadura","bebida c/alcohol",82,false,5);
    insert into restaurante.bebidas values (14, "cerveza heineken","malta/cebada/agua/lupulo/levadura","bebida c/alcohol",95,false,5);
    insert into restaurante.bebidas values (15, "medida vodka","trigo/cebada/centeno/maiz/papas","bebida c/alcohol",50,false,5);
    insert into restaurante.bebidas values (16, "wiskey","cebada/trigo/malteada/centeno/maiz","bebida c/alcohol",130,false,5);
    insert into restaurante.bebidas values (17, "ginebra","bayas de enebro/vodka","bebida c/alcohol",100,false,5);
    insert into restaurante.bebidas values (18, "campari","agua/alcohol/frutos aromados/hierbas","bebida c/alcohol",70,true,5);
    insert into restaurante.bebidas values (19, "martini","ginebra/vermouth","bebida c/alcohol",68,false,5);
    insert into restaurante.bebidas values (20, "daikiri de frutilla","agua/ron/pulpa frutilla/hielo/limon","bebida c/alcohol",80,true,5);
    insert into restaurante.bebidas values (21, "cuba libre","ron/coca-cola","bebida c/alcohol",65,false,5);
    insert into restaurante.bebidas values (22, "sanfria","pera/piña/limones/naranja/cognac","bebida c/alcohol",76,true,5);
    insert into restaurante.bebidas values (23, "piel de iguana","limon/kiwi/vodka/seven-up","bebida c/alcohol",60,false,5);
    insert into restaurante.bebidas values (24, "champagne federico de alvear","","bebida c/alcohol",80,true,5);
    insert into restaurante.bebidas values (25, "champagne reinasence","","bebida c/alcohol",88,true,5);
    insert into restaurante.bebidas values (26, "champagne chandon","","bebida c/alcohol",190,true,5);
    insert into restaurante.bebidas values (27, "champagne varon B","","bebida c/alcohol",450,true,5);
    insert into restaurante.bebidas values (28, "champagne pommery","","bebida c/alcohol",950,true,5);
    insert into restaurante.bebidas values (29, "cosecha tardia","vino espumante blanco/frutos disecados","bebida c/alcohol",200,true,5);
    insert into restaurante.bebidas values (30, "lopez cabernet","vino tinto/uvas cabernet-suavignon","bebida c/alcohol",220,true,5);
    insert into restaurante.bebidas values (31, "carcasonne cabernet","vino tinto/uvas cabernet-suavignon","bebida c/alcohol",180,true,5);
    insert into restaurante.bebidas values (32, "rutini sirah","vino tinto/uvas sirah","bebida c/alcohol",508,true,5);
    insert into restaurante.bebidas values (33, "rutini cabernet","vino tinto/uvas cabernet-suavignon","bebida c/alcohol",690,true,5);
    insert into restaurante.bebidas values (34, "rutini merlot","vino tinto/uvas merlot","bebida c/alcohol",420,true,5);
    insert into restaurante.bebidas values (35, "luigi bosca sirah","vino tinto/uvas sirah","bebida s/alcohol",360,true,5);
    insert into restaurante.bebidas values (36, "quara cabernet","vino tinto/uvas cabernet-suavignon","bebida c/alcohol",185,true,5);
    insert into restaurante.bebidas values (37, "trumpetter cabernet","vino tinto/uvas cabernet-suavignon","bebida c/alcohol",200,true,5);
    insert into restaurante.bebidas values (38, "new age","vino espumante blanco/frutos disecados","bebida c/alcohol",220,true,5);
    insert into restaurante.bebidas values (39, "trumpetter malbec","vino tinto/uvas malbec","bebida c/alcohol",236,true,5);
    insert into restaurante.bebidas values (40, "las perdices malbec","vino tinto/uvas malbec","bebida c/alcohol",472,true,5);
    insert into restaurante.bebidas values (41, "las perdices cabernet","vino tinto/uvas cabernet-suavignon","bebida c/alcohol",271,true,5);
    


create table restaurante.pedidos							/*ticket por aca compra*/ 
(	id_pedido int not null auto_increment,
	numero_mesa int not null,
    id_plato int not null,
    id_postre int not null,
    id_bebida int not null,
    hora time,												/*hora en que se pidio el plato o bebida o postre*/
    primary key(id_pedido),
    foreign key (id_plato) references restaurante.comidas(id_plato),
    foreign key (id_postre) references restaurante.postres(id_postre),
    foreign key (id_bebida) references restaurante.bebidas(id_bebida)
    
);

/*luego de pagar se deberia filtrar que mesa pago y eliminar todos los registros o tickets de esta tabla para con esa mesa*/

