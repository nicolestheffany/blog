insert into blog.usuario
	(nome, email, senha, sobre, img)
values
	('Fabiana', 'fabiana@email.com', '123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'user2.jpg');

insert into blog.categoria
	(nome)
values
	('Viagem'),
    ('Fotografia'),
    ('Tecnologia');

insert into blog.post
	(titulo, descricao, datacadastro, texto, categoria_id, usuario_id, img)
values
	('Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', now(), 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', '1', 'img1.jpg'),
    ('Augue ut lectus arcu bibendum', null, now(), 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue ut lectus arcu bibendum at varius vel. Posuere morbi leo urna molestie at elementum eu facilisis. Etiam erat velit scelerisque in dictum non consectetur a erat. Tortor at auctor urna nunc id cursus. Pharetra vel turpis nunc eget lorem dolor sed viverra ipsum. Orci dapibus ultrices in iaculis nunc sed augue lacus. Maecenas pharetra convallis posuere morbi leo urna molestie at. Eget gravida cum sociis natoque penatibus. Id venenatis a condimentum vitae sapien pellentesque habitant morbi tristique. Nulla aliquet porttitor lacus luctus accumsan. Fusce ut placerat orci nulla pellentesque dignissim enim sit amet. Dui nunc mattis enim ut. A pellentesque sit amet porttitor eget dolor. Eget nullam non nisi est sit. Eget mi proin sed libero enim sed faucibus turpis. Porttitor massa id neque aliquam vestibulum.

Enim eu turpis egestas pretium aenean pharetra. Lectus magna fringilla urna porttitor rhoncus dolor purus. Fames ac turpis egestas maecenas pharetra convallis. Lacus sed turpis tincidunt id aliquet risus feugiat. Aliquet porttitor lacus luctus accumsan tortor posuere ac. Ut sem viverra aliquet eget sit amet tellus. Tristique senectus et netus et malesuada. Id interdum velit laoreet id donec ultrices tincidunt arcu. Consequat semper viverra nam libero justo. Bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida. Amet consectetur adipiscing elit duis tristique sollicitudin. Ornare quam viverra orci sagittis eu volutpat odio facilisis. Vitae tortor condimentum lacinia quis vel eros donec ac odio. Vitae proin sagittis nisl rhoncus.', '2', '1', 'img2.jpg'),
    ('Aliquet porttitor lacus', 'Et tortor consequat id porta nibh venenatis cras sed felis. Id leo in vitae turpis massa sed elementum tempus.', now(), 'Enim eu turpis egestas pretium aenean pharetra. Lectus magna fringilla urna porttitor rhoncus dolor purus. Fames ac turpis egestas maecenas pharetra convallis. Lacus sed turpis tincidunt id aliquet risus feugiat. Aliquet porttitor lacus luctus accumsan tortor posuere ac. Ut sem viverra aliquet eget sit amet tellus. Tristique senectus et netus et malesuada. Id interdum velit laoreet id donec ultrices tincidunt arcu. Consequat semper viverra nam libero justo. Bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida. Amet consectetur adipiscing elit duis tristique sollicitudin. Ornare quam viverra orci sagittis eu volutpat odio facilisis. Vitae tortor condimentum lacinia quis vel eros donec ac odio. Vitae proin sagittis nisl rhoncus.

Facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat. Morbi tristique senectus et netus et. Nibh mauris cursus mattis molestie a. Consectetur libero id faucibus nisl tincidunt eget. Adipiscing commodo elit at imperdiet. Imperdiet proin fermentum leo vel orci porta. Viverra suspendisse potenti nullam ac tortor. Tellus at urna condimentum mattis pellentesque id nibh tortor id. Tristique sollicitudin nibh sit amet commodo nulla facilisi. Lacus laoreet non curabitur gravida arcu ac. Et netus et malesuada fames ac turpis. Diam sollicitudin tempor id eu nisl nunc mi ipsum. Quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Id ornare arcu odio ut sem nulla. Tincidunt id aliquet risus feugiat. Enim sed faucibus turpis in eu mi bibendum. Ut tellus elementum sagittis vitae et. Montes nascetur ridiculus mus mauris vitae ultricies leo integer malesuada. Egestas maecenas pharetra convallis posuere morbi leo urna molestie. Laoreet id donec ultrices tincidunt arcu non sodales neque sodales.', '3', '1', 'img3.jpg');

insert into blog.post
	(titulo, descricao, datacadastro, texto, categoria_id, usuario_id)
values
	('Quarta publicação', 'Descrição top top de uma publicação top top', now(), 'aaaaasjdhgfhjhyhcnsjydbnshybnc', '2', '1'),

	('Quinta publicação', 'Descrição', now(), 'aaaaasjdhgfhjhyhcnsjydbnshybncksjdjshdiushgdhudhjdjhsud', '1', '1');