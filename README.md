# taskbdr
Exemplo de API REST FULL com PHP, Laravel e MySQL.

# As questões de 1 a 3 estão no repositorio em umas pasta chamada questoes.

# Não consegui terminar o readme a tempo.

Mais o básico para rodar a api, você deve ter instalado o php7 e as dependencias do laravel 5.8 conforme o solicitado no site https://laravel.com/docs/5.8, ter o mysql serve instaldo e criar uma base de dados para o mesmo.
Instalar o composer que o gerenciador de pacote do para baixar as depencias do projeto a após a instalação entrar na pasta do projeto pelo terminar e rodar o comando composer update.
Após instalar todas dependecias com o composer configurar as varias de coneção com banco de dados no .env conforme exemplo abaixo:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seubanco
DB_USERNAME=usuario
DB_PASSWORD=senha

Agora vamos rodar a migrate para criar a tabela de task, com o terminal aberto na pasta do projeto é só rodar o comando php artisan migrate

Agora vamos rodar o servidor para levantar a api, rode o camando php artisan server.

depois é http://localhost:8000/api/tasks.

